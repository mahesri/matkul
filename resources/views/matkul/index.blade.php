<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Subject Study</title>
</head>
<body>
    <h1>List Subject Study</h1>

    <p><a href="{{ route('matkul.addMatkul')}}">Add Subject Study</a></p>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Credit</th>
            <th>Action</th>
        </tr>
        @foreach ($matkuls as $id => $data)
        <tr>
            <td> {{ $data['name'] }}</td>
            <td> {{ $data['code'] }}</td>
            <td> {{ $data['credit'] }}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>