<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * EditController constructor.
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
    public function main(Request $request)
    {
        $id = $request->id;
        $post = $this->postService->edit($id);
        return view('admin.posts.update', compact('post'));
    }
}
