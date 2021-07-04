<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $task->title }}" name='title'><br>
    <input type="text"  value="{{ $task->description }}" name='description'><br>
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
   
    <button type="submit">Submit</button>
    </form>
</body>
</html>