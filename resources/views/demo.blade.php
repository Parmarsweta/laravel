<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Home : First Page :</h1>
   {{ 5+2 }} 
   <br>
   @php
       echo "hello world";
   @endphp
   <br><br>

   {!! "<h1>Hello sweta parmar</h1>" !!}

   @php
       $user = ["sweta","parmar","kasu","parekh"];
   @endphp
  {{-- <ul>
  @foreach ($user as $use)
     <li>{{ $loop->index }}   {{ $use }}</li> 
     <li>{{ $loop->iteration }}   {{ $use }}</li> 
     <li>{{ $loop->count }}   {{ $use }}</li> 
  @endforeach
  </ul> --}}
  <ul>
@foreach ($user as $use)
@if ($loop->first)
<li style="color: red;">{{ $use }}</li> 

@elseif ($loop->last)
<li style="color: green;">{{ $use }}</li> 
@endif
<li>{{ $use }}</li> 
@endforeach
  </ul>
</body>
</html>