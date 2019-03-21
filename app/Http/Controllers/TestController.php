<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\TestContract;
// use App\Services\TestService;
use App\Http\Requests\UserRequest;
use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
class TestController extends Controller
{	
	protected $test;
    protected $postRepo;
    public function __construct(TestContract $test, PostInterface $postRepo)
    {
    	$this->test = $test;
        $this->postRepo = $postRepo ;
    }

    public function index()
    {
    	// $this->test->callMe('TestController');
    	// $result = $this->test->test('TestService');
    	// dd($result);
        // return response('表单验证通过');
        // $result = $this->postRepo->postAll();
        // dd($result);
        $post = Post::find(1);
        // $options = $post->options;
        // $options['key'] = 'value';
        $options = [
            'a'=>'b',
            'c'=>'d'
        ];
        $post->options = $options;
        $post->save();
    }
}
