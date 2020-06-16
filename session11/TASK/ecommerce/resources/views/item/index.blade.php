@extends('layouts.app')

@section('content')
<h2 style="text-align: center">All Items</h2>   
<div class="text-right">
    <a class="btn btn-primary" href="{{route('item.create')}}">create new Item</a></div>
{{-- <h2 style="text-align: center">All Sub-Groups</h2>     --}}
<hr>
<ul  class="list-group">
    @foreach ($items as $item)
<li  class="list-group-item">
  <h4><a href="{{route('item.show',$item)}}">{{ $item->name }}</a></h4>
  <div class="text-right">
    <a class="btn btn-secondary" href="{{route('item.edit',$item)}}">edit</a>
    <form class="" action="{{route('item.destroy',$item)}}" method="POST" style="display: inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="delete" id="" class="btn btn-danger">
        </form>        

       </div>

</li>
@endforeach
</ul>

<hr>






@endsection