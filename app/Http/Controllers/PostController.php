<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreate;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Requests\PostEdited;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       $category = Category::all();
       return view('Post.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreate $request)
    {
        $data = $request->validated();

        $post = new Post();
        $post->categories_id = $request->get('categories_id');
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->user_id = $request->user()->id;

        $post->save($data);
        return redirect('/home'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
       $post = Post::all();
       $user = User::all();

       return view('home',compact('post','user'));
    
    }
   
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::find($id);
        // $category = Category::all();
        return view('Post.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
          
        $data = $request->validate(
            [
                'categories_id' => 'required',
                'user_id' => 'required',
                'title' => 'required',
                'description' => 'required',
                ]
        );
     
        //    $post->categories_id = $request->get('categories_id');
        //    $post->user_id = $request->get('user_id');
        //    $post->title = $request->get('title');
        //    $post->description = $request->get('description');

           $post->save($data);
           dd($post);
           return redirect('/home');
              
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $post = Post::find($id);
        $post->delete();
        return redirect('/home');
    }
}
