@extends('layouts.app')
<div style="display: none">
    {{$subGroupNum = $item->sub_group_id}}
    {{-- {{$groupNum = $subGroup->group_id}} --}}
    </div>
@section('content')
<div class="text-right">
    <a href="{{route('item.index')}}" class="btn btn-primary">All Items</a></div>
<form action="{{route('item.update',$item)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>Choose Group</h3>
    <select name="sub_group_id"class="form-control" id="exampleFormControlSelect1">
        @foreach ($subGroups as $subGroup)
    <option value="{{$subGroup->id}}" {{$subGroup->id == $subGroupNum? 'selected':''}}>{{ $subGroup->name }}</option>

        @endforeach
    
    </select>
    <div class="form-group">
        <h3>Item title</h3> 

{{-- group title:  --}}
<input type="text" class="form-control form-control-lg" name="name" id="" value="{{$item->name}}"></div>
<div class="form-group">
{{-- group body  --}}
<h3>Item Description</h3> 

<textarea name="desc" class="form-control" id="" cols="30" rows="5">{{$item->desc}}</textarea></div>
<div class="form-group text-center">

    <input type="submit" name="" value="Save" id="" class="btn btn-success btn-lg"></div>
 {{-- <input type="submit" name="" value="save" id=""> --}}

</form>




<hr>


@endsection