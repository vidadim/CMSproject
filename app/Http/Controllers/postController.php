<?php

namespace App\Http\Controllers;


use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;


class PostController extends Controller
{
    public function create() {
		return view("posts.test");
	}

	public function store(Request $request, Posts $post) {
		$post = new Posts;
		$post->storePost($request);
		return back();
	}

	public function index(Posts $post) {
		$data = Posts::take(20)->get();
		return view("posts.index", compact('data'));
	}

	public function edit(Posts $post) {
		return view("posts.edit", compact('post'));
	}

	public function update(Posts $post, Request $request) {
		$post->updatePost($request);
		return back();
	}
}
