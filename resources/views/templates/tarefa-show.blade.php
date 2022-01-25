<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/add-tarefa.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tarefa</title>

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-collection'></i>
            <span class="logo_name">Organizer</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('tarefas') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('anotacoes') }}">
                    <i class='bx bx-note'></i>
                    <span class="links_name">Notas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('calendario') }}">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Calendário</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ajuda') }}">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Ajuda</span>
                </a>
            </li>

            <li class="log_out">
                <a href="{{ route('index') }}">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="links_name">Sair</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Ver Tarefa</span>
        </nav>

        <div class="home-content">

            <main>
                <section>
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>Sua tarefa</h3>

                            <div class="right-side">
                                <div class="input-box">
                                    <input type="text" id="titulo" name="titulo" value="{{$tarefa->titulo}}">
                                </div>
                                <div class="input-box">
                                    <input type="date" id="datainicial" name="datainicial" value="{{$tarefa->datainicial}}">
                                </div>
                                <div class="input-box">
                                    <input type="date" id="dataconclusao" name="dataconclusao" value="{{$tarefa->dataconclusao}}">
                                </div>
                                <div class="input-box message-box">
                                    <textarea class="textarea" id="descricao" name="descricao"> {{$tarefa->descricao}}</textarea> <br>
                                </div>
                                <div class="input-box">
                                    <select name="status" id="status" class="form-control">
                                        <option>{{$tarefa->status}}</option>
                                        <option>Em progresso</option>
                                        <option>Pendente</option>
                                        <option>Concluida</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

        </div>


        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }

            function charCount() {
                var element = document.getElementById('textarea').value.length;
                document.getElementById('textarea_count').innerHTML = element + "/150 (Max Character 150).";
            }
        </script>

</body>

</html>