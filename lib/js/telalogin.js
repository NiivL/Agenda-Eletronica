

function addEntrada(){
    const nomeDoUsuario = document.getElementById('name_user').value;
    const senhaDoUsuario = document.getElementById('password').value;

    if(nomeDoUsuario === '' || senhaDoUsuario === ''){
        alert('Por favor, preencha todos os campos.');
        window.location.href="Calendario/views/login/index.php";
        return;
    }

    window.location.href="Calendario/views/user/index.php";

}