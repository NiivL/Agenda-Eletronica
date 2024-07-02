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
    <link rel="stylesheet" href="../styles/formularioatividade.css">
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
                    <button onclick="Mudarestado('div_form')">Adicionar tarefas</button>
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

        <div class="form-container" id="div_form" hidden>
            <form action="connHome.php" method="POST">
                <div class="form-group">
                    <!-- <label for="subject">Assunto</label> -->
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <!-- <label for="start-time">Hora de Início</label> -->
                    <input type="time" id="start-date" name="start-time" required>
                </div>
                <div class="form-group">
                    <!-- <label for="end-time">Hora do Final</label> -->
                    <input type="time" id="end-time" name="end-time" required>
                </div>
                <div class="form-group">
                    <!-- <label for="description">Descrição</label> -->
                    <textarea id="description" name="descricao" rows="4" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-save">Salvar</button>
                    <button type="button" class="btn-cancel" onclick="window.location.reload();">Cancelar</button>
                </div>
            </form>
        </div>
    </div>


    </div>




    <script src="formularioAtividade.js"></script>
    <script src="./home.js"></script>
    <script src="./calendario.js"></script>
</body>

</html>