<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/add-anotacao.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição da nota</title>

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
                <span class="dashboard">Edição da nota</span>
            </div>
        </nav>

        <div class="home-content">

            <main>
                <section>
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>Edite a anotação</h3>
                            <p>Para editar a nota basta modificar os campos desejados e selecionar o botão "editar"</p>

                            <div class="right-side">
                                <form action="{{route('anotacao-update', $nota->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-box">
                                        <input type="text" id="titulo" name="titulo" value="{{$nota->titulo}}">
                                    </div>

                                    <div class="input-box message-box">
                                        <textarea class="textarea" id="descricao" name="descricao"> {{$nota->descricao}}</textarea> <br>
                                    </div>

                                    <div class="button">
                                        <input type="submit" class="btn btn-primary" value="Editar anotação">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>