<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class BlogController extends Controller
{
	public function index()
	{
		$posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('published_at', 'desc')->paginate(config('blog.post_per_page'));
		return view('blog.index', compact('posts'));
	}

	public function showPost($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		return view('blog.post', compact('post'));
	}
}
