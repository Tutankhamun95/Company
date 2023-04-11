@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$companies->title}}</div>

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
            <form action="{{route('company.update',['id'=>$companies->id])}}" method="POST" enctype="">
                {{csrf_field()}}
                <div class="form-check">
                @foreach ($users as $user)
                    <label class="form-check-label"  >
                    <input class="form-check-input" type="checkbox" name="users[]" value="{{$user->id}}" 
                        
                    @foreach ($companies->users as $ta)
                    @if ($user->id == $ta->id)
                        checked
                    @endif
                    @endforeach
                        >  {{$user->name}}  </label><br>
                    @endforeach 
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" value="{{$companies->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="3" >
                        {{$companies->content}}
                    </textarea>
                </div> 
                <button type="submit" class="btn btn-primary" style="background-color: blue">Update</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
