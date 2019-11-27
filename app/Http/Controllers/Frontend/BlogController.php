<?php

namespace App\Http\Controllers\Frontend;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * BlogController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->postService->getAll();
        return view('frontend.blog', compact('posts'));
    }
}
