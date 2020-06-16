@extends('layouts.app')

@section('content')
<div class="text-right">
    <a href="{{route('group.index')}}" class="btn btn-primary">All groups</a></div>
<form action="{{route('group.update',$group)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <h3>Group title</h3> 

{{-- group title:  --}}
<input type="text" class="form-control form-control-lg" name="name" id="" value="{{$group->name}}" required></div>
<div class="form-group">
{{-- group body  --}}
<h3>Group Description</h3> 

<textarea name="desc" class="form-control" id="" cols="30" rows="10" required>{{$group->desc}}</textarea></div>
<div class="form-group text-center">

    <input type="submit" name="" value="Save" id="" class="btn btn-success "></div>
 {{-- <input type="submit" name="" value="save" id=""> --}}

</form>




<hr>


@endsection