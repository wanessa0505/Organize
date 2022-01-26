<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/calendario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="/js/calendario.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>

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
                <span class="dashboard">Calendário</span>
            </div>
        </nav>

        <h1>Calendário Mensal de atividades</h1>


        <div class="conteudo">
            <div class="calendario">
                <header>
                    <h2 id="mes">Abril</h2>
                    <a class="btn-ant" id="btn-ant"> >
                    </a>
                    <a class="btn-pro" id="btn-prev">></a>
                </header>
                <br>
                <table>
                    <thead>
                        <tr>
                            <td>Dom</td>
                            <td>Seg</td>
                            <td>Ter</td>
                            <td>Qua</td>
                            <td>Qui</td>
                            <td>Sex</td>
                            <td>Sab</td>
                        </tr>
                    </thead>
                    <tbody id="dias">
                        <tr>
                            <td class="mes-anterior">1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td class="proximo-mes">7</td>
                        </tr>
                    </tbody>
                </table>
                <footer>
                    <h2 id="ano">2020</h2>
                </footer>
            </div>
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
        </script>

</body>

</html>