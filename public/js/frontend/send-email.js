$(function(){
	var typeMain = 1;
	$('#hs').click(function (){
		typeMain = 1;
		console.log(typeMain);
	})
	$('#ph').click(function (){
		typeMain = 2;
		console.log(typeMain);
	})
	$('#gv').click(function (){
		typeMain = 3;
		console.log(typeMain);
	})
    $('#submit').click(function(e){

		var email = {
            type: typeMain,
            name: $('#name-hs').val(),
            email: $('#email-hs').val(),
            class: $('#classroom-hs').val(),
            club: $('#CLB-hs').val(),
            school: $('#school-hs').val(),
            number_book: $('#number-hs').val(),
            phone_contact : $('#sdt-hs').val()
        };
         
		$.ajax({
			type: 'POST',
			url: '/api/mails/send',
			data: email,
            dataType: "json",
			success: function(data){
				alert('thành công');
			},
			error: function(error){
				alert('Gửi thất bại');
			}
		})
	})

	$('#submit1').click(function(e){

		var email = {
            type: typeMain,
            name: $('#name-ph').val(),
            name_child: $('#name-child-ph').val(),
            class: $('#class-ph').val(),
            school: $('#school-ph').val(),
            email: $('#email-ph').val(),
            phone_contact: $('#sdt-ph').val(),
            number_book : $('#number-ph').val()
        };
         
		$.ajax({
			type: 'POST',
			url: '/api/mails/send',
			data: email,
            dataType: "json",
			success: function(data){
				alert('thành công');
			},
			error: function(error){
				alert('thất bại');
			}
		})
	})
	$('#submit2').click(function(e){

		var email = {
            type: typeMain,
            name: $('#name-gv').val(),
            subject: $('#subject-gv').val(),
            class: $('#class-gv').val(),
            school: $('#school-gv').val(),
            email: $('#email-gv').val(),
            phone_contact: $('#sdt-gv').val(),
            number_book : $('#number-gv').val()
        };
         
		$.ajax({
			type: 'POST',
			url: '/api/mails/send',
			data: email,
            dataType: "json",
			success: function(data){
				alert('thành công');
			},
			error: function(error){
				alert('thất bại');
			}
		})
	})
})