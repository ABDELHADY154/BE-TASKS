@extends('layouts.app')

<div style="display: none">
    {{$groupNum = $subGroup->group_id}}<br>
    {{$group = $groups -> find($groupNum)}}<br></div>
@section('content')
<h2 style="text-align: left">Sub-Group Name:</h2>

<h4>{{$subGroup->name}}</h4>
{{-- <a href="{{route}}"></a> --}}
<hr>
<h2 style="text-align: left">Sub-Group Description:</h2>
<h5>{{$subGroup->desc}}</h5>

<hr>
<h4 style="text-align: left">Group Name: <p>{{$group->name}}</p>
</h4>

{{-- @if ($subGroup->group) --}}
    
{{-- @endif --}}

{{-- <h4>the group is : {{$group->name}}</h4> --}}
<a href="{{route('subGroup.index')}}" class="btn btn-primary">All sub-Groups</a>

@endsection

