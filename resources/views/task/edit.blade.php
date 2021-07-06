@extends('layouts.app')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update your Task</title>
</head>
<body>
    <div class="container col-6 shadow-lg p-3 mb-5  rounded">
        <a href="/tasks">
            <button type="button" class="btn btn-primary">&#8592; Go back</button>
            </a>
    <form class = "mt-5 mb-5 p-5 mx-5 " action="/tasks/{{ $task->id }}" method="POST">
        <center><h2>Edit Your Task </h2></center> <br>

        <div class="col-auto">
    @csrf
    @method('PUT')
    <input class="form-control" type="text" value="{{ $task->title }}" name='title'><br>
    <input class="form-control" type="text"  value="{{ $task->description }}" name='description'><br>
    @if ($task->status =='Completed')
    
    <input type="radio" checked="checked" value="Completed"name='status'>
    <label>Completed</label> <br>
    <input type="radio" value="Incomplete" name='status'> 
    <label>Incomplete</label> <br>
    
    @else
    
        <input type="radio" value="Completed"name='status'>
        <label>Completed</label> <br>
        <input type="radio" checked="checked"  value="Incomplete" name='status'> 
        <label>Incomplete</label> <br>
        
        
    @endif
   
    <br><button  class="btn btn-outline-success" type="submit">Update Task</button>
        </div>
        @if ($errors->any())
    @foreach ($errors->all() as $error)
    <li style="color: red">
        {{ $error }}
    </li>
        
    @endforeach
        
    @endif

    </form>
    </div>
    
</body>
</html>
@endsection