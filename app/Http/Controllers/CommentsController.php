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
        $data['comments'] = Comment::orderby('id')->paginate(10);
        return view('comments.index',$data);
    }

    public function show($post_id)
    {
        return view('blog.show')
            ->with('comment', Comment::where('post_id', $post_id)->get());
    }

    public function create($postId, $userId ,$slug){
        return view('comments.create', ['postId' => $postId, 'userId' => $userId , 'slug' => $slug]);
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

//    public function store(Request $request)
//    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
//        ]);
//
//        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
//        $request->image->move(public_path('images'), $newImageName);

//        Post::create([
//            'title' => $request->input('title'),
//            'description' => $request->input('description'),
//            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
//            'image_path' => $newImageName,
//            'user_id' => auth()->user()->id
//        ]);
//
//
//    }
}
