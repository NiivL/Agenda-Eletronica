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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                <span class="mes-anterior">30
                    <button class="btn-showform" ><i class="bi bi-file-earmark-plus"></i></button>
                </span>
                <span class="mes-anterior">31
                    <button class="btn-showform" ><i class="bi bi-file-earmark-plus"></i></button>
                </span>
                <span>01
                    <button type="submit" class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button>
                    <button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>02
                    <button value="2" class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>03
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>04
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')""><i class="bi bi-book"></i></i></button>
                </span>
                <span>05
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')""><i class="bi bi-book"></i></i></button>
                </span>
                <span>06
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>07
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>08
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>09
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>10
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>11
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>12
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>13
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>14
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>15
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>16
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>17
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>18
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>19
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>20
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>21
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>22
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>23
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>24
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>25
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>26
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>27
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>28
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>29
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>30
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
                <span>31
                    <button class="btn-showform" onclick="Mudarestado('div_form')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="fetchAssuntos('result-box')"><i class="bi bi-book"></i></i></button>
                </span>
            </div>
        </div>



        <div class="btn-crud">

            <li class="btn-list">
                <ul class="btn-add">
                    <i class="bi bi-file-earmark-plus"></i>
                    <button onclick="Mudarestado('div_form')">Adicionar tarefas</button>
                </ul>

                <ul class="btn-delete">
                    <form action="removerlinha.php" method="POST">
                        <i class="bi bi-trash"></i>
                        <button>Remover tarefas</button>
                    </form>
                </ul>
                <ul class="btn-edit">
                    <i class="bi bi-pencil-fill"></i>
                    <button>Editar tarefas</button>
                </ul>
                <ul class="btn-edit">
                    <i class="bi bi-book"></i>
                    <button onclick="fetchAssuntos('result-box')">Mostrar Tarefas</button>
                </ul>
            </li>
        </div>

        <div class="form-container" id="div_form" hidden>
            <form action="adicionaratividade.php" method="POST">
                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Data de Início</label>
                    <input type="date" id="start-date" name="start-date" required>
                </div>
                <div class="form-group">
                    <label for="start-time">Hora de Início</label>
                    <input type="time" id="start-time" name="start-time" required>
                </div>
                <div class="form-group">
                    <label for="end-date">Data do Final</label>
                    <input type="date" id="end-date" name="end-date" required>
                </div>
                <div class="form-group">
                    <label for="end-time">Data do Final</label>
                    <input type="time" id="end-time" name="end-time" required>
                </div>
                <div class="form-group">
                    <select name="select-tatus" id="select-status">
                        <option value="Pendente" selected>Pendente</option>
                        <option value="Concluida">Concluída</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea id="description" name="descricao" rows="4" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-save">Salvar</button>
                    <button type="button" class="btn-cancel" onclick="window.location.reload();">Cancelar</button>
                </div>
            </form>
        </div>

        <div class="info-atividade" id="result-box" hidden>
            <div id="result"></div>
        </div>

    </div>


    <script src="formularioAtividade.js"></script>
    <script src="./home.js"></script>
    <!-- <script src="./calendario.js"></script> -->
    <script src="./mostrarassuntos.js"></script>
</body>

</html>