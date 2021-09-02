$(document).ready(function (e){
	var minS = 500000;
	var maxS = 30000000;
	$( "#polzunok_1" ).slider({
		range: true,
		values: 17,
		min: minS,
		max : maxS,
		step : 500000,
		value : 100000,
		create : function(e , ui){

		},
		change : function(e , ui){
			console.log(ui.value);
		},
		slide : function(e , ui) {
			$('#inPols').val(number_format(ui.value, 0, '.', ' '));
		}
	});
	$('#inPols').on('change', function(e){
		var val = $(this).val();
		$( "#polzunok_1" ).slider( "value", val );

	});


	function number_format(number, decimals, dec_point, thousands_sep) {
		number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
		var n = !isFinite(+number) ? 0 : +number,
		prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
		s = '',
		toFixedFix = function(n, prec) {
			var k = Math.pow(10, prec);
			return '' + (Math.round(n * k) / k)
			.toFixed(prec);
		};
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
  .split('.');
  if (s[0].length > 3) {
  	s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
  	.length < prec) {
  	s[1] = s[1] || '';
  s[1] += new Array(prec - s[1].length + 1)
  .join('0');
}
return s.join(dec);
}



var minL = 1;
var maxL = 30;
$( "#polzunok_2" ).slider({
	range: true,
	values: 17,
	min: minL,
	max : maxL,
	step : 1,
	value : 1,
	create : function(e , ui){
		
	},
	change : function(e , ui){
		console.log(ui.value);
	},
	slide : function(e , ui) {
		$('#imPols').val(ui.value);

	}
});
$('#imPols').on('change', function(e){
	var val = $(this).val();
	$( "#polzunok_2" ).slider( "value", val );

});


$('#param1').on('click', function(e){
	if($(this).hasClass('vek')){
		
		$(this).removeClass('vek');
	}else{
		$(this).addClass('vek');
	}
});


$('#param2').on('click', function(e){
	if($(this).hasClass('vek')){
		
		$(this).removeClass('vek');
	}else{
		$(this).addClass('vek');
	}
});

$('#param3').on('click', function(e){
	if($(this).hasClass('vek')){
		
		$(this).removeClass('vek');
	}else{
		$(this).addClass('vek');
	}
});


$('#param4').on('click', function(e){
	if($(this).hasClass('vek')){
		
		$(this).removeClass('vek');
	}else{
		$(this).addClass('vek');
	}
});


$('#param5').on('click', function(e){
	if($(this).hasClass('vek')){
		
		$(this).removeClass('vek');
	}else{
		$(this).addClass('vek');
	}
});
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
});

