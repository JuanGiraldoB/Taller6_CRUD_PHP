
var form_login = document.querySelector(".form_login");
var form_register = document.querySelector(".form_register");

function registrar(){
    form_register.style.display = "block";
    form_login.style.display = "none";
    
}

function inicio_sesion(){
    form_login.style.display = "block";
    form_register.style.display = "none";
}