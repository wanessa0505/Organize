<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/add-tarefa.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar tarefa</title>

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
        <span class="dashboard">Adicionar Tarefa</span>
    </nav>

    <div class="home-content">

      <main>
        <section>
          <div class="activity-grid">
            <div class="activity-card">
              <h3>Bloco de tarefas</h3>
              <p>Para criar uma nova tarefa em seu planner, basta apenas preencher os campos abaixo e selecionar o botão "criar."</p>

              <div class="right-side">
                <form action="{{ route('add-tarefa-store') }}" method="POST">
                  @csrf
                  <div class="input-box">
                    <input type="text" id="titulo" name="titulo" placeholder="Título da tarefa">
                  </div>
                  <div class="input-box">
                    <input type="date" id="datainicial" name="datainicial" placeholder="Data da entrega. Ex.: 22 Nov, 2021">
                  </div>
                  <div class="input-box">
                    <input type="date" id="dataconclusao" name="dataconclusao" placeholder="Data da entrega. Ex.: 22 Nov, 2021">
                  </div>
                  <div class="input-box message-box">
                    <textarea class="textarea" id="descricao" name="descricao" placeholder="Descrição da tarefa"></textarea> <br>
                  </div>
                  <div class="input-box">
                    <label for="title" Qual o status de realização da atividade?></label>
                    <select name="status" id="status" class="form-control">
                      <option>Em progresso</option>
                      <option>Pendente</option>
                      <option>Concluida</option>
                    </select>
                  </div>
                  <div class="button">
                    <input type="submit" class="btn btn-primary" value="Criar tarefa">
                  </div>
                </form>
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