@extends('layouts.app')

@section('content')

<h2 style="text-align: center"><u>All Groups</u></h2>    
<div class="text-right">
    <a href="{{route('group.create')}}" class="btn btn-primary">create new group</a></div>
<hr>

<ul class="list-group">
    @foreach ($groups as $group)
<li class="list-group-item">
   <h4><a href="{{route('group.show',$group)}}">{{ $group->name }}</a></h4> 
<div class="text-right">
    <a class="btn btn-secondary" href="{{route('group.edit',$group)}}">edit</a>
    <form class="" action="{{route('group.destroy',$group)}}" method="POST" style="display: inline-block">
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