<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            font-size: 30px;
            text-align: center;
        }
        th,td{
            padding: 10px;
            text-align: center;
        }

</style>
</head>
<body>
    <h2 align="center">Student Add</h2>
    <form action="{{ url('add') }}" method="POST">
    @csrf
        <table align="center" cellspadding="2" cellspacing="0">
                <tr>
                    <td>name :</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>photo :</td>
                    <td><input type="file" name="photo" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                </tr>
        </table>
    </form>
</body>
</html>