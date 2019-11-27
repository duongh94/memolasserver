@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ secure_asset('css/admin/amsify.suggestags.css') }}">
@endsection

@section('content')
    <section class="breadcrumbs">
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <form id="post-form" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label">Tiêu đề bài viết</label>
                <div class="col-sm-9">
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Vui lòng nhập tiêu đề bài viết" required value="{{ $post->title }}">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-3 col-form-label">Nội dung bài viết</label>
                <div class="col-sm-9">
                    <textarea id="content" name="content" type="text" class="form-control" placeholder="Vui lòng nhập nội dung bài viết" required>{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label">Tiêu đề SEO</label>
                <div class="col-sm-9">
                    <input name="title_seo" type="text" class="form-control" id="title" placeholder="Vui lòng nhập tiêu đề SEO" required value="{{ $post->title_seo }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label">Nội dung SEO</label>
                <div class="col-sm-9">
                    <input name="content_seo" class="form-control" id="title" placeholder="Vui lòng nhập nôi dung SEO" required value="{{ $post->content_seo }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label">Ảnh đại diện bài viết</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="title" placeholder="Tên ảnh đại diện" readonly value="{{ $post->avatar_post }}">
                </div>
                <div class="col-sm-2">
                    <button id="btn-choose-file" type="button" class="btn btn-secondary w-100 rounded">Chọn ảnh</button>
                    <input name="avatar_post" accept="image/*" type="file" hidden onchange="readURL(this);">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 float-right">
                    <img id="image-preview" src="{{ secure_asset('storage/'. config('storage_path.avatar_post') . '/' . $post->avatar_post) }}" alt="" class="w-25 img-thumbnail">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-end">
                <div class="col-sm-2"><button id="btn-create" type="button" class="btn btn-success w-100 rounded">Chỉnh sửa bài viết</button></div>
                <div class="col-sm-2"><button type="button" class="btn btn-danger w-100 rounded"><a class="text-white" href="{{ route('posts.index') }}">Hủy</a></button></div>
            </div>
        </form>
    </section>
@endsection

@section('js')
    <script src="{{ secure_asset('js/admin/jquery.amsify.suggestags.js') }}"></script>
    <script src="{{ secure_asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
        });
    </script>
    @include('ckfinder::setup')
    <script src="{{ secure_asset('js/admin/posts.js') }}"></script>
@endsection
