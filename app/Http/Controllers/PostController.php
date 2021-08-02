<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Requests\Store;
use Illuminate\Support\Str;
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
        $user = Auth::user();
        //$title = 'Latest posts';
        return view('index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       if($request->user()->can_post()){
           return view('Post.create');
       }
       else
       {
           return redirect('/')->withErrors('you have not permissions for writing post');
       }
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
        if ($request->has('publish')) {
            $post->active = 0;
            $message = 'Post published successfully';
          } 
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
       return view('home',['post' => $post]);
    
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
  
        //$post = Auth::user('id');
        $data = Post::find($id);
        return view('Post.edit',['data'=>$data]);
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
        
        $post->categories = $request->get('categories');
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->user_id = $request->user()->id;
        if($request->has('publish')) 
        { 
            $post->active = 0;
            $message = 'Post published successfully';
        } 
        $post->save();
        return redirect('/home')->with('Post updated successfully');       
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
        
        $post = Post::find($id);
        $post->delete();
        return redirect('/home');
    }
}
