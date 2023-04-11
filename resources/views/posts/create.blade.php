@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

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
            @php
            $user = auth()->user();
            @endphp
            <form action="{{route('post.store')}}" method="POST" enctype="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="company_id">Post on Behalf of: </label>
                    <select class="form-control" name="company_id" id="company_id">
                        @foreach ($user->companies as $company)
                            <option value="{{$company->id}}">{{$company->title}}</option>
                        @endforeach
                    </select>
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    @foreach ($tags as $tag)
                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        {{$tag->tag}}
                    </label>
                    <br>
                    @endforeach 
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="3"></textarea>
                </div> 
                <button type="submit" class="btn btn-primary" style="background-color: blue">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
