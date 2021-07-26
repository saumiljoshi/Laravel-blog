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

        //$posts = Post::where('active','1')->orderby('description');
        $user = Auth::user();
        //$title = 'Latest posts';
        return view('home',['user' => $user]);
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
    public function store(Request $request)
    {
        
        $post = new Post();
        $post->title = $request->get('title');
        $post->description = $request->get('description');

        $duplicate = Post::where('slug', $post->slug)->first();
        if($duplicate){
            return redirect('new-post')->withErrors('title already exists.')->withInput();
        }
        $post->user_id = $request->user()->id;
        if ($request->has('publish')) {
            $post->active = 0;
            $message = 'Post published successfully';
          } 
        $post->save();
        return redirect('/index' . $post->slug)->withMessage($message); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post(){

       $post = Post::all();
       return view('Post/index',['post'=>$post]);
    
    }
   
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
  
        //$post = Auth::user('id');
        $data = Post::find($id);
        //dd($data);
        return view('Post/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Store $request,Post $post)
    {
        //     
    $data = $request->validated();
    $post = $post->update($data);
   //$data->title = $request->input('title');
    //$data->description = $request->input('description');
    //$data->update();
      //return redirect('/index')->withMessage('successfully published');
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
        return redirect('/index');
    }
}
