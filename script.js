const registrarButton=document.getElementById('registrarButton');
const loginButton=document.getElementById('loginButton');
const loginForm=document.getElementById('login');
const registrarForm=document.getElementById('registrar');

registrarButton.addEventListener('click',function(){
    loginForm.style.display="none";
    registrarForm.style.display="block";
})
loginButton.addEventListener('click', function(){
    loginForm.style.display="block";
    registrarForm.style.display="none";
})
