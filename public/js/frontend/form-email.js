// $(document).ready(function(){
//     $('#contact-form').submit(function (e){
//         var name, lophs , clbhs, schoolhs, emailhs, sdths, numberhs;
//         name = document.getElementById('namehs'),
//         lophs = document.getElementById('lophs'),
//         clbhs = document.getElementById('clbhs'),
//         schoolhs = document.getElementById('schoolhs'),
//         emailhs = document.getElementById('emailhs'),
//         sdths = document.getElementById('sdths'),
//         numberhs = document.getElementById('numberhs');
//         if(!name.value || !lophs.value || !clbhs.value || !schoolhs.value || !emailhs.value || !sdths.value || !numberhs.value){
//             alert('lỗi');
//             return false;
//         }
//         else{
//             $.ajax({
//                 url:'https://formspree.io/dev.vuhoang1802@gmail.com',
//                 method: "POST",
//                 data:$(this).serialize(),
//                 dataType:"json"
//             })
//             e.preventDefault()
//             $(this).get(0).reset();
//             return alert("đã gửi");
//         }
//     })
// })
