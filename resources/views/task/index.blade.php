<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách quản lí công việc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 style="margin-left: 30%">Hiển thị danh sách quản lý công việc</h2>
<a href="{{route('task.create')}}" class="btn btn-primary">ADD</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @forelse($tasks as $key => $task)
        <tbody>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$task->title}}</td>
            <td>{{$task->content}}</td>
            <td>
                <img src="{{asset('storage/' . $task->image)}}" alt="" style=" width: 50px">
            </td>
            <td>
                <a href="{{route('task.show', ['id' => $task->id])}}" class="btn btn-primary">Show</a>
                <a href="{{route('task.edit', ['id' => $task->id])}}" class="btn btn-danger">Edit</a>
                <a href="{{route('task.delete',['id' => $task->id])}}" class="btn btn-info">Delete</a>
            </td>
        </tr>
        </tbody>
    @empty
        <p>Bảng quản lí công việc đang bị trống</p>
    @endforelse
</table>
    {{$tasks->links()}}
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>