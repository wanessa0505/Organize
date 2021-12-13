<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/tarefas.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tarefas</title>

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
        <a href="{{ route('usuario') }}">
            <i class='bx bx-user'></i>
            <span class="links_name">Usuário</span>
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
        <a href="{{ route('welcome') }}">
            <i class='bx bx-log-out' id="log_out" ></i>
            <span class="links_name">Sair</span>
          </a>
        </li>
      </ul>
  </div>
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Tarefas</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Buscar...">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details">
        <img src="/img/profile.png" alt="">
        <a href="{{ route('usuario') }}">
          <span class="admin_name">Murilo Alencar</span>
        </a>
          <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
      <div class="box">
          <div class="right-side">
            <div class="box-topic">Adicionar</div>
            <div class="number">tarefa</div>
            <div class="icon2"><i class='bx bx-message-square-add' ></i></div>
            <div class="card-footer">
            <a href="{{ route('addtarefa') }}">Clique aqui</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Em progresso</div>
            <div class="number">Total: 4</div>
              <div class="icon4"><i class='bx bx-check'></i></div>
            <div class="card-footer">
                <a href="">Ver tudo</a>
            </div>
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Pendentes</div>
            <div class="number">Total: 2</div>
              <div class="icon3"><i class='bx bx-error-circle'></i></div>
            <div class="card-footer">
                <a href="">Ver tudo</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Concluídas</div>
            <div class="number">Total: 10</div>
            <div class="icon"><i class='bx bx-check-double'></i></div>
            <div class="card-footer">
                <a href="">Ver tudo</a>
            </div>
          </div>
        </div>
      </div>

      <main>

          <section class="recent">
              <div class="activity-grid">
                  <div class="activity-card">
                      <h3>Tarefas recentes</h3>

                      <div class="table-responsive">

                          <table>
                              <thead>
                                  <tr>
                                      <th>Nome</th>
                                      <th>Data inicial</th>
                                      <th>Data final</th>
                                      <th>Status</th>
                                      <th>Visualizar</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Estudar química</td>
                                      <td>01 Dez, 2021</td>
                                      <td>28 Dez, 2021</td>
                                      <td>
                                          <span class="badge success">Concluída</span>
                                      </td>
                                      <td>
                                          <span class="badge success">Ver</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Design de telas</td>
                                      <td>04 Dez, 2021</td>
                                      <td>25 Nov, 2021</td>
                                      <td>
                                          <span class="badge warning">Em processo</span>
                                      </td>
                                      <td>
                                          <span class="badge success">Ver</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Formatar PC</td>
                                      <td>27 Nov, 2021</td>
                                      <td>23 Nov, 2021</td>
                                      <td>
                                          <span class="badge success">Concluída</span>
                                      </td>
                                      <td>
                                          <span class="badge success">Ver</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Ajustes do documento</td>
                                      <td>16 Nov, 2021</td>
                                      <td>28 Nov, 2021</td>
                                      <td>
                                          <span class="badge warning">Em processo</span>
                                      </td>
                                      <td>
                                          <span class="badge success">Ver</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Revisão do TCC</td>
                                      <td>13 Nov, 2021</td>
                                      <td>22 Nov, 2021</td>
                                      <td>
                                          <span class="badge success">Concluída</span>
                                      </td>
                                      <td>
                                          <span class="badge success">Ver</span>
                                      </td>
                                  </tr>

                              </tbody>

                          </table>
                          <div class="button">
                            <a href="#">Ver tudo</a>
                          </div>
                      </div>
                  </div>

      </main>


          </div>

  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
   sidebar.classList.toggle("active");
   if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }else
   sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
