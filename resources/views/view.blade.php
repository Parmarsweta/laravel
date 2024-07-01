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
    <h2>student list</h2>
    <a href="{{ url('add') }}">add</a>
   <table align="center" border="1px" cellspadding="2"  cellspacing="0">

    <tr>
        
        <th>name</th>
        <th>Photo</th>
        <th>action</th>
    </tr>
    @foreach ($stud as $data)
    <tr>
        
        <td>{{$data->name}}</td>
        <td>{{$data->photo}}</td>
        <td><a href="{{ url('edit',[$data->id]) }}">edit</a> |
        <a href="{{ url('/del',[$data->id]) }}">delete</a></td>
        

            
    </tr>
   @endforeach
   </table> 

   
  
</body>
{{-- {{ $emp->links() }} --}}
</html>