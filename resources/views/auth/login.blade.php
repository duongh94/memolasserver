@extends('frontend.layouts.master')

@section('content')
    <div class="loginPanel container">
        <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 offset-md-3 offset-xl-3 offset-lg-3 boxLogin">
            <div class="register">
                <span>Không phải thành viên? <span class="underline">Đăng kí ngay!</span></span>
            </div>
            <div class="input">
                <div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <input type="email" placeholder="Email của bạn"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <input type="password" placeholder="Mật khẩu của bạn" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btnLogin border-0 btn">Đăng nhập</button>
                    </form>
                    <a href=""><h5>Quên mật khẩu ?</h5></a>
                </div>
            </div>
        </div>
        <!-- <h3>
            Continue with <a href="">Google</a> or <a href="">Facebook</a>
        </h3> -->

    </div>
@endsection
