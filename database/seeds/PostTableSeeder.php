<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate(); //清除数据表
        factory(Post::class, 20)->create(); //一次性填充20篇文章
    }
}
