<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function main()
    {
        $posts = $this->postService->index();
        return view('admin/posts/index', compact('posts'));
    }
}
