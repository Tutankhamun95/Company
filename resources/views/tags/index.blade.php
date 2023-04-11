@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>
                @foreach ($tags as $tag)
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{$tag->tag}}</h5>
                        </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
