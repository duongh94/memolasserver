@extends('frontend.layouts.master')

{{--@section('css')--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/total.css')}}">--}}
{{--@endsection--}}

@section('content')
    <section style="margin-top: 30px;" class="container price">
        <div class="header">
            <h3>Tính toán chi phí thực hiện Niên yếu</h3>
            <ul class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                <li>Giá thành được tính trên 1 quyển</li>
                <li>Giá đã bao gồm phí vận chuyển </li>
                <li>Đây chỉ là giá ước lượng theo cách tính của MemoLas. Bạn luôn có thể thay đổi số trang, chất
                    liệu,v..v.. trong quá trình thực hiện</li>
            </ul>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div>
                        <input class="range1" type="range" value="0">
                        <div class="text">
                            <span>Số học sinh</span>
                            <span class="number1">0</span>
                        </div>
                    </div>
                    <div>
                        <input class="range2" type="range" value="0">
                        <div class="text">
                            <span>Số quyển dự kiến</span>
                            <div>
                                <span class="">( Thêm 1 quyển tặng giáo viên nhé )</span>
                                <span class="number2">0</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class = "totalpage-people">
                            <input id="numberPages" class="range3" type="range" value="10">
                            <div class="text">
                                <span>Số trang</span>
                                <span class="number3">0</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-checkbox  page-defaut">
                                <div>
                                    <input type="checkbox" class="custom-control-input check-page"
                                           id="customControlAutosizing" checked='checked'>
                                    <label class="custom-control-label" for="customControlAutosizing">Sử dụng số trang mặc định
                                    </label>
                                </div>
                                <span id = "numberpage-defaut">0</span>
                            </div>
                        </div>
                    </div>
                    <div id="demoTabs">
                        <ul class="nav nav-tabs option">
                            <li class="nav-item wow fadeInUp">
                                <a class="nav-link active b1" data-toggle="tab" href="#home"> Gói cơ bản</a>
                            </li>
                            <li class="nav-item wow fadeInUp">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Gói Tiêu Chuẩn</a>
                            </li>
                            <li class="nav-item wow fadeInUp">
                                <a class="nav-link b3" data-toggle="tab" href="#menu2">Year Book</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container row active" id="home">
                            <ul class="list">
                                <li>Thiết kế theo chủ đề mẫu</li>
                                <li>In ấn trọn gói</li>
                                <li>Biên tập nội dung</li>
                            </ul>


                        </div>
                        <div class="tab-pane container fade row" id="menu1">
                            <ul class="list">
                                <li>3 Buổi chụp tại trường</li>
                                <li>5 mẫu thiết kế theo chủ đề mẫu</li>
                                <li>In ấn trọn gói</li>
                                <li>Tặng kèm <span class = "poster">0</span> Poster</li>
                                <li>Đặc quyền sử dụng phần mềm biên tập <img src="{{secure_asset('images/logosmall.png')}}"
                                                                             alt="" /></li>
                            </ul>
                        </div>
                        <div class="tab-pane container fade row" id="menu2">
                            <ul class="list">
                                <li>5 Buổi chụp tại trường</li>
                                <li>Thiết kế mẫu riêng theo chủ đề tùy chọn</li>
                                <li>In ấn trọn gói</li>
                                <li>Biên tập nội dung </li>
                                <li>Đặc quyền sử dụng phần mềm biên tập <img src="{{secure_asset('images/logosmall.png')}}"
                                                                             alt="" /></li>
                                <li>Tặng kèm <span class = "poster">0</span> poster</li>
                                <li>Tổ chức 2 sự kiện tại trường</li>
                            </ul>
                        </div>
                    </div>
                    <h3>Thông tin chi tiết báo giá</h3>
                    <p>Điền các thông tin bên dưới giúp mình ha</p>
                    <div class="check-group">
                        <div class="radiobtn">
                            <input class="radio" type="radio" id="huey" name="drone" value="huey"
                                   checked='checked' />
                            <label id='checked' for="huey">Bìa Cứng</label>
                        </div>

                        <div style="margin-left: 30px;" class="radiobtn">
                            <input class="radio" type="radio" id="dewey" name="drone" value="dewey" />
                            <label id='checked1' for="dewey">Bìa Mềm</label>
                        </div>
                    </div>

                    <!-- <div class="check-group">
                        <div class="radiobtn">
                            <input class="radio" type="radio" id="one" name="drone1" value="huey" checked />
                            <label id="studioA" for="one">Studio B</label>
                        </div>

                        <div style="margin-left: 30px;" class="radiobtn">
                            <input class="radio" type="radio" id="two" name="drone1" value="dewey" />
                            <label id="studioB" for="two">Studio B</label>
                        </div>
                        <div style="margin-left: 30px;" class="radiobtn">
                            <input class="radio" type="radio" id="three" name="drone1" value="dewey" />
                            <label id="studioC" for="three">Studio B</label>
                        </div>
                    </div> -->



                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 offset-lg-2 offset-xl-2 total">
                    <h3>Báo giá chi tiết</h3>
                    <div class="info">
                        <span>Loại bìa</span>
                        <span class="bia">Bìa cứng</span>
                    </div>
                    <!-- <div class="info">
                        <span>Studio</span>
                        <span class="studio">B</span>
                    </div> -->
                    <!-- <div class="info">
                        <span>Giá thành</span>
                        <span class="price-book">300.000VND/Quyển</span>
                    </div> -->
                    <hr>
                    <div class="info">
                        <span>Chiết khấu</span>
                        <span class="discount">5%</span>
                    </div>
                    <hr>
                    <div class="info">
                        <span>Giá thành</span>
                        <span class="price-book">300.000VND/Quyển</span>
                    </div>
                    <!-- <div class="info">
                        <span>Tổng chi phí</span>
                        <span id="total">300.000</span>
                    </div> -->
                    <input class="box" type="text" id="name" placeholder="Họ và tên">
                    <input class="box" type="email" id="email" placeholder="Email của bạn">
                    <input class="box" type="number" id="sdt" placeholder="Số điện thoại của bạn" >
                    <input class="box" type="text" id="school" placeholder="Trường">
                    <input class="box" type="text" id="class" placeholder="lớp">
                    <input type="submit" id="pass-json" value="Gửi yêu cầu">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script src="{{ secure_asset('js/frontend/wow.js')}}"></script>
<script src="{{ secure_asset('js/frontend/slick.js')}}"></script>
<script src="{{ secure_asset('js/frontend/slick.min.js')}}"></script>
<script src="{{ secure_asset('js/frontend/event.js')}}"></script>
<script src="{{ secure_asset('js/frontend/send-email.js')}}"></script>
<script src="{{ secure_asset('js/frontend/range.js')}}"></script>
@endsection
