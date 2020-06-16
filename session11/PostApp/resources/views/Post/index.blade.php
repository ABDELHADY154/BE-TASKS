<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    all Post
    <hr>
    <ul>
    @foreach ( $post as $returnedPost )
        
  
        <li>
        <a href="{{route('post.show',$returnedPost)}}">{{$returnedPost->title}}</a>||<a href="{{route('post.edit',$returnedPost)}}">edit</a>
       || <form action="{{route('post.destroy',$returnedPost)}}" method="POST" style="display: inline-block">
    @csrf
    @method('DELETE')
    <input type="submit" name="" value="delete" id="">
    </form>    
    </li>
        @endforeach
    </ul>
    <hr>
<a href="{{route('post.create')}}">create post</a>
</body>

</html>