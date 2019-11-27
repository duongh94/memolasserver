@extends('admin.layouts.master')

@section('content')
    <section class="breadcrumbs">
        @if(count($posts) < 0)
            <div class="alert alert-primary" role="alert">
                Hiện không có bài viết nào để hiện thị.
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-center mb-5">Danh sách bài viết</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col" width="5%">ID</th>
                        <th scope="col" width="55%">Tiêu đề bài viết</th>
                        <th scope="col" width="20%">Ảnh đại diện</th>
                        <th scope="col" width="20%">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row" class="text-center">{{ $post->id }}</th>
                            <td class="text-center">{{ $post->title }}</td>
                            <td>
                                <img width="200px" class="img-thumbnail d-block m-auto" src="{{ secure_asset('storage/' . config('storage_path.avatar_post') . '/' . $post->avatar_post) }}" alt="">
                            </td>
                            <td class="d-flex justify-content-around">
                                <a class="btn btn-info rounded" href="{{ route('posts.edit', $post->id) }}">Chỉnh sửa</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $posts->links() }}
    </section>
@endsection
