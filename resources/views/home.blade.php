<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
<style>
    body {
        display: grid;
        place-items: center;
        height: 50vh;
        margin: 0;
    }
</style>
    <h1>
        welcome to my blog where i post about tech
    </h1>
    <a href="{{route('add-post')}}">
        <button> add posts</button>
    </a>

</head>
<body>

    @if(count ($posts) > 0)
        @foreach($posts as $post)
            <div class="blog-post">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h2>{{ $post->title}}</h2>
                    <div style="margin-left:10px;">{{$post->content }}</div>
                    <div style="margin-left:10px;">
                        <a href="{{route('viewPost', $post->id)}}">view</a>
                    </div>

                </div>
            </div>
        @endforeach
    @else
        <p>no posts found</p>
    @endif
</body>
</html>
