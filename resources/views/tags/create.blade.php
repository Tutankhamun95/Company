@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Tag</div>

                <div class="card-body">
                @if(count($errors)>0)
            <ul class="navbar-nav mr-auto">
                @foreach ($errors->all() as $error)
                <li class="nav-item active">
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif
            <form action="{{route('tag.store')}}" method="POST" enctype="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input name="tag" type="text" class="form-control" placeholder="title">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blue">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
