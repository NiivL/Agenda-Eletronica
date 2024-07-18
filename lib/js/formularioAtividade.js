const inputAtividade = document.querySelector('.inputAtividade');
const inputDescricao = document.querySelector('.inputDescricao');
const horasAtendimento = document.querySelector('#horasAtendimento');


function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
        document.getElementById(el).style.display = 'flex';
    else
        document.getElementById(el).style.display = 'none';
} 

function verificarCamposPreenchidos() {
    
    if(inputAtividade.value == "" && inputDescricao.value == ""){
        alert("Preencha todos os campos!");
        window.location.href="Calendario/views/user/index.php";
    }else if(inputAtividade.value == ""){
        alert("insira uma atividade!");
        window.location.href="Calendario/views/user/index.php";
    }else if(inputDescricao.value == ""){
        alert("insira uma descrição!");
        window.location.href="Calendario/views/user/index.php";
    }else if(horasAtendimento.value == ""){
        alert("insira uma hora!");
        window.location.href="Calendario/views/user/index.php";
    }







}