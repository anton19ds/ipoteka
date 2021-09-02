$(document).ready(function (e){

    function CalcStaff(){

        var staff = Number($('#stafkaYer').html().replace(/[^.\d]/g, '')) / 100 / 12;
        var Sr = Number($('#inPols').val().replace(/[^\d]/g, ''));
        var ner = Number($('#imPols').val()) * 12;
        var parametr1 = staff*Math.pow(1+staff, ner);
        var parametr2 = Math.pow(1+staff, ner)-1;
        var znamen = parametr1 / parametr2;
        var plateJMes = Math.floor(znamen * Sr);
        var pereplatCred = plateJMes * ner;
        var pereplatCred1 = pereplatCred - Sr;
        var pereplatCred2 = pereplatCred1 / 180;
        $('#procStef').html(number_format(pereplatCred2, 0, '.', ' ') +'₽');
        $('#platMes').html(number_format(plateJMes, 0, '.', ' ') +'₽');

    }

    CalcStaff();



    var yeurStafka = $('#stafkaYer').data('val');
    var mesStafka = yeurStafka / 100 / 12;
    var prosent = mesStafka.toFixed(4);
    prosent = prosent * 100;
    $('#stafkaMes').html(prosent+'%');
    // var yeurStafka = $('#stafkaYer').data('val');
    // var mesStafka = yeurStafka / 100 / 12;
    // var prosent = mesStafka.toFixed(4);
    // prosent = prosent * 100;
    // $('#stafkaMes').html(prosent+'%');


    var minS = 500000;
    var maxS = 30000000;
    $( "#polzunok_1" ).slider({
        range: true,
        values: 17,
        min: minS,
        max : maxS,
        step : 500000,
        value : 3000000,
        create : function(e , ui){

        },
        change : function(e , ui){
            console.log(ui.value);
            $('#creSumm').html(number_format(ui.value, 0, '.', ' '));
            CalcStaff();
        },
        slide : function(e , ui) {
            $('#inPols').val(number_format(ui.value, 0, '.', ' '));
        }
    });
    // $('#inPols').on('change', function(e){
    // 	var val = $(this).val();
    // 	$( "#polzunok_1" ).slider( "value", val );
    // });

    $('#inPols').on('keyup', function() {
        var val = $(this).val();
        //var format =
        $(this).val(number_format(val.replace(/[^0-9]/g, ''), 0, '.', ' '));
        $( "#polzunok_1" ).slider( "value", val.replace(/[^\d]/g, ''));
        CalcStaff();
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
        value : 15,
        create : function(e , ui){

        },
        change : function(e , ui){
            CalcStaff();
            console.log(ui.value);
        },
        slide : function(e , ui) {
            $('#imPols').val(ui.value);

        }
    });
// $('#imPols').on('change', function(e){
// 	var val = $(this).val();
// 	$( "#polzunok_2" ).slider( "value", val );
//
// });

    $('#imPols').on('keyup', function() {
        var val = $(this).val();
        //var format =
        $(this).val(number_format(val.replace(/[^0-9]/g, ''), 0, '.', ' '));
        $( "#polzunok_2" ).slider( "value", val.replace(/[^\d]/g, ''));
    });

    function Stafka(yeurStafka){
        var mesStafka = yeurStafka / 100 / 12;
        var prosent = mesStafka.toFixed(4);
        prosent = prosent * 100;
        $('#stafkaMes').html(prosent.toFixed(2)+'%');
        CalcStaff();
    }

    $('#param1').on('click', function(e){
        if($(this).hasClass('vek')){
            $(this).removeClass('vek');
            var yeurStafka = $('#stafkaYer').html();
            var sel = yeurStafka.replace(/[^.\d]/g, '');
            sel = Number(sel) + 0.8;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }else{
            $(this).addClass('vek');
            var yeurStafka = $('#stafkaYer').html();
            var sel = yeurStafka.replace(/[^.\d]/g, '');
            sel = sel - 0.8;
            $('#stafkaYer').html(sel.toFixed(1) +'%');
            Stafka(sel);
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
        var yeurStafka = $('#stafkaYer').html();
        var sel = yeurStafka.replace(/[^.\d]/g, '');
        if($(this).hasClass('vek')){
            $(this).removeClass('vek');
            sel = Number(sel) + 1;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }else{
            $(this).addClass('vek');
            sel = sel - 1;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }
    });


    $('#param4').on('click', function(e){
        var yeurStafka = $('#stafkaYer').html();
        var sel = yeurStafka.replace(/[^.\d]/g, '');
        if($(this).hasClass('vek')){
            $(this).removeClass('vek');
            sel = Number(sel) + 6.4;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }else{
            $(this).addClass('vek');
            sel = sel - 6.4;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }
    });


    $('#param5').on('click', function(e){
        var yeurStafka = $('#stafkaYer').html();
        var sel = yeurStafka.replace(/[^.\d]/g, '');
        if($(this).hasClass('vek')){
            $(this).removeClass('vek');
            sel = Number(sel) + 0.3;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }else{
            $(this).addClass('vek');
            sel = sel - 0.3;
            $('#stafkaYer').html(sel.toFixed(1)+'%');
            Stafka(sel);
        }
    });


});
