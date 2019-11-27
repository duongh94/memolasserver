@extends('frontend.layouts.master')

@section('content')
<section class="banner">
    <div class="bannerSlider container">
        <div class="slider row">
            <div class="item col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <div>
                    <p>Những bức ảnh không dàn dựng.<br /> Những câu chuyện chưa từng được kể. <br />Cùng lưu giữ lại lịch sử lớp
                        mình theo cách độc đáo và đáng nhớ nhất.</p>
                    <a href="">Đăng kí</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 img">
                <img src="{{ secure_asset('images/people.png') }}" alt="">
            </div>
        </div>
        <div class="slider row">
            <div class="item col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div>
                    <p>Những bức ảnh không dàn dựng. Những câu chuyện chưa từng được kể. Cùng lưu giữ lại lịch sử lớp
                        mình theo cách độc đáo và đáng nhớ nhất.</p>
                    <a href="">Đăng kí</a>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 img">
                <img src="{{ secure_asset('images/people.png') }}" alt="">
            </div>
        </div>
        <div class="slider row">
            <div class="item col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div>
                    <p>Những bức ảnh không dàn dựng. Những câu chuyện chưa từng được kể. Cùng lưu giữ lại lịch sử lớp
                        mình theo cách độc đáo và đáng nhớ nhất.</p>
                    <a href="">Đăng kí</a>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 img">
                <img src="{{ secure_asset('images/people.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="social">
        <a href="https://www.facebook.com/memolas.yearbook/" target="_blank"><img src="{{secure_asset('images/fbo.png')}}" alt=""></a>
        <a href="https://www.instagram.com/memolas_yearbook" target="_blank"><img src="{{secure_asset('images/intaso.png')}}" alt=""></a>
    </div>
</section>

<section class="container fit">
    <div class="header wow fadeInUp">
        <h1>
            Niên yếu phù hợp với ai?
        </h1>
        <p>Nếu bạn là thành viên của 1 tập thể thì Niên yếu dành cho bạn và tập thể đó</p>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 box wow fadeInLeft" data-wow-delay="0s">
                <span>Nhà Trường</span>
                <img src="{{ secure_asset('images/schools.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 box wow fadeInLeft " data-wow-delay="0.2s">
                <span>Phụ Huynh</span>
                <img src="{{ secure_asset('images/ph.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 box wow fadeInLeft" data-wow-delay="0.4s">
                <span>Học Sinh</span>
                <img src="{{ secure_asset('images/student.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="container characteristics">
    <div class="header wow fadeInUp">
        <h1>
            Giá trị đặc biệt của Niên yếu
        </h1>
        <p>1 kỷ vật mà bạn có thể dùng để khoe với người khác về cái lớp độc nhất vô nhị của mình</p>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-5 col-md-5 col-xl-5 col-lg-5 text wow fadeInLeft">
                <div class="">
                    <p>
                        Bên cạnh những bức ảnh với concept độc đáo, Niên yếu tập trung vào mô tả những kỷ niệm chân thực
                        đã xảy ra xuyên suốt năm học vừa rồi. Mỗi lần ở trường có sự kiện gì, trong lớp có drama nào,
                        v..v.. Có chuyện vui, chuyện buồn, nhưng tất cả đều đáng để nhớ lại.
                    </p>
                    <a href="{{route('about')}}" >Tìm Hiểu Thêm</a>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-7 col-xl-7 col-lg-7 image wow fadeInRight">
                <img src="{{ secure_asset('images/book.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="container step">
    <div class="header" wow fadeInUp>
        <h1>
            Các Bước Thực Hiện Niên Yếu
        </h1>
    </div>
    <div class="content">
        <div class="row box">
            <div class="item wow zoomInLeft" data-wow-delay="0s">
                <div class="title">
                    <img src="{{ secure_asset('images/table1.png') }}" alt="">
                    <div>
                        <h5>Bước 2</h5>
                        <img src="{{ secure_asset('images/icontable1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paragraph">
                    <p>Cùng lớp mình trải qua và tận hưởng năm học đầy thú vị này</p>
                </div>
            </div>
            <div class="item wow zoomInLeft" data-wow-delay="0.4s">
                <div class="title">
                    <img src="{{ secure_asset('images/table2.png') }}" alt="">
                    <div>
                        <h5>Bước 3</h5>
                        <img src="{{ secure_asset('images/icontable2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paragraph">
                    <p>Cùng nhau chia sẻ những suy nghĩ, những cảm xúc buồn đang xảy ra. </p>
                </div>
            </div>
            <div class="item wow zoomInLeft" data-wow-delay="0.8s">
                <div class="title">
                    <img src="{{ secure_asset('images/table3.png') }}" alt="">
                    <div>
                        <h5>Bước 4</h5>
                        <img src="{{ secure_asset('images/icontable3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paragraph">
                    <p>Cùng nhau cười thật nhiều</p>
                </div>
            </div>
            <div class="item wow zoomInLeft" data-wow-delay="1.2s">
                <div class="title">
                    <img src="{{ secure_asset('images/table4.png') }}" alt="">
                    <div>
                        <h5>Bước 5</h5>
                        <img src="{{ secure_asset('images/icontable4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paragraph">
                    <p>Cùng nhau lưu giữ lại</p>
                </div>
            </div>
            <div class="item wow flipInX" data-wow-delay="1.6s">
                <div class="title">
                    <img src="{{ secure_asset('images/table5.png') }}" alt="">
                    <div>
                        <h5>Bước 1</h5>
                        <img src="{{ secure_asset('images/icontable5.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paragraph">
                    <p>Liên hệ với Memolas để lên ý tưởng cho lớp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="container">
        <h1 style="text-align: center;" class="header wow fadeInUp">Cảm nhận của các bạn học sinh</h1>
        <div class="feed">
            <div class="user col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <div class="b col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1">
                    <div class="avata">
                        <img src="{{ secure_asset('images/avata.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Nguyễn Minh Anh
                        </h3>
                        <span>
                            Chuyên Sử THPT Hà Nội - Amsterdam
                        </span>
                        <p class="col-12 col-sm-12 col-md-10 col-xl-10 col-lg-10 offset-md-1 offset-xl-1 offset-lg-1">
                            Niên yếu với mình như 1 kỷ vật lưu trữ những mảnh ghép của ký ức. Dù chỉ là những bức ảnh
                            chụp hàng ngày thôi, vậy mà khi xa nhau rồi, sao lại thấy trân trọng và đáng quý đến vậy.
                            Mỗi lần mở Niên yếu ra xem là tất cả những cảm xúc, kỷ niệm lại ùa về. Cảm ơn MemoLas đã
                            giúp mình lưu giữ lại tuổi học trò đẹp đẽ này.
                        </p>
                    </div>
                    <div class="social-person">
                        <a href="https://www.facebook.com/minhanhh0801"><img src="{{ secure_asset('images/fbo.png') }}" alt=""></a>
                        <a href="https://www.instagram.com/minhanhhhhhhhh/?igshid=lqb5kqjnevde&fbclid=IwAR1fzlunoWYrGaiTnK-Wd9iq7MwC66DEa2eDcSibUCAVHA9qXJ69KBP2tQY"><img src="{{ secure_asset('images/intaso.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="user col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <div class="b col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1">
                    <div class="avata">
                        <img src="{{ secure_asset('images/avata1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Nguyễn Hồng Ban Mai
                        </h3>
                        <span>
                            THPT Nguyễn Siêu
                        </span>
                        <p class="col-12 col-sm-12 col-md-10 col-xl-10 col-lg-10 offset-md-1 offset-xl-1 offset-lg-1">
                            Lúc đầu lớp mình cũng chia rẽ nội bộ vụ làm kỷ yếu. Mọi người không duyệt vụ làm kỷ yếu giấy lắm vì nghĩ bây giờ có thể trữ ảnh trên dữ liệu đám mầy. Chả ai hình dung ra Niên yếu là gì nên mọi người khá hoang mang. Rồi khi làm xong thì mọi người lại thấy rất hay, lưu trữ kỷ niệm đọc lại nhiều khi rất nhớ. Bây giờ thì tất cả kỷ niệm nằm trong tay mình rồi. Cám ơn cả lớp vì đã có 1 quyết định sáng suốt. Hy vọng sản phẩm thú vị này sẽ đến được với tất cả các bạn học sinh.
                        </p>
                    </div>
                    <div class="social-person">
                        <a href="https://www.facebook.com/meidaunicorn"><img src="{{ secure_asset('images/fbo.png') }}" alt=""></a>
                        <a href="https://www.instagram.com/banmaidesu/?igshid=njk70y7hnzbs&fbclid=IwAR0Lp5_3WXx7h8OnzLijs5WZYGl9kuPNaFFpItuMWgkdBP6tzkB7enELURM"><img src="{{ secure_asset('images/intaso.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="user col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <div class="b col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1">
                    <div class="avata">
                        <img src="{{ secure_asset('images/thao.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Nguyễn Phương Thảo
                        </h3>
                        <span>
                            THPT Nguyễn Siêu
                        </span>
                        <p class="col-12 col-sm-12 col-md-10 col-xl-10 col-lg-10 offset-md-1 offset-xl-1 offset-lg-1">
                            Lớp tớ có 1 đứa suốt ngày trêu chọc các bạn nữ nên bọn con gái chúng tớ chả thích nó tí nào. Mà đọc xong tâm sự kỉ yếu của nó mới biết nó cũng hơi nhiều tổn thương, với cả nó cũng chả có ý gì. Mọi hành động đều có lí do đằng sau mà. Thôi thì bớt ghét nó thêm tí vậy ^^ Nó mà không viết vào kỷ yếu này chắc tớ ghét nó suốt đời mất...
                        </p>
                    </div>
                    <!-- <div class="social-person">
                        <a href="https://www.facebook.com/meidaunicorn"><img src="{{ secure_asset('images/fbo.png') }}" alt=""></a>
                        <a href="https://www.instagram.com/banmaidesu/?igshid=njk70y7hnzbs&fbclid=IwAR0Lp5_3WXx7h8OnzLijs5WZYGl9kuPNaFFpItuMWgkdBP6tzkB7enELURM"><img src="{{ secure_asset('images/intaso.png') }}" alt=""></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="memolas container">
    <h1 class="header wow fadeInUp">Sứ mệnh của MemoLas</h1>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-lg-6 image wow fadeInLeft">
            <img width="100%" src="{{ secure_asset('images/book1.png') }}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-lg-6 content wow fadeInRight">
            <h3>MemoLas - For the everlasting memory. </h3>
            <p>Memolas là đội ngũ những bạn trẻ năng động mong muốn lưu giữ lại những kỷ niệm tuổi học trò một cách chân thực nhất cho các bạn học sinh Việt Nam. MemoLas đã dành 2 năm nghiên cứu các vấn đề liên quan đến thực hiện kỷ yếu, các thực trạng còn tồn đọng và từ đó phát triển quy trình, bộ công cụ để tạo ra một sản phẩm đột phá cho thế hệ mới với tên gọi Niên yếu. MemoLas tự hào đã được hợp tác làm niên yếu cùng các lớp đến từ các trường THPT trên địa bàn Hà Nội như Amsterdam, Chuyên sư phạm, Chuyên Ngoại ngữ,v.v... Chứng kiến sự năng động và hội nhập của các bạn học sinh Việt Nam, MemoLas tin rằng Niên yếu là 1 sản phẩm phù hợp và cần thiết cho thế hệ này. Với tầm nhìn một ngày nào đó, mỗi bạn học sinh đều có một cuốn Niên yếu sau mỗi năm học để lưu giữ lại câu chuyện học trò của mình, Memolas luôn nỗ lực trở thành người lắng nghe, tư vấn tin cậy, giúp đỡ các bạn trong quá trình thực hiện Niên yếu.
                
            </p>
            <a id="modal-team" href="#" data-izimodal-open="#team" data-izimodal-transitionin="fadeInDown">Tìm hiểu thêm</a>
        </div>
        <div class = "team" id="team">
            <div>
                <div class="box listteam" id="team-company">
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Co Founder - CEO</span>
                                <h3>Trương Việt Tiến</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/trgvttn" target="_blank"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    
                                    <a href="https://www.linkedin.com/in_tien-v-truong-86585b172" target="_blank"><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem2.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>CoFounder - CTO</span>
                                <h3>Nam Lê</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/profile.php?id=100014592151911"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>

                                    <a href=""><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem6.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Quản lý sự kiện</span>
                                <h3>Mai Tùng</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/tung.mai.3914?ref=br_rs"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    
                                    <a href=""><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem8.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Designer</span>
                                <h3>Trần Cao Anh Trang</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/trancaoanhtrang"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/be.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                        
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem7.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Designer</span>
                                <h3>Đặng Thái Tuấn</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/thaituan.dang.3"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    
                                    <a href=""><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/intas.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>        
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem5.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Digital Marketer</span>
                                <h3>Lê Thảo Vân</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/le.thaovan"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/be.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/in.png')}}" alt=""></a>
                                    <a href=""><img src="{{secure_asset('images/intas.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem3.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>UI/UX Design</span>
                                <h3>Hoàng Vũ</h3>
                                <hr>
                                <div>
                                    <a href="https://www.facebook.com/DevNeo1802"><img src="{{secure_asset('images/fb1.png')}}" alt=""></a>
                                    <a href="https://www.behance.net/devvuhoangfd8a"><img src="{{secure_asset('images/be.png')}}" alt=""></a>
                                    <a href="https://www.instagram.com/phoenix__fire_1802/"><img src="{{secure_asset('images/intas.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="item col-12 col-sm-12 col-md-3 col-lg-3 col-lg-3">
                        <div class="boxchild">
                            <div class="header">
                                <img src="{{secure_asset('images/avataitem9.png')}}" alt="">
                            </div>
                            <div class="content-item">
                                <span>Đơn vị hợp tác</span>
                                <h3>Công ty CN&TT Tcom</h3>
                                <hr>
                                <div>
                                    <a href="https://www.tcom.vn/"><img src="{{secure_asset('images/earth.png')}}" alt=""></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="options container">
    <div class="header wow fadeInUp">
        <h1>
            Các gói thực hiện Niên yếu
        </h1>
        <p>Chọn số quyển để memolas tính toán chi phí cho bạn</p>
        
    </div>
    <div class="row content">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 price">
                <div class="header">
                    <img src="{{ secure_asset('images/iconPrice.png') }}" alt="">
                    <h4>Cơ bản</h4>
                </div>
                <ul class="list">
                    <li>Thiết kế theo chủ đề mẫu</li>
                    <li>In ấn trọn gói</li>
                    <li>Biên tập nội dung</li>
                </ul>
                <div class="CTA">
                    <h5>Chi phí: <span id="price-1">0 VND</span>/Quyển</h5>
                    <a class="col-12 col-sm-12" href="{{route('total')}}">Tính toán chi phí</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 active wow zoomIn" data-wow-delay="0.2s">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 price">
                <div class="header">
                    <img src="{{ secure_asset('images/iconPrice1.png') }}" alt="">
                    <h4>Tiêu Chuẩn</h4>
                </div>
                <ul class="list">
                    <li>3 Buổi chụp tại trường</li>
                    <li>5 mẫu thiết kế theo chủ đề</li>
                    <li>In ấn trọn gói</li>
                    <li>Tặng kèm <span class="value">00</span> Poster</li>
                    <li>Đặc quyền sử dụng phần mềm biên tập <img src="{{ secure_asset('images/logosmall.png') }}"
                            alt="" /></li>
                </ul>
                <div class="CTA">
                    <h5>Chi phí: <span id = "price-2">0 VND</span>/Quyển</h5>
                    <a class="col-12 col-sm-12" href="{{route('total')}}">Tính toán chi phí</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 price">
                <div class="header">
                    <img src="{{ secure_asset('images/iconPrice2.png') }}" alt="">
                    <h4>Yearbook Club</h4>
                </div>
                <ul class="list">
                    <li>5 Buổi chụp tại trường</li>
                    <li>Thiết kế mẫu riêng theo chủ đề tùy chọn</li>
                    <li>In ấn trọn gói</li>
                    <li>Biên tập nội dung </li>
                    <li>Đặc quyền sử dụng phần mềm biên tập <img src="{{ secure_asset('images/logosmall.png') }}"
                            alt="" /></li>
                    <li>Tặng kèm <span class="value">00</span> poster</li>
                    <li>Tổ chức 2 sự kiện tại trường</li>
                </ul>
                <div class="CTA">
                    <h5>Chi phí: <span id = "price-3">0 VND</span>/Quyển</h5>
                    <a class="col-12 col-sm-12" href="{{route('total')}}">Tính toán chi phí</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header wow fadeInUp" style=" margin-top: 30px;">
        <div class="range col-12 col-sm-12">

            <input class="quyen" type="range" min="0" max="300" step="1" value="0">
            <div class="info">
                <div class="t1">Chọn số quyển dự kiến</div>
                <div class="text">
                    <span class="value">0</span>
                    <span class="material-icons">menu_book</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="we">
    <h1 class="wow fadeInUp">Đăng ký đồng hành cùng chúng tôi</h1>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-lg-6 content">
                <h3>Bạn là</h3>
                <ul class="nav nav-tabs">
                    <li class="nav-item wow fadeInUp">
                        <a id="hs" class="nav-link active" data-toggle="tab" href="#home">Học Sinh</a>
                    </li>
                    <li class="nav-item wow fadeInUp">
                        <a id="ph" class="nav-link" data-toggle="tab" href="#menu1">Phụ Huynh</a>
                    </li>
                    <li class="nav-item wow fadeInUp">
                        <a id="gv" class="nav-link" data-toggle="tab" href="#menu2">Giáo viên</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container row active" id="home">
                        <form id="send-email1" action="" method="">
                            <input id="name-hs" class="wow fadeInLeft" type="text" placeholder="Họ và tên bạn" data-wow-delay="0s">
                            <div class="ngang">
                                <input id="classroom-hs" class="wow fadeInLeft" type="text" placeholder="Lớp" data-wow-delay="0.2s">
                                <input id="CLB-hs" class="wow fadeInLeft" type="text" placeholder="CLB" data-wow-delay="0.4s">
                            </div>
                            <input id="school-hs" class="wow fadeInLeft" type="text" placeholder="Trường" data-wow-delay="0.6s">
                            <input id="email-hs" class="wow fadeInLeft" type="text" placeholder="Email" data-wow-delay="0.8s">
                            <input id="sdt-hs" class="wow fadeInLeft" type="text" placeholder="Số điện thoại" data-wow-delay="1s">
                            <input id="number-hs" class="wow fadeInLeft" type="number" placeholder="Số Quyển" data-wow-delay="1.2s">
                            <input id="submit" class="wow flipInX submit" type="submit" value="Gửi" >
                        </form>
                    </div>
                    <div class="tab-pane container fade row" id="menu1">
                        <input id="name-ph" type="text" placeholder="Họ tên bạn">
                        <input id="name-child-ph" type="text" placeholder="Họ tên con">
                        <div class="ngang">
                            <input id="class-ph" type="text" placeholder="Lớp">
                            <input id="school-ph" type="text" placeholder="Trường">
                        </div>

                        <input id="email-ph" type="text" placeholder="Email liên hệ">
                        <input id="sdt-ph" type="text" placeholder="Số điện thoại của bạn">
                        <input id="number-ph" type="number" placeholder="Số quyển dự kiến">
                        <input id="submit1" class="wow flipInX submit" type="submit" value="Gửi">
                    </div>
                    <div class="tab-pane container fade row" id="menu2">
                        <input id="name-gv" type="text" placeholder="Họ tên bạn">
                        <input id="subject-gv" type="text" placeholder="Bạn là giáo viên môn">
                        <div class="ngang">
                            <input id="class-gv" type="text" placeholder="Lớp">
                            <input id="school-gv" type="text" placeholder="Trường">
                        </div>

                        <input id="email-gv" type="text" placeholder="Email liên hệ">
                        <input id="sdt-gv" type="text" placeholder="Số điện thoại của bạn">
                        <input id="number-gv" type="number" placeholder="Số quyển dự kiến">
                        <input id="submit2" class="wow flipInX submit" type="submit" value="Gửi">
                    </div>
                </div>
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
<!-- <script src="{{ secure_asset('js/frontend/range.js')}}"></script> -->
<script type="text/javascript" src="{{asset('js/frontend/iziModal.min.js')}}"></script>
<script src="{{ secure_asset('js/frontend/send-email.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".team").iziModal({
                title: "Danh sách những thành viên trong team",
                subtitle: "",
                headerColor: "#70C3FF",
                width: 1170,
                fullscreen: true,
                openFullscreen: false,
                autoOpen: false,
                onOpening: function() {
                    $('.listteam').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 4,
                        slidesToScroll: 2,
                        autoplay:true,
                        autoplaySpeed: 2000,
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: true
                                }
                            }
                        ]
                    });
                }
            });
        
    })
</script>
@endsection
    