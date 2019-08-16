$(function () {
    var form = $('.salary-calc form');

    $('.salary-calc form .field-block select, .salary-calc form .field-block input[type="number"]').on('change', function () {
        $('.salary-calc form .field-block span').remove();
        var not_number = $(this).attr('type') === 'number' && !$.isNumeric($(this).val());
        if(not_number){
            $(this).val(0);
            $(this).parent('.field-block').append('<span>Введите число</span>')
        }

        if($(this).attr('name') === 'position'){
            if($(this).val().search("A") != -1){
                $('.salary-calc form .exp_years_type_1').show();
                $('.salary-calc form .exp_years_type_1 select').removeAttr('disabled');
                $('.salary-calc form .exp_years_type_2').hide();
                $('.salary-calc form .exp_years_type_2').trigger('reset');
                $('.salary-calc form .exp_years_type_2 select').attr('disabled');
            } else {
                $('.salary-calc form .exp_years_type_2').show();
                $('.salary-calc form .exp_years_type_2 select').removeAttr('disabled');
                $('.salary-calc form .exp_years_type_1').hide();
                $('.salary-calc form .exp_years_type_1').trigger('reset');
                $('.salary-calc form .exp_years_type_1 select').attr('disabled');
            }
        }

        var data = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'post',
            data: data,
            async: false,
            success: function (data) {
                console.log(data);
                $('.calc-result').show();
                $('.calc-result span').text(data.result);

                if($.isNumeric(data.result) && data.result > 0){
                    $('.calc-result-modal').show(200);
                    $('.calc-result-modal span').text(data.result);
                }
                setTimeout(function () {
                    $('.calc-result-modal').hide(200);
                }, 5000)
            },
            error: function (e) {
                //console.log('Ошибка')
            }
        })
    })
});