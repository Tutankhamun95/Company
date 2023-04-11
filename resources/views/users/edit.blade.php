@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Subscribe</div>

                <div class="card-body">
            <form action="{{route('user.update',['id'=>$users->id])}}" method="POST" enctype="">
                {{csrf_field()}}

                <button type="submit" class="btn btn-primary" style="background-color: blue">Subscribe</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
