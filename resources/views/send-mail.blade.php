<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('send.mail') }}" method="POST">
        @csrf
        <label for="">Email</label><br>
        <input type="email" name="email" id=""><br>
        <label for="">Message</label><br>
        <input type="text" name="message" id=""><br>
        <button type="submit">Send message</button>
    </form>
</body>
</html>