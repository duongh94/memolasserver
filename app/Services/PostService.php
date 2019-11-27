<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService
{
    /**
     * @var Post
     */
    private $post;

    /**
     * @var UploadService
     */
    private $uploadService;

    /**
     * PostService constructor.
     * @param Post $post
     * @param UploadService $uploadService
     */
    public function __construct(Post $post, UploadService $uploadService)
    {
        $this->post = $post;
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        return $this->post->select([
            'id',
            'title',
            'avatar_post'
        ])->orderBy('id', 'desc')->paginate(20);
    }

    /**
     * @param $params
     * @return bool
     */
    public function store($params)
    {
        $imageName = $this->uploadService->uploadImage(
            $params['avatar_post'],
            config('storage_path.avatar_post')
        );
        return $this->createPost($params, $imageName);
    }

    /**
     * @param $params
     * @param $imageName
     * @return bool
     */
    public function createPost($params, $imageName)
    {
        $this->post->user_id = Auth::id();
        $this->post->title = $params['title'];
        $this->post->content = $params['content'];
        $this->post->title_seo = $params['title_seo'];
        $this->post->content_seo = $params['content_seo'];
        $this->post->avatar_post = $imageName;
        return $this->post->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->post->findOrFail($id);
    }

    /**
     * @param $id
     * @param $params
     */
//    public function update($id, $params)
//    {
//        $params['image_name'] = $this->uploadService->uploadImage(
//            $params['avatar_post'],
//            config('storage_path.avatar_post')
//        );
//        $this->updatePost($id, $params);
//    }

    /**
     * @param $id
     * @param $params
     */
    public function update($id, $params)
    {
        $post = $this->post->findOrFail($id);
        if (isset($params['avatar_post'])) {
            $imageName = $this->uploadService->uploadImage(
                $params['avatar_post'],
                config('storage_path.avatar_post')
            );
            $post->avatar_post = $imageName;
        }
        $post->title = $params['title'];
        $post->content = $params['content'];
        $post->title_seo = $params['title_seo'];
        $post->content_seo = $params['content_seo'];
        $post->save();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->post->paginate(15);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $post = $this->post->findOrFail($id);
        return $post->delete();
    }
}
