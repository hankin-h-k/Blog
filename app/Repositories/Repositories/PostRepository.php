<?php
namespace App\Repositories\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
use App\User;

class PostRepository Implements PostInterface{
  
	public function postAll(){
		$query = Post::all();
		return $query;
	}
  
}