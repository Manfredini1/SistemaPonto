
var email = document.getElementById('mail');
var senha = document.getElementById('senha');
var erro1 = document.getElementById('email-msg');
var erro2 = document.getElementById('senha-msg');

function validateLogin() {
    
    //(!email.validity.valid) não exige o .com
    if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || email === null || email === "") {
        erro1.innerHTML = "O e-mail informado não é válido.";
        erro1.className = "msg-erro";
        email.focus();
        return false;
    } 
    
    if (!senha.validity.valid || senha === null || senha === "") {
        erro2.innerHTML = "Este campo é de preenchimento obrigatório.";
        erro2.className = "msg-erro";
        senha.focus();
        return false;
    } 
    
    /**  substituido pelo php
    if (senha.validity.valid && email.validity.valid){
        location.href= "SelecaoPerfil.php";
        return true;
    }
    */
}

email.addEventListener("input", function (event) {
    if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || email === null || email === "") {
        erro1.innerHTML = "O e-mail informado não é válido.";
        erro1.className = "msg-erro";
    }
}, false);

email.addEventListener("input", function (event) {
    if (email.validity.valid) {
        erro1.innerHTML = ""; 
    }
}, false);
      
