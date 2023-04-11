@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Companies</div>
                @foreach ($companies as $company)
                <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h2 class="btn btn-primary">{{$company->title}}</h2>
                            <br>
                            <small>{{$company->updated_at}}</small>
                            <br>
                            <div class="alert alert-primary" role="alert">
                            {{$company->content}}
                            </div>   
                            <br>
                            <h6 href="#" class="btn btn-primary">{{$company->user->name}}</h6>
                            @if ($company->user->subscribed == false)
                            <span class="badge bg-warning">Not Subscribed</span>
                            @else
                            <span class="badge bg-success">Subscribed</span>
                            @endif
                            <br>
                            <br>
                            <div class="btn-group">
                                @foreach ($company->users as $user)
                                    <a href="#" class="btn btn-secondary">{{$user->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
