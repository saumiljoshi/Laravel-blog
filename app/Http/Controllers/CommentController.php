<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\Post_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(){
    $comment = Comment::all();
     return view('comment-index',['comments'=>$comment]);
    }
    public function create($id){

       $data = Post::find($id); 
       return view('comment-created',['data' => $data]);
    }
    public function store(Request $request){
      
       $request->validate([
        'post' => 'required', 
        'comments' => 'required',
      ]); 
      
        $comment=new Comment;
        $comment->user = $request->user()->id; 
        $comment->post = $request->post;
        $comment->comments = $request->comments;
        $comment->save();
        if($comment){
          return redirect('/show');
        }
             
    }
   
}
