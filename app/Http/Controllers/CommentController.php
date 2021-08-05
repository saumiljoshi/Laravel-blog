<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\Post_request;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $comment = Comment::paginate(5);
        return view('/comment-index',['comment' => $comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($posts)
    {
       
        $data = Post::all();           
        $comment = Comment::all();
        return view('comments',compact('data', 'comment')); 
   
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post_request $request)
    {
       $data = $request->validated();
     
       $input['post'] = $request->input('post');
       $input['user'] = $request->user()->id;
       $input['comments'] = $request->input('comments');
       Comment::create($input);
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        
        $comment->delete();
        return redirect('/comment-index');
    }
}
