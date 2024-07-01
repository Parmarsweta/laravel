<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tbody>
        <h2>company list</h2>
        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
            </tr>
            @foreach ($company as $data )
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
            </tr>
                
            @endforeach
        </table>
    </tbody>
</body>
</html>