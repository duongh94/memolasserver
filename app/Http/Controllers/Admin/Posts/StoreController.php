<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * StoreController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.posts.store');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        $params = $this->getParams($request);
        $this->postService->store($params);
        return redirect()->route('posts.index')->with('success', 'Thêm thành công bài viết mới!!!');
    }

    public function getParams(Request $request)
    {
        return $request->only([
            'title',
            'content',
            'title_seo',
            'content_seo',
            'avatar_post'
        ]);
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:5|max:1000',
            'content' => 'required',
            'title_seo' => 'required',
            'content_seo' => 'required',
            'avatar_post' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);
    }
}
