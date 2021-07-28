<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
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
    public function Validator(array $data){
        return Validator::make($data,[
           'title' => ['required|unique:comments'],
           'comment' => ['required'],
        ]);
    }
    public function store(Request $request,Comment $comment){
    
        $comment=new Comment;
        $comment->user = $request->user()->id; 
        $comment->post = $request->post;
        $comment->comments = $request->comments;
        $comment->save();
        return redirect('/show');     
    }
   
}
