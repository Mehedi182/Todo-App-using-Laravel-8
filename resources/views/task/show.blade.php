@extends('layouts.app')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details of your task</title>
</head>
<body>
    <div class="container col-6 shadow-lg p-3 mb-5 mt-5 rounded">
        <a href="/tasks">
        <button type="button" class="btn btn-primary">&#8592; Go back</button>
        </a>
        @foreach ($tasks as $task)
        <h1><u>Title</u> </h1><h2 style="color: #0D17F0">{{ $task->title }} </h2><br>
        <h3><u>Description</u></h3>{{ $task->description }} <br><br>
        <h5>Status: 
            @if ($task->status == 'Completed')
            <small style="color: green">{{ $task->status }}</small> </h5>
            @else
            <small style="color: red">{{ $task->status }}</small> </h5>
            @endif
        @endforeach
    </div>
    
</body>
</html>
@endsection