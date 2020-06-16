@extends('layouts.app')

@section('content')
<h2 style="text-align: left">Group Name:</h2>
<h4 style="display: inline">{{$group->name}}</h4>
{{-- <a href="{{route}}"></a> --}}
<hr>
<h2 style="text-align: left">Group Description:</h2>

<h5>{{$group->desc}}</h5>

<hr>
<a href="{{route('group.index')}}" class="btn btn-primary">All groups</a>

@endsection