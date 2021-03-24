

function validateTime() {


    let Data = document.querySelector('input[type="date"]').value;
    let Ano = Data.slice(0, 4);

    let Hora1 = document.querySelector("input[name='entrada']").value;
    let Hora2 = document.querySelector("input[name='saida']").value;
    //let Tempo1 = Inicial.slice(5,7) + Inicial.slice(8,10);
    //let Tempo2 = Final.slice(5,7) + Final.slice(8,10);

    let Justifica = document.getElementById("drop").value;
    let erro3 = document.getElementById('erro-cadastro');


    if (Ano != '2021') {
        erro3.innerHTML = "A data inserida não é válida";
        erro3.className = "msg-erro";
        return false;
    } 

    if (Hora1 == "" || Hora1 == null) {
        erro3.innerHTML = "A hora de entrada é de preenchimento obrigatório.";
        erro3.className = "msg-erro";
        return false;
    } 

    if (Hora1 > Hora2 || Hora1 == Hora2) {
        erro3.innerHTML = "A hora final não pode ser inferior à hora inicial";
        erro3.className = "msg-erro";
        return false;
    } 
    
    if (Justifica == "0" ){
        erro3.innerHTML = "Selecione uma justificativa";
        erro3.className = "msg-erro";
        return false;
    }

    else {
        alert( "Hora cadastrada com sucesso!" );
        location.href="InserirHora.html";
        return true;
    }
}






function editTime(){

    let Inicial = document.querySelector("input[name='dataInicial']").value;
    let Final = document.querySelector("input[name='dataFinal']").value;
    let Tempo1 = Inicial.slice(5,7) + Inicial.slice(8,10);
    let Tempo2 = Final.slice(5,7) + Final.slice(8,10);

    let Justifica = document.getElementById("drop").value;
    let erro3 = document.getElementById('erro-cadastro');


    if (Inicial === '' || Inicial == null) {
        erro3.innerHTML = "A data inserida não é válida";
        erro3.className = "msg-erro";
        return false;
    } 

    if (Tempo1 > Tempo2 || Tempo2 == null) {
        erro3.innerHTML = "A data final não pode ser inferior à data inicial";
        erro3.className = "msg-erro";
        return false;
    } 
    
    if (Justifica == "0" ){
        erro3.innerHTML = "Selecione uma justificativa";
        erro3.className = "msg-erro";
        return false;
    }

    else {
        alert( "Hora editada com sucesso!" );
        location.href="EditarHora.html";
        return true;
    }
}




function consultTime() {


    let Inicial = document.querySelector("input[name='dataInicial']").value;
    let Final = document.querySelector("input[name='dataFinal']").value;
    let Tempo1 = Inicial.slice(5,7) + Inicial.slice(8,10);
    let Tempo2 = Final.slice(5,7) + Final.slice(8,10);

    let Justifica = document.getElementById("drop").value;
    let erro3 = document.getElementById('erro-cadastro');


    if (Inicial === '' || Inicial == null) {
        erro3.innerHTML = "A data inserida não é válida";
        erro3.className = "msg-erro";
        return false;
    } 

    if (Tempo1 > Tempo2 || Tempo2 == null) {
        erro3.innerHTML = "A data final não pode ser inferior à data inicial";
        erro3.className = "msg-erro";
        return false;
    } 
    
    if (Justifica == "0" ){
        erro3.innerHTML = "Selecione uma justificativa";
        erro3.className = "msg-erro";
        return false;
    }

    else {
        alert( "Consulta realizada com sucesso!" );
        location.href="ConsultarHora.html";
        return true;
    }
}