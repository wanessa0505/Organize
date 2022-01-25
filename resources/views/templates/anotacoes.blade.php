<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/anotacoes.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anotações</title>

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
        <span class="dashboard">Notas</span>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif
      </div>


      <div class="home-content">

        <main>

          <section class="recent">

            <div class="button">
              <a href="{{ route('add-anotacao-create') }}">
                Adicionar anotação</a>
            </div>


            <div class="activity-grid">
              <div class="activity-card">
                <h3>Veja suas anotações</h3>

                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Opções</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($notas as $notas)
                      <tr>
                        <td>{{$notas->titulo}}</td>
                        <td>{{$notas->descricao}}</td>
                        <td>
                          <button type="submit">
                            <a href="{{route('anotacao-show', $notas->id)}}">
                              <span>
                                <i class="material-icons">visibility</i>
                              </span>
                            </a>
                          </button>
                          <button type="submit">
                            <a href="{{route('anotacao-edit', $notas->id)}}">
                              <span>
                                <i class="material-icons">edit</i>
                              </span>
                            </a>
                          </button>
                          <form action="{{ route('anotacao-delete', $notas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                              <span>
                                <i class="material-icons">delete_forever</i>
                              </span>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table>

                </div>

              </div>

            </div>

          </section>
        </main>


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