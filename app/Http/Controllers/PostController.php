<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Store;
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
    public function store(Store $request)
    {
        $data = $request->validated();
        
        $post = new Post();
        $post->categories = $request->get('categories');
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->user_id = $request->user()->id;
        $post->save();
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
        $category = Category::all();
        return view('Post.edit',compact('data','category'));
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

             $input['title'] = $request->input('title');
             $input['description'] = $request->input('description');
             $input['categories'] = $request->input('categories');
             $input['user_id'] = $request->user()->id;

             $post->update($input);
            
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
