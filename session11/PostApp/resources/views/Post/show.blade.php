<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
<h1>{{$post->title}}</h1>
{{-- <a href="{{route}}"></a> --}}
<hr>
<p>{{$post->body}}</p>

<hr>
<a href="{{route('post.index')}}">All posts</a>

</body>

</html>