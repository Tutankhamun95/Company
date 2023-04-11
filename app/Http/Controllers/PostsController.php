<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Category;
use App\Post;
use App\User;
use App\Tag;
use App\Company;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    public function userPosts()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('posts.userPosts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if ($categories->count() ==0   ) {
             
            return redirect()->route('category.create') ;
            
        }


        $tags = Tag::all();
        if ($tags->count() ==0 ) {
             
            return redirect()->route('tag.create') ;
            
        }


        return view('posts.create')->with('categories',$categories)
        ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "category_id" => "required",
            // "company_id" => "required",
            // "tags" => "required"
        ]);

        

        // $company = Company::findOrFail($request->input('company_id'));
        $post = Post::create([
            "title" => $request->title,
            "content" => $request->content,
            "category_id" => $request->category_id,
            "company_id"=>$request->company_id,
            "user_id" => auth()->id()
        ]);

        $post->tags()->attach($request->tags);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('posts',$post)->with('tags', Tag::all())->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);


        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "category_id" => "required",
            "tags" => "required"
        ]);

        $post->title =  $request->title;
        $post->content =  $request->content;
        $post->category_id = $request->category_id;
        $post->tags()->sync($request->tags);
        $post->save();

        

        return redirect()->route('posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
