function addEntrada(){
    const nomeDoUsuario = document.getElementById('usuario').value;
    const senhaDoUsuario = document.getElementById('senha').value;

    if(nomeDoUsuario === '' || senhaDoUsuario === ''){
        alert('Por favor, preencha todos os campos.');
        return;
    }

}