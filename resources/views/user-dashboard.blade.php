<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>User Dasboard</p>
    <p>Name: {{ Auth::user()->name }}</p>
    {{-- <p>Name: {{ auth()->user()->name }}</p> --}}
    <p>Email:{{ auth()->user()->email }} </p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">LOGOUT</button>
    </form>
   
</body>
</html>