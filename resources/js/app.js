require('./bootstrap');

let boddyPage = document.querySelector('.boddy');
let buttonTheme = document.querySelector('#theme-button');
let passwordInput = document.querySelector('.input-password');
let checkShowPassword = document.querySelector('#show-password');
let aboutMeButton = document.querySelector('#about-me-button');

buttonTheme.onclick = function(){
    if(boddyPage.classList.contains('dark-theme')){
        boddyPage.classList.remove('dark-theme');
        boddyPage.classList.add('light-theme');
    }else{
        boddyPage.classList.remove('light-theme');
        boddyPage.classList.add('dark-theme');
    }
}

checkShowPassword.onchange = function(){
if(checkShowPassword.checked){
    passwordInput.type = 'text';
}else{
    passwordInput.type = 'password';
}
}