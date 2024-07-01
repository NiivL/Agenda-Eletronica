<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/calendario.css">
    <link rel="stylesheet" href="../styles/crud.css">
</head>

<body>
    <nav class="menuLateral">
        <div class="btn-expandir">
            <i class="bi bi-list-task" id="btn-expandir"></i>
        </div>

        <ul>
            <li class="item-menu ativo">
                <a href="#">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-calendar-event"></i></span>
                    <span class="txt-link">Agenda</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-scooter"></i></span>
                    <span class="txt-link">Atividades</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Conta</span>
                </a>
            </li>
        </ul>

    </nav>
    <div class="content">
        <div class="content-calendario">
            <div class="days-week">
                <span>Segunda</span>
                <span>Terça</span>
                <span>Quarta</span>
                <span>Quinta</span>
                <span>Sexta</span>
                <span>Sábado</span>
                <span>Domingo</span>
            </div>

            <div class="number-days">
                <span class="mes-anterior">30</span>
                <span class="mes-anterior">31</span>
            </div>
        </div>

        <div class="btn-crud">
            <li class="btn-list">
                <ul class="btn-add">
                    <i class="bi bi-file-earmark-plus"></i>
                    <button>Adicionar tarefas</button>
                </ul>

                <ul class="btn-delete">
                    <i class="bi bi-trash"></i>
                    <button>Remover tarefas</button>
                </ul>
                <ul class="btn-edit">
                    <i class="bi bi-pencil-fill"></i>
                    <button>Editar tarefas</button>
                </ul>
            </li>
        </div>
    </div>



    <script src="./home.js"></script>
    <script src="./calendario.js"></script>
</body>

</html>