@extends('layouts.app')
<div class="" style="display: none">
{{$email =  Auth::user()->email}}
{{$name =  Auth::user()->name }}</div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Welcome,  {{ ($email == 'admin@admin.com') ? 'Sir': $name }}</h1>

        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{route('group.index')}}" class="btn btn-primary">Groups</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
@foreach ($groups as $group)
                    <li><a href="{{route('group.show',$group)}}">{{$group->name}}</a></li>
@endforeach
</ul>
                    
                </div>
            </div><br>
            <div class="card">
                <div class="card-header"><a href="{{route('subGroup.index')}}" class="btn btn-primary">Sub-Groups</a></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul>
    @foreach ($subGroups as $subGroup)
                        <li><a href="{{route('subGroup.show',$subGroup)}}">{{$subGroup->name}}</a></li>
    @endforeach
    </ul>
                        
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header"><a href="{{route('item.index')}}" class="btn btn-primary">Items</a></div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <ul>
        @foreach ($items as $item)
                            <li><a href="{{route('item.show',$item)}}">{{$item->name}}</a></li>
        @endforeach
        </ul>
                            
                        </div>
                    </div><br>
        
        </div>
    </div>
    

</div>
@endsection
