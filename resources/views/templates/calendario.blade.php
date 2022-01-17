<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/calendario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
        <span class="dashboard">Calendário</span>
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

    <h1>Calendário Mensal de atividades</h1> 

    
    <table cellspacing="0" cellpading="0">
        <thead>
            <tr>
                <td colspan="7">Maio 2021</td>
            </tr>
        </thead>
        <tbody>  
        <tr>
            <td>DOM</td>
            <td>SEG</td>
            <td>TER</td>
            <td>QUA</td>
            <td>QUI</td>
            <td>SEX</td>
            <td>SAB</td>
        </tr> 
        <tr>
            <td colspan="5"></td>
            <td>1</td>
            <td>2</td> 
        </tr>
        <tr>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
        </tr>
        <tr>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>    
        </tr>
        <tr>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
        </tr>
        <tr>
            <td>31</td>
            <td colspan="6"></td>  
        </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">21 dias úteis</td>
            </tr>
        </tfoot>

    </table>


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




