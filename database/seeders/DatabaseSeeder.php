<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         // $post->user_id = $request->user()->id;
        // $post->title=$request->title;
        // $post->Description=$request->description;
        // $post->save();
    
        // $input['description'] = $request->input('post');
    //      $input['user'] = $request->user()->id;    
    //      $input['comment'] = $request->input('comments');
    //  dd($input);
    //      Comment::create($input);
    //return redirect($input)->with('message', 'Comment published');

      // $data = $request->validate([
      //      'description' => 'required', 
      //      'comment'=> 'required',
      //   ]);
      //   dd($data);
      //   Comment::create($data);
      //   return redirect('/index')->withMessage('Comment published');
        
       // $comment=new Comment;
        
        // $comment->post = $request->post;
        // $comment->comments = $request->comments;
        // $comment->save();
         
      //$comment->user = $request->user()->id;        
    
    }
}
//  $data = $request->validated();
      //  $comment = Comment::create($data);
      //  $comment = Comment::all();
      //  return view('comment-created',['comment'=>$comment]);
      //    //return redirect('/show');
    //   <h4>{{$data->description}}</h4>
      //  <li>{{$data->created_at->format('M d,Y \a\t h:i a')}}</li>
      //  <h3>Add comment here</h3>
      // <input type="hidden" name="post" value="{{$data->id}}" required/>
      // <input type="hidden" name="user" value="{{$data->id}}" required/>