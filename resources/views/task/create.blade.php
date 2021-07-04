<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tasks" method="POST">
    @csrf
    <input type="text" name='title'><br>
    <input type="text" name='description'><br>
    <input type="radio" value="Completed"name='status'>
    <label>Completed</label> <br>
    <input type="radio" value="Incomplete" name='status'> 
    <label>Incomplete</label> <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>