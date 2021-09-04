$(document).ready(function (e){






$('.quest_text').on('click', function(e){
	console.log('123');
	if($(this).hasClass('pl')){
		$(this).removeClass('pl');
		$(this).addClass('mn');
		$(this).css('height', 'auto');
		$(this).children('.nefert').css('display', 'none');
	}else{
		$(this).removeClass('mn');
		$(this).addClass('pl');
		$(this).css('height', '120px');
		$(this).children('.nefert').css('display', 'block');
	}
});


$('.menu_burg').on('click', function(e){
	e.preventDefault();
	if($('.mob_plach').hasClass('clos')){
		$('.mob_plach').removeClass('clos');
	}else{
		$('.mob_plach').addClass('clos');
	}
});

// $('.lis_select span').on('click', function(e){
// 	var data = $(this).data('type');
// 	$('p.param').html(data);
// 	$('.lis_select').addClass('cls');
// });
var selec = $('#selec');
 selec.on('click', function(e){
 	e.preventDefault();

 		if($('.lis_select').hasClass('cls')){
 		$('.lis_select').removeClass('cls');
 	}
 }).children('.lis_select').children('.spFF').click(function(e){
 	e.stopPropagation();
 		var data = $(this).data('type');
	$('p.param').html(data);
	$('.lis_select').addClass('cls');
	console.log('123');
 });


 $('#phoneForm').inputmask({"mask": "+7(999) 999-99-99"});
 $('#userinfo-phone_org').inputmask({"mask": "(999) 999-9999"});
 $('#userinfo-phone_org').inputmask({"mask": "7-999-999-99-99"});
 $('#user-phone').inputmask({"mask": "+7(999)999-99-99"});
 $('#reg_phone').inputmask({"mask": "7-999-999-99-99"});
 $('.phone_mask input').inputmask({"mask": "8 999 999 99 99"});
 $('#userparam-cod').inputmask({"mask": "999-999"});
 $('#userparam-yer_b').inputmask({"mask": "9999"});
 $('#userparam-numer').inputmask({"mask": "9999-999999"});


});


$(document).ready(function(e){

	$('.flofGet').on('click', function(e){
		e.preventDefault();
		$('.testSert').removeClass('vis');
		var phone = $('#user-phone').val();
		$('.testSert').addClass('vis');
		console.log(phone);
		$.post('/cabinet/phone-sms', {phone: phone}, Success);
		function Success(data){
			console.log(data);
		}
	});
});

$(document).on('click', '.close', function(e){
	if(!$('.modal_page_bg').hasClass('no-visible')){
		$('.modal_page_bg').addClass('no-visible');
	}
});

$(document).on('click', '.addZayavka', function(e){
	e.preventDefault();
	if($('.modal_page_bg').hasClass('no-visible')){
		$('.modal_page_bg').removeClass('no-visible');
	}
});


$(document).on('click','#formSend', function(e){
	e.preventDefault();
	var data = $('#formPersona').serializeArray();
	$.ajax({
		method: 'POST',
		url: "/application/zayavka",
		data: data,
		success: function(data){
			var arr = JSON.parse(data);
			if(arr.code == '400'){
				$('.error_modal').html('Введите пожалуйста все данные');
				$('#formPersona input').each(function(e){
					if($(this).val() == ""){
						$(this).addClass('border_red');
					}
				});
			}
			if(arr.code == '403'){
				$('.error_modal').html('По вашим данным заявка уже сформирована, для отправки перейдите в личный кабинет');
			}
			if(arr.code == '201'){
				$('.error_modal').html('По вашим данным заявка уже сформирована, для отправки перейдите в личный кабинет');
			}
			if(arr.code == '200'){
				document.location = '/cabinet/reg-one';
			}
		}
	});
});

$('#user-smscode').on('keyup', function(e){
	var val = $(this).val();
	if(val.length > 5){
		$.post('/cabinet/get-sms', {val: val}, Success);
		function Success(data){
			if(data == '200'){
				$('.truePhone').css('display', 'block');
			}else{
				$('.truePhone').css('display', 'none');
			}
		}
	}
});


$('.open_zayv').on('click', function(e){
	e.preventDefault();
	var id = $(this).data('stc');
	$(".modal_text").html('');
	$.post('/cabinet/', {id: id}, Success);
	function Success(data){
		$(".modal_text").html(data);
		$('#in-modal').modal('show');
	}
});

$(document).ready(function (e) {
	$('#openGrafik').on('click', function (e) {
		e.preventDefault();
		var summ = $('#inPols').val();
		var times = $('#imPols').val();
		var stafka = $('#stafkaYer').html();
		$.post('/site/read-grafik',{summ: summ, times: times, stafka: stafka}, Success);
		function Success(data){
			$('.content_modal').html(data);
			$('#grafik').modal('show');
		}

	})
	$('.close_md').on('click', function(e){
		e.preventDefault();
		$('#grafik').modal('hide');
	});

	$('#slideRight').on('click', function(e){
		e.preventDefault();
		var position = $('.slides_gallery').attr('data-position');
		position = Number(position) + 260;
		$('.slides_gallery').attr('data-position', position);
		if($('.slides_gallery').width() <= position){
			$('.slides_gallery').attr('data-position', '0');
			$('.slides_gallery').css('left', "0px");
		}else{
			$('.slides_gallery').css('left', "-"+position+"px");
		}
		
	});

	$('#slideLeft').on('click', function(e){
		e.preventDefault();
		var position = $('.slides_gallery').attr('data-position');
		if(position != '0'){
			position = Number(position) - 260;
			$('.slides_gallery').attr('data-position', position);
			$('.slides_gallery').css('left', '-'+position+"px");
		}
		
	});
	
	$('#addDocument').on('click', function(e){
		e.preventDefault();
		$('.sendFiles').trigger( "click" );
	})
	$('.fssp-zaps').on('click', function(e){
		e.preventDefault();
		var task = $(this).data('task');
		$.post('/admin/application/zapros-fssp', {task: task}, Success);
		function Success(data){
			console.log(data);
		}
	});
});


// slideLeft
			