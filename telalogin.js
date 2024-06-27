

function addEntrada(){
    const nomeDoUsuario = document.getElementById('usuarioCadastrado').value;
    const senhaDoUsuario = document.getElementById('senhaCadastrada').value;

    if(nomeDoUsuario === '' || senhaDoUsuario === ''){
        alert('Por favor, preencha todos os campos.');
        return;
    }

}