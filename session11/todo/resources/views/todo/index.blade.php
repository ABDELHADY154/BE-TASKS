<!-- mohamed abdelhady -->

<h1>create to-do</h1>
<form action="{{isset($targetItem)? route('todo.update',$targetItem):  route('todo.store')}}" method="POST">
    @csrf
    @isset ($targetItem)
    @method('PUT')
    @endif
    <input type="text" name="title" id="" value="{{ isset($targetItem)? $targetItem->title :''}}">
    <input type="checkbox" name="is_done" value="1" id="" {{isset($targetItem) && $targetItem->is_done?'checked':''}}>
    <input type="submit" name="submit" value="{{isset($targetItem)? 'update': 'add'}} " id="">

</form>


<hr>
<ul>
    @foreach($todo as $item)
    <li>{{$item->title}}| <a href="{{route('todo.edit',$item)}}">EDIT</a> |
        <form action="{{route('todo.destroy',$item)}}" method="POST" style="display: inline-block;">
            @method('DELETE')
            @csrf
            <input type="submit" name="submit" value="delete" id=""> </form>
    </li>
    @endforeach
</ul>