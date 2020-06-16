<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
<form action="{{route('post.update',$post)}}" method="POST">
    @csrf
    @method('PUT')
post title: <input type="text" name="title" id="" value="{{$post->title}}"><br><br>
post body <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
 <br>
 <input type="submit" name="" value="save" id="">

</form>




<hr>
<a href="{{route('post.index')}}">All posts</a>

</body>

</html>