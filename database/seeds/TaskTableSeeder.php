<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->title = 'Trợ Lý';
        $task->content = 'Quản lí nhập kho';
        $task->image = 'images/xDhXUaPeMFYERHl31rnQjvxLEEdBnFJ0nf4Xjizq.png';
        $task->save();

        $task = new Task();
        $task->title = 'Nhân sự';
        $task->content = 'Quản lí công nhân';
        $task->image = 'images/xDhXUaPeMFYERHl31rnQjvxLEEdBnFJ0nf4Xjizq.png';
        $task->save();

    }
}
