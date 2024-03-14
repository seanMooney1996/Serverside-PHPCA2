<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function index(){
        $data['comments'] = Comment::orderby('created_at', 'ASC')->paginate(10);
        return view('comments.index',$data);
    }

    public function show($post_id)
    {
        return view('blog.show')
            ->with('comment', Comment::where('post_id', $post_id)->orderBy('created_at', 'DESC')->get());
    }

    public function create($postId, $userId ,$slug){
        $post = Post::where('id', $postId)->first();
        return view('comments.create', ['post'=> $post ,'postId' => $postId, 'userId' => $userId , 'slug' => $slug]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'postId' => 'required',
            'userId' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->post_id = $request->input('postId');
        $comment->user_id = $request->input('userId');
        $comment->save();

        $slug = $request->input('slug');
        // Redirect the user with a success message
        return redirect("/blog/{$slug}")->with('message', 'Your comment has been added!');
    }

}
