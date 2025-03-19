<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <div class="content">{{$post->content}}</div>
    <form action="{{route('delete', $post->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>
    <div class="content">{{$post->content}}</div>
    <form action="{{route('update', $post->id) }}" method="POST">
        @csrf
        @method("PUT")
        <button type="submit">edit</button>
    </form>
</body>
</html>
