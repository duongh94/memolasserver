<?php

namespace App\Http\Controllers\Frontend;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * PostController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $post = $this->postService->edit($id);
        return view('frontend.post', compact('post'));
    }
}
