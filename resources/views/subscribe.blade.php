

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscribe</div>
                
                <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            You must subscribe first
                            </div> 

                        @php
                        $currentUser = auth()->user();
                        @endphp

                        <a class="btn btn-primary" href="{{ route('user.edit',['id'=>$currentUser->id]) }}">Subscribe</a>
                        </div>
                        </div>                    
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection


