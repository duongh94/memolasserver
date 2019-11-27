<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * DestroyController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function main(Request $request)
    {
        $id = $request->id;
        $this->postService->destroy($id);
        return redirect()->route('posts.index')->with('success', 'Xóa thành công bài viết');
    }
}
