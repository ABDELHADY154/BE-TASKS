@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col">
<div class="text-right">
        <a href="{{route('group.index')}}" class="btn btn-primary">All groups</a></div>

<form action="{{route('group.store')}}" method="POST">
     <div class="form-group">

    @csrf
 <h3>Group title</h3> 
 <input class="form-control form-control-lg" type="text" name="name" id="" required></div>
 <div class="form-group">

    <h3>Group Description</h3> 
    <textarea class="form-control" name="desc" id="" cols="30" rows="10" required></textarea></div>
    <div class="form-group text-center">

 <input type="submit" name="" value="Add Group" id="" class="btn btn-success "></div>

</form>



<hr>
</div></div>
@endsection