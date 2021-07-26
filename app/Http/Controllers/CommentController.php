<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

    }
    public function create($id){

       $data = Post::find($id); 
       return view('comment-created',['data' => $data]);
    }
    public function store(Request $request){

     //return "block of code";
    
         $input['user'] = $request->user()->id;
        $input['title'] = $request->input('post');    
         $input['comment'] = $request->input('comments');
         //dd($input);
         $slug = $request->input('slug');
         Comment::create($input);
    
     return redirect($slug)->with('message', 'Comment published');
     
    }

}
