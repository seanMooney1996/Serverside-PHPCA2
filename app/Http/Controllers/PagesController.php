<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('created_at', 'ASC')->paginate(1);

        return view('index',compact('posts'));
    }

}
