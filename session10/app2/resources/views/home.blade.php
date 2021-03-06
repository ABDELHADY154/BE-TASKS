@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- {{Auth::user()->id}} -->
                    Welcome, <h4>{{Auth::user()->name}}</h4>
                    Your email: {{Auth::user()->email}}<br>
                    Account created at: {{(Auth::user()->created_at)}}<br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection