@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>

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
            <form action="{{route('user.store')}}" method="POST" enctype="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">User</label>
                    <input name="name" type="text" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: blue">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
