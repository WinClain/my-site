require('./bootstrap');

let passwordInput = document.querySelector('.input-password');
let checkShowPassword = document.querySelector('#show-password');

checkShowPassword.onchange = function(){
if(checkShowPassword.checked){
    passwordInput.type = 'text';
}else{
    passwordInput.type = 'password';
}
}