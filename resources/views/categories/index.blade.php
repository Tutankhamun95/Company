@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>
                @foreach ($categories as $category)
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                        </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
