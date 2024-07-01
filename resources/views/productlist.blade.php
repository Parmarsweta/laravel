<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            font-size:30px;

            
        }
        th, td {
                padding: 10px;
                text-align:center;
        }

        h2{
            text-align:center;
            font-size:40px;
            text-decoration-line:underline;
            padding: auto;
            

        }
 </style>
</head>
<body>
    <h2>Employee list</h2>
   <table align="center" border="1px" cellspadding="2">

    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
        <th>ACTION</th>
    </tr>
    @foreach ($product as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->price}}</td>
        <td><a href="{{ url('/productlist') }}"></a> |
        <a href="{{ url('/productedit',[$product->id]) }}"> </a> |
        <a href="{{ url('/del',[$product->id]) }}"></a></td>
    </tr>
   @endforeach
   </table> 
</body>
</html>