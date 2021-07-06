@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My ToDO List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
        <!-- App title section -->
        <div class="row m-1 p-4">
            <div class="col">
                <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                    <u>My ToDo Lists</u> <br>
                    
                </div>
            </div>
     
        </div>
        {{-- {{ dd(Auth::user()) }} --}}

        <!-- Create todo section -->
        <div class="row m-1 p-3">
            <div class="col col-11 mx-auto">
                <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                    <div class="col">
                        @if (Auth::user())
                        <center><h4><a href="/tasks/create"> Add a Task</a> </h4></center>
    
                        @endif
                    </div>
                    
                    {{-- <div class="col-auto px-0 mx-0 mr-2">
                        <button type="button" class="btn btn-primary">Search</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="p-2 mx-4 border-black-25 border-bottom"></div>
        <!-- View options section -->
        <div class="row m-1 p-3 px-5 justify-content">
            <div class="col-auto d-flex align-items-center">
               My Task
            </div>
          
        </div>
        <!-- Todo list section -->
        @if (count($tasks)<1)
        <center><h4>You have no task to do</h4></center>
            
        @endif
        @foreach ($tasks as $task)
       
        <div class="row mx-1 px-5 pb-3 w-80">
            <div class="col mx-auto">
                <!-- Todo Item 1 -->
                <div class="row px-3 align-items-center todo-item rounded">
                    
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <a href="/tasks/{{ $task->id }}" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" >
                            @if ($task->status == 'Completed')
                            <input style="color: green" type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" style="cursor: pointer;" readonly value="{{ $task->title }}" />
                            @else
                            <input style="color: red" type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" style="cursor: pointer;" readonly value="{{ $task->title }}" />

                            @endif

                        </a>
                        <a style="margin-right: 10px;" href="/tasks/{{ $task->id }}/edit">edit</a> 
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn" style="color: red">  <i class="  delete-button material-icons">delete</i>
                           
                            </button>
                        </form>

                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 todo-actions">
                       
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                                <i class="fa fa-info-circle my-2 px-2 text-black-50 btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Created date"></i>
                                <label class="date-label my-2 text-black-50">Created at: {{ $task->created_at }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        @endforeach
      
  
       
    </div>
    
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="/js/app.js"></script>
</body>
</html>
@endsection