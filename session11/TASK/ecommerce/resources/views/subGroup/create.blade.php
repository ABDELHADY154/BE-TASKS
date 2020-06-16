{{-- {{$groups = App\Group::find(1)->subGroups}} --}}

@extends('layouts.app')

@section('content')
<div class="text-right">
    <a class="btn btn-primary" href="{{route('subGroup.index')}}">All Sub-Groups</a>
    </div>
<form action="{{route('subGroup.store')}}" method="POST">
    @csrf
    {{-- <div class="form-group"> --}}
        <div class="form-group">

        <h3>Choose a Sub-Group</h3>
        <select name="group_id"  class="form-control" id="exampleFormControlSelect1" required>
            <option value="">please choose a group</option>

            @foreach ($groups as $group)
        <option value="{{$group->id}}">{{ $group->name }}</option>

            @endforeach
        
        </select></div>
      {{-- </div> --}}
      <div class="form-group">
        <h3>Sub-Group title</h3> 
    <input  class="form-control" type="text" name="name" id="" required></div>
    <div class="form-group">
        <h3> Sub-Group desc</h3> 

 <textarea class="form-control" name="desc" id="" cols="30" rows="5" required></textarea></div>


 <div class="form-group text-center">

    <input type="submit" name="" value="Add Sub-Group" id="" class="btn btn-success btn-lg "></div>
   
 {{-- <input type="submit" name="" value="save" id=""> --}}

</form>




<hr>

@endsection