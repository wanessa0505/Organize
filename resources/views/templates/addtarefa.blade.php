<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/anotacoes.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
        <a href="{{ route('index') }}">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
        <a href="{{ route('index') }}">
            <i class='bx bx-user'></i>
            <span class="links_name">Usuário</span>
          </a>
        </li>
        <li>
        <a href="{{ route('index') }}">
            <i class='bx bx-note'></i>
            <span class="links_name">Notas</span>
          </a>
        </li>
        <li>
          <a href="{{ route('index') }}">
            <i class='bx bx-calendar'></i>
            <span class="links_name">Calendário</span>
          </a>
        </li>
        <li>
        <a href="{{ route('index') }}">
            <i class='bx bx-help-circle'></i>
            <span class="links_name">Ajuda</span>
          </a>
        </li>
       
        <li class="log_out">
        <a href="{{ route('index') }}">
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
        <span class="dashboard">Nova tarefa</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Buscar...">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details">
        <img src="/img/profile.png" alt="">
        <a href="{{ route('index') }}">
          <span class="admin_name">Murilo Alencar</span>
        </a>
          <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content">

      <main>
          <section>
              <div class="activity-grid">
                  <div class="activity-card">
                      <h3>Bloco de tarefas</h3>
                        <p>Para criar uma nova tarefa em seu planner, basta apenas preencher os campos abaixo e selecionar o botão "criar."</p>
                        <div class="right-side">

                            <form action="#">
                              <div class="input-box">
                                <input type="text" placeholder="Título da tarefa">
                              </div>
                              <div class="input-box">
                                <input type="date" placeholder="Data da entrega. Ex.: 22 Nov, 2021">
                              </div>
                              <div class="input-box">
                                <input type="time" placeholder="Hora da entrega. Ex.: 23h:59m">
                              </div>
                              <div class="input-box message-box">
                                <textarea class="textarea" placeholder="Descrição da tarefa"></textarea> <br>
                              </div>
                              <div class="input-box">
                              {{-- <input type="tetx" placeholder="Status"> --}}
                              <select name="" id="">
                                @foreach ($status as $s)
                                    <option value="{{ $s->id }}">{{ $s->status }}</option>
                                @endforeach
                              </select>
                              </div>

                              <div class="button">
                              <a href="{{ route('index') }}">Criar</a>
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
   if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }else
   sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

  function charCount(){
    var element=document.getElementById('textarea').value.length;
    document.getElementById('textarea_count').innerHTML=element+"/150 (Max Character 150).";
  }

 </script>

</body>
</html>
