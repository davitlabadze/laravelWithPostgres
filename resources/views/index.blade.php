<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <a href="{{ url('/create') }}">create post</a>
    @foreach ($posts as $post )
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    @endforeach

</body>
</html>
