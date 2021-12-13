<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/ajuda.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ajuda</title>

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
        <span class="dashboard">Ajuda</span>
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

    @if(10>5)
    <div class="home-content">

      <main>
          <section>
              <div class="activity-grid">
                  <div class="activity-card">
                      <h3>Fale conosco</h3>
                        <p>Para ficar ainda mais informado sobre nós, utilize os canais de atendimento abaixo:</p>
                        <div class="canais">
				                <p>Endereço eletrônico: atendimentos@organizer.com.br</p>
                        <p>Instagram: @organizer.oficial</p>
                        <p>Whatsapp: (84) 996832949</p>
                        <p>Telegram: (84) 996832405</p>
                        <p>Twitter: https://twitter.com/organizer</p>
                        <p>Facebook: https://www.facebook.com/organizer</p>
                        <p></p>
                        </div>
                  </div>

            
        </section>
    </main>

   </div>
   @endif


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
