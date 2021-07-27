<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(){

    }
    public function create($id){

       $data = Post::find($id); 
       return view('comment-created',['data' => $data]);
    }
    public function Validator(array $data){
        //return Validator::make($data,[
          // 'title' => [],
           //'comment' => ['required'],
        //]);
    }
    public function store(Request $request){
    
        $comment=new Comment;
        $comment->user = $request->user()->id; 
        $comment->post = $request->post;
        $comment->comments = $request->comments;
        $comment->save();
        return redirect('/index')->withMessage('Comment published');
    //  $input['description'] = $request->input('post');
    //      $input['user'] = $request->user()->id;    
    //      $input['comment'] = $request->input('comments');
    //  dd($input);
    //      Comment::create($input);
    //return redirect($input)->with('message', 'Comment published');

      // $data = $request->validate([
        //    'description' => 'required', 
          //  'comment'=> 'required',
        //]);
        //$comment = Comment::create([$data]);
        //dd($comment);
        
         
    }

}
