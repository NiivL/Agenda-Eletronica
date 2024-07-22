function addEntrada(){
    const nomeDoUsuario = document.getElementById('usuario').value;
    const senhaDoUsuario = document.getElementById('senha').value;
    const nomeDaPessoa = document.getElementById('nome_user').value;
    console.log(nomeDaPessoa);

    if(nomeDoUsuario === '' || senhaDoUsuario === '' || nomeDaPessoa === ''){
        alert('Por favor, preencha todos os campos.');
        window.location.href="Calendario/views/user/index.php";
        return;
    }

};