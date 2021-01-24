
$(function () {
    $('.lang_toogle').click(function(e){
        e.preventDefault();
        var lang=$(this).data('lang');
        $(this).addClass('lang_active');
        $(this).siblings().removeClass('lang_active');
    
        if(lang=="uz"){
            $('.about_ru').addClass('hide');
            $('.about_uz').addClass('show');
            $('.about_uz').removeClass('hide');
            $('.about_en').addClass('hide');
        }else if(lang=="ru"){
            $('.about_uz').addClass('hide');
            $('.about_ru').addClass('show');
            $('.about_ru').removeClass('hide');
            $('.about_en').addClass('hide');
        }else{
            $('.about_uz').addClass('hide');
            $('.about_en').addClass('show');
            $('.about_en').removeClass('hide');
            $('.about_ru').addClass('hide');
        }
        

    })
});