<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->paginate(1);
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->content = $request->input('content');

        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $task->image = $path;
        } else {
            echo 'anh bi loi';
        }
        $task->save();
        return redirect()->route('task.index');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('task.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $task->image = $path;
        } else {
            echo "bạn chọn lại file ";
        }
        $task->save();
        return redirect()->route('task.index');
    }

    public function delete($id){
        $task = Task::findOrFail($id);
        return view('task.delete', compact('task'));
    }

    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}