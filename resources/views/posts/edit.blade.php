@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post {{$posts->title}}</div>

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
            <form action="{{route('post.update',['id'=>$posts->id])}}" method="POST" enctype="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    @foreach ($tags as $tag)
                    <label class="form-check-label"  >
                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" 
                        
                    @foreach ($posts->tags as $ta)
                    @if ($tag->id == $ta->id)
                        checked
                    @endif
                    @endforeach
                        >  {{$tag->tag}}  </label><br>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" value="{{$posts->title}}" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="3">
                        {{$posts->content}}
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
