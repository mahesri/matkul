<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Subject Study</title>
</head>
<body>
    <h1>Add Subject Study</h1>

    <form action="{{ url('/matkul')}}" method="POST">
    <input type="text" name="name" id="" placeholder="Name subject" required><br>
    <input type="text" name="code" id="" placeholder="Code subject" required><br>
    <input type="number" name="credit" id="" placeholder="Credit subject" required> <br>
    <button type="submit">Save</button>
    </form>
</body>
</html>