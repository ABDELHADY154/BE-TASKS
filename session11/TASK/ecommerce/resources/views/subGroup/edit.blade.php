@extends('layouts.app')
<div style="display: none">
    {{$groupNum = $subGroup->group_id}}
    </div>
@section('content')
<div class="text-right">
    <a href="{{route('subGroup.index')}}" class="btn btn-primary">All Sub-Groups</a></div>
<form action="{{route('subGroup.update',$subGroup)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>Choose Group</h3>
<select name="group_id"class="form-control" id="exampleFormControlSelect1">
        @foreach ($groups as $group)
    <option value="{{$group->id}}" {{$group->id == $groupNum? 'selected':''}}>{{ $group->name }}</option>

        @endforeach
    
    </select>
    <div class="form-group">
        <h3>Sub-Group title</h3> 

{{-- group title:  --}}
<input type="text" class="form-control form-control-lg" name="name" id="" value="{{$subGroup->name}}"></div>
<div class="form-group">
{{-- group body  --}}
<h3>SUub-Group Description</h3> 

<textarea name="desc" class="form-control" id="" cols="30" rows="5">{{$subGroup->desc}}</textarea></div>
<div class="form-group text-center">

    <input type="submit" name="" value="Save" id="" class="btn btn-success btn-lg"></div>
 {{-- <input type="submit" name="" value="save" id=""> --}}

</form>




<hr>


@endsection