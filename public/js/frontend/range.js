$.ajaxSetup({

	headers: {

		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

	        }

});


$(function() {
	var options = 1;
	var total = 0;
	var discount = 0;
	var total_student = 0;
	var book = 1;
	var bia_cung = 0, bia_mem = 0;
	var fixed_costs = 0;
	var ratio = 0;
	var total_cover = 0;
	var total_pages = 0;
	var cover = false;
	var cover_name = 'Bìa Mềm';
	var price_book = 0;
	if(cover == true){
		$('.bia').html('Bìa Cứng');
		$('#huey').prop('checked', true);
		$('#dewey').prop('checked', false);
	}
	else{
		$('.bia').html('Bìa Mềm');
		$('#huey').prop('checked', false);
		$('#dewey').prop('checked', true);

	}

	var studio = 'A';
	$('.studio').html(studio);

	//khởi tạo
	$('.range1').prop('value', 0);
	$('.range2').prop('value', 0);
	$('.range3').prop('value', 0);
	$('.price-book').html(price_book + '.000 VND/Quyển');
	console.log(price_book);
	if(options == 1){
		bia_cung = 286;
		bia_mem = 158;
		fixed_costs = 31;
		ratio = 66;
		$('.price-book').html(fixed_costs + '.000 VND/Quyển');
		console.log("bia mem:",bia_mem,' bia cung:', bia_cung, 'chi phí cố định', fixed_costs, "tỉ lệ", ratio);
	}

	$('#demoTabs a[href="#home"]').click(function (){
		options = 1;
		bia_cung = 286;
		bia_mem = 158;
		fixed_costs = 31;
		ratio = 66;
		//$('.price-book').html(fixed_costs + '.000 VND/Quyển');
		console.log("bia mem:",bia_mem,' bia cung:', bia_cung, 'chi phí cố định', fixed_costs, "tỉ lệ", ratio);

	});
	$('#demoTabs a[href="#menu1"]').click(function (){
		options = 2;
		bia_cung = 286;
		bia_mem = 158;
		fixed_costs = 231;
		ratio = 77;
		//$('.price-book').html(fixed_costs + '.000 VND/Quyển');
		console.log("bia mem:",bia_mem,' bia cung:', bia_cung, 'chi phí cố định', fixed_costs, "tỉ lệ", ratio);

	});
	$('#demoTabs a[href="#menu2"]').click(function (){
		options = 3;
		bia_cung = 230;
		bia_mem = 164;
		fixed_costs = 270;
		ratio = 75;
		//$('.price-book').html(fixed_costs + '.000 VND/Quyển');
		console.log("bia mem:",bia_mem,' bia cung:', bia_cung, 'chi phí cố định', fixed_costs, "tỉ lệ", ratio);

	});

	var rangePercent1 = $('.range1').val();
	$('.range1').on('change input', function() {
		rangePercent1 = $('.range1').val();
		$('.number1').text(rangePercent1);
		total_student = rangePercent1;
	});


	var rangePercent2 = $('.range2').val();
	$('.range2').on('change input', function() {
		rangePercent2 = $('.range2').val();
		$('.number2').text(rangePercent2);
		book = rangePercent2;
		let mota = '';
		if(rangePercent2 <= 20){
			discount = 10;
			mota = '(Dưới 20 quyển) +';
		}
		else if(rangePercent2 >= 20 && rangePercent2 <= 40){
			discount = -5;
			mota = '(Trên 40 quyển)';
		}
		else if(rangePercent2 >= 40 && rangePercent2 <= 60){
			discount = -10;
			mota = '(Trên 60 quyển)';
		}
		else if(rangePercent2 >= 60 && rangePercent2 <= 80){
			discount = -15;
			mota = '(Trên 80 quyển)';
		}
		$('.discount').html( mota + discount + '%');
	});

	check_defaut = false;
	if(check_defaut == false){
		total_pages = $('.range3').val();
		$('.totalpage-people').show();
		$('#customControlAutosizing').prop('checked', false);
		$('#numberpage-defaut').hide();
	}
	else{
		total_pages = 3 * total_student;
		$('.totalpage-people').hide();
		$('#customControlAutosizing').prop('checked', true);
	}
	$(".check-page").change(function() {
		if(this.checked) {
			check_defaut = true;
			total_pages = 3 * total_student;
			$('.totalpage-people').hide();
			$('#numberpage-defaut').show();

		}
		else{
			check_defaut = false;
			total_pages = $('.range3').val();
			$('#numberpage-defaut').hide();
			$('.totalpage-people').show();
		}
	});
	var rangePercent3 = $('.range3').val();
	$('.range3').on('change input', function() {
		rangePercent3 = $('.range3').val();
		$('.number3').text(rangePercent3);
		total_pages = $('.range3').val();
	});

	$('#checked').click(function() {
		cover = true;
		$('.bia').html('Bìa Cứng');
	})
	$('#checked1').click(function() {
		cover = false;
		$('.bia').html('Bìa Mềm');
	})

	// $('#studioA').click(function() {
	// 	studio = 'A';
	// 	$('.studio').html(studio)
	// })
	// $('#studioB').click(function() {
	// 	studio = 'B';
	// 	$('.studio').html(studio)
	// })
	// $('#studioC').click(function() {
	// 	studio = 'C';
	// 	$('.studio').html(studio)
	// })

	


	setInterval(function(){
		
		if(cover == true){
			var temp = (fixed_costs + bia_cung ) / (ratio / 100) * total_student * ((100 + (discount) )/100);
			$('.price-book').html(price_book + '.000 VND/Quyển');
			temp = Math.ceil(temp)
			$('#total').html(temp);
			total = temp;
			if(total == 0){
				price_book = 0;
			}
			else{
				price_book = Math.ceil(total / total_student);
			}
		}
		else{
			var temp = (fixed_costs + bia_mem ) / (ratio / 100) * total_student * ((100 + (discount) )/100);
			temp = Math.ceil(temp)
			$('#total').html(temp);
			total = temp;
			$('.price-book').html(price_book + '.000 VND/Quyển');
			if(total == 0){
				price_book = 0;
			}
			else{
				price_book = Math.ceil(total / total_student);
			}
		}
		if(cover == false){
			cover_name = 'Bìa Cứng';
		}
		else{
			cover_name = 'Bìa Mềm';
		}
		$('#numberpage-defaut').text(3 * total_student );
		if($(".check-page").prop('checked') == true){
			total_pages = 3 * total_student;
		}
		else if($(".check-page").prop('checked') != 'checked'){
			total_pages = $('.range3').val();
		}
		$(".poster").html(total_student);

	}, 500);


	$('#pass-json').click(function(e){
		var person = {
			type: 4,
			numer_people: total_student,
			number_book: book,
			total_pages_book:total_pages,
			giam_gia:discount,
			option: options,
			bia: cover_name,
			tong: Math.ceil(total),
			name: $('#name').val(),
			email: $('#email').val(),
			number_phone: $('#sdt').val(),
			school: $('#school').val(),
			class: $('#class').val()
		};
		console.log(person);
		$.ajax({
			type: 'POST',
			url: '/api/mails/send-total',
			data: person,
            dataType: "json",
            success: function () {
                console.log('thành công');
            },
            error: function (error) {
                console.log(error);
            }
        })
    })
});
