<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class ActionController extends Controller
{
 
    //
    public function index(){
       $comment = Comment::all();
       return view('comments',['comment'=>$comment]);

    //    $comment = Comment::all();
    //     return view('comments', compact('comment'));
    }
}
