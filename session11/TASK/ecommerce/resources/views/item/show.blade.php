@extends('layouts.app')

<div style="display: none">
    {{$subGroupNum = $item->sub_group_id}}<br>
    {{$subGroup = $subGroups -> find($subGroupNum)}}<br></div>
@section('content')
<h2 style="text-align: left">Item Name:</h2>

<h4>{{$item->name}}</h4>
{{-- <a href="{{route}}"></a> --}}
<hr>
<h2 style="text-align: left">Item Description:</h2>
<h5>{{$item->desc}}</h5>

<hr>
<h4 style="text-align: left">Sub-Group Name: <p>{{$subGroup->name}}</p>
</h4>

{{-- @if ($subGroup->group) --}}
    
{{-- @endif --}}

{{-- <h4>the group is : {{$group->name}}</h4> --}}
<a href="{{route('item.index')}}" class="btn btn-primary">All items</a>

@endsection

