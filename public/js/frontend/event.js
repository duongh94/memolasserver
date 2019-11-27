$(document).ready(function() {
	var rangeHome = 0;
    $(".bannerSlider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(".feed").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000
    });

    $(".slider-template").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 4000,
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
    rangeHome = $(".quyen").val();
    var x1 = 0, x2 = 0, x3 = 0;
    var book1 = 0, book2 = 0, book3 = 0;
    $(".quyen").on("change input", function() {
        rangeHome = $(".quyen").val();
        
        $(".value").text(rangeHome);
        $(".book").text('1');
        $("#number-book").text(rangeHome);
        $(".number").text(rangeHome);
        if(rangeHome == 0){
            $("#price-1").text('0' + ' VND');
            $("#price-2").text('0' + ' VND');
            $("#price-3").text('0' + ' VND');
        }
        else{
            percent = 0;
            if(rangeHome <= 20){
                percent = 10;
            }else if(rangeHome <= 40){
                percent = -5;
            }
            else if(rangeHome <= 60){
                percent = -10;
            }
            else if(rangeHome <= 80){
                percent = -15;
            }
            $("#price-1").text(Math.ceil((287000 * (100 + percent)/100))+ ' VND');
            $("#price-2").text(Math.ceil((505000 * (100 + percent)/100))+ ' VND');
            $("#price-3").text(Math.ceil((578000 * (100 + percent)/100))  + ' VND');
        }
    });

    $(window).scroll(function() {
        var $height = $(window).scrollTop();
      if($height > 100) {
            $('.navbar').addClass('menu-fixed');
        } else {
            $('.navbar').removeClass('menu-fixed');
        }
    });

    $('#form-blog').click(function (){
        var form_blogDetail = {
            name: $('#name-blog').val(),
            email: $('#email-blog').val(),
            content: $('#content-blog').val()
        }
        $.ajax({
			type: 'POST',
			url: '/api/mails/send',
			data: form_blogDetail,
            dataType: "json",
			success: function(data){
				alert('thành công');
			},
			error: function(error){
				alert('thất bại');
			}
		})
    })
});

wow = new WOW({
    animateClass: "animated",
    offset: 100,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
    }
});
wow.init();



$(".close").click(function() {
    if ($(".fixed").css("right") == "0px") {
        $(".fixed").css("right", "-155px");
        $("close").html("arrow_left");
    } else {
        $(".fixed").css("right", "0px");
        $("close").html("arrow_right");
    }
});

$(".navbar-toggler").click(function() {
    if ($(".menu").html() == "menu") {
        $(".menu").html("clear");
    } else {
        $(".menu").html("menu");
    }
});

// $(function() {
//     $(".team").iziModal({
//         title: "Danh sách những thành viên trong team",
//         subtitle: "",
//         headerColor: "#70C3FF",
//         width: 1170,
//         fullscreen: true,
//         openFullscreen: false,
//         autoOpen: true
//     });
// });
