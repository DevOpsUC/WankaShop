

  <div >
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo_w.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index_dueno.php">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Locales</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                <a class="dropdown-item" href="registrar_local.php">Registra tu Local</a>
                <a class="dropdown-item" href="#">Editar local </a>
              
                
              </div>
            </li>



            
            <li class="nav-item active">
              <a class="nav-link" href="">Reporte de locales <span class="sr-only">(current)</span></a>
            </li>






 
<li class="nav-item active">
              <a class="nav-link" href="">Guia de Uso <span class="sr-only">(current)</span></a>
            </li>



<li class="nav-item active">
              <a class="nav-link" href="">Ultimas Noticias <span class="sr-only">(current)</span></a>
            </li>



          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar local</button>
             <br>
  <br>
  
 <div class="btn-group ">
      <button  type="button" class="btn btn-success dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Bienvenido: <?php echo $_SESSION['usuario'] ?>
  </button>
  

  <div class="dropdown-menu">
    <a class="dropdown-item" href="">Editar Cuenta</a>
    <a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesión</a>
    
    
  </div>
</div>
          </form>

         
</ul>
         

        </div>

      </nav>

    </div>
