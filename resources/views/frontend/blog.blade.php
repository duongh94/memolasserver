@extends('frontend.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/frontend/post-blog.css')}}">
@endsection

@section('content')
    <section>
        @if(count($posts) == 0)
            <div class="container">
                <div class="alert alert-primary" role="alert">
                    Hiện chưa có bài viết nào để hiển thị. Chúng tôi sẽ sớm cập nhất. Bạn vui lòng quay lại sau!!!
                </div>
            </div>
        @endif
        @foreach($posts as $post)
        <div class="post-blog container">
            <div class="header-image">
                <img src="{{ secure_asset('storage/' . config('storage_path.avatar_post') . '/' . $post->avatar_post) }}" alt="">
                <div class="social">
                    <div>
                        <div id="fb-share-button" class="btn-social">
                            <img src="{{ secure_asset('images/fbpost.png') }}" alt="">
                        </div>
                        <div id="fb-share-button" class="btn-social">
                            <img src="{{ secure_asset('images/intasgram.png') }}" alt="">
                        </div>
                        <div id="fb-share-button" class="btn-social">
                            <img src="{{ secure_asset('images/linkin1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1">
                    <a href="{{ route('post', $post->id) }}" id="link"><h2>{{ $post->title }}</h2></a>
                    <span>{{ $post->created_at }}</span>
                    <div id = "noi-dung-blog">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{ $posts->links() }}
    </section>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/frontend/slick.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/frontend/slick.min.js')}}"></script>
    <script src="{{asset('js/frontend/wow.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/frontend/event.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/frontend/social.js')}}"></script>
    <script>
        var myDiv = $('#noi-dung-blog');
        myDiv.text(myDiv.text().substring(0,600));
    </script>

@endsection
