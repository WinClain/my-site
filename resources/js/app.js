

$(function(){
    $('#theme-button').click(function(){
        $('body').toggleClass('dark-theme light-theme');
    });

    $('#show-password').on('change',function(){
        if ($('#show-password').prop('checked')) {
            $('.input-password').attr('type','text');
        }else{
            $('.input-password').attr('type', 'password');
        }
    });

    
});