

$(function(){
    

    function themeButtons(){
        if($('body').hasClass('dark-theme')){
            $('.navbar #theme-button img').attr('src','/img/moon.png');
            $('.form-auth .input-div img').attr('src', ($('#password-div').hasClass('password-hidden')) ? '/img/invisible-white.png' : '/img/visible-white.png');
            $('.about-left img').attr('src','/img/qualities-white.png');
            $('.about-right img').attr('src','/img/adds-white.png');
        }else{
            $('.navbar #theme-button img').attr('src','/img/sun.png');
            $('.form-auth .input-div img').attr('src', ($('#password-div').hasClass('password-hidden')) ? '/img/invisible-black.png' : '/img/visible-black.png');
            $('.about-left img').attr('src','/img/qualities-black.png');
            $('.about-right img').attr('src','/img/adds-black.png');
        }
    };

    themeButtons();

    $('#theme-button').click(function(){
        $('body').toggleClass('dark-theme light-theme');
        themeButtons();
    });

    $('#show-password').click(function(){
        $('#password-div').toggleClass('password-hidden password-show');
        $('.password-hidden .div-input-password .input-password').attr('type','password');    
        $('.password-show .div-input-password .input-password').attr('type','text'); 
        if($('body').hasClass('dark-theme')){
            $('.password-hidden img').attr('src','/img/invisible-white.png');
            $('.password-show img').attr('src','/img/visible-white.png');
        }else{
            $('.password-hidden img').attr('src','/img/invisible-black.png');
            $('.password-show img').attr('src','/img/visible-black.png');
        }
    });

    $('#up-button').click(function(){
        $('html,body').animate({scrollTop: '0px'}, 300)
    });

    $('#about-me-button').click(function(){
        $('html,body').animate({scrollTop: '2100px'}, 300)
    })

    $(window).scroll(function(){
        if($(window).scrollTop() >= 1200){
            $('#up-button').show();
        }else{
            $('#up-button').hide();
        }
    })

});