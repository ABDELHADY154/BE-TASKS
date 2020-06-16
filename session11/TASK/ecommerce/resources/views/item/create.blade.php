@extends('layouts.app')

@section('content')
<div class="text-right">
    <a class="btn btn-primary" href="{{route('item.index')}}">All Items</a>
    </div>
<form action="{{route('item.store')}}" method="POST">
    @csrf
        <div class="form-group">

        <h3>Choose Group</h3>
        <select name="sub_group_id"  class="form-control" id="exampleFormControlSelect1" required>
            <option value="">please choose a Sub-Group</option>

            @foreach ($subGroups as $subGroup)
        <option value="{{$subGroup->id}}">{{ $subGroup->name }}</option>

            @endforeach
        
        </select></div>
      {{-- </div> --}}
      <div class="form-group">
        <h3>Item title</h3> 
    <input  class="form-control" type="text" name="name" id="" required></div>
    <div class="form-group">
        <h3> Item desc</h3> 

 <textarea class="form-control" name="desc" id="" cols="30" rows="5" required></textarea></div>


 <div class="form-group text-center">

    <input type="submit" name="" value="Add Item" id="" class="btn btn-success btn-lg "></div>
   

</form>




<hr>

@endsection