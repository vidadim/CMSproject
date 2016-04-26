<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
	protected $fillable = array('title', 'fk_category_id', 'content', 'status');
	//public $timestamps = false;

	public function storePost($request) {
		$this->title = $request->title;
		$this->content = $request->content; //$request->content;
		$this->created_at = Carbon::now();
		$this->published_at = Carbon::now();
		$this->status = 1;
		$this->fk_author_id = 1;

		$this->save();
	}

	public function updatePost($request) {
		$this->title = $request->title;
		$this->content = $request->content; //$request->content;
		$this->created_at = Carbon::now();
		$this->published_at = Carbon::now();
		$this->status = 1;
		$this->fk_author_id = 1;

		$this->update();
	}
}
