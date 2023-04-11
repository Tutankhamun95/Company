@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                @foreach ($users as $user)
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h2 class="btn btn-primary">{{$user->name}}</h2>
                            <br>
                            <h5 class="card-title">{{$user->email}}</h5>
                            @if ($user->subscribed == false)
                            <span class="badge bg-warning">Not Subscribed</span>
                            @else
                            <span class="badge bg-success">Subscribed</span>
                            @endif
                            <br>
                            
                            @foreach ($user->companies as $company)
                            <a href="#" class="btn btn-primary">{{$company->title}}</a>
                            @endforeach
                        </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
