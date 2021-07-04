@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 p-5">
        <h2><a href="/tasks/create"> Add a Task</a> </h2>
        @foreach ($tasks as $task)
        <div class="row">
            {{ $task->title }} <br>
            {{ $task->description }} <br>
            {{ $task->status }} <br>
            <a href="/tasks/{{ $task->id }}/edit">edit</a> <br>
            <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit"> Delete</button>
            </form>
        </div> <hr>
            @endforeach
       
    </div>
</body>
</html>
@endsection