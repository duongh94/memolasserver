<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function main(Request $request)
    {
        $id = $request->id;
        $this->validation($request);
        $params = $this->getParams($request);
        $this->postService->update($id, $params);
        return redirect()->route('posts.index')->with('success', 'Chỉnh sửa bài viết thành công');
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:5|max:1000',
            'content' => 'required',
            'title_seo' => 'required',
            'content_seo' => 'required',
            'avatar_post' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);
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
}
