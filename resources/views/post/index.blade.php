<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div>
            <input type="hidden" name="user_id" value="3">
            <input type="text" name="title" id="" placeholder="Title"><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Desc"></textarea>
            <br>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>