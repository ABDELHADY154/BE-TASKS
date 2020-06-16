@extends('layouts.app')

@section('content')

<h2 style="text-align: center">All Sub-Groups</h2>   
<div class="text-right">
    <a class="btn btn-primary" href="{{route('subGroup.create')}}">create new Sub-Group</a></div>
{{-- <h2 style="text-align: center">All Sub-Groups</h2>     --}}
<hr>
<ul  class="list-group">
    @foreach ($subGroups as $subGroup)
<li  class="list-group-item">
  <h4><a href="{{route('subGroup.show',$subGroup)}}">{{ $subGroup->name }}</a></h4>
  <div class="text-right">
    <a class="btn btn-secondary" href="{{route('subGroup.edit',$subGroup)}}">edit</a>
    <form class="" action="{{route('subGroup.destroy',$subGroup)}}" method="POST" style="display: inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="delete" id="" class="btn btn-danger">
        </form>        

       </div>

</li>
@endforeach
</ul>

<hr>
       {{-- {{ $group->desc }} --}}
@endsection 
{{-- {{$subGroup->group_id}} --}}

{{-- |<a href="{{route('group.edit',$subGroup)}}">edit</a>|
    <form action="{{route('group.destroy',$group)}}" method="POST" style="display: inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="delete" id="">
        </form>        
</li>
@endforeach

</ul>
       <hr>
       <a href="{{route('group.create')}}">create new group</a> --}}