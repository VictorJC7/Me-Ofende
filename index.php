<!DOCTYPE html>
<?php require_once ('src/header.php');
setTile("Inicio");
?>
  <body>
    <script type="text/javascript">
    </script>
    <div class="cabecero">
      <!-- Abrir el menú -->
      <div class="menuDes">
        <a onclick="openNav()" href="#" class="botonMenu"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </div>
      <!-- Titulo Centro -->
      <div class="titulos">
        <h1>MeOfende.com</h1>
        <h3>La web de las ofensas</h3>
      </div>

      <div class="usuarios">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-arrow-up"></i> Up</a></li>
            <li><a href="#"><i class="icon-arrow-down"></i> Down</a></li>
            <li><a href="#"><i class="icon-arrow-left"></i> Left</a></li>
            <li><a href="#"><i class="icon-arrow-right"></i> Right</a></li>
          </ul>
        </div>

      </div>

      <!-- Menú desplegable -->
      <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="#">Ofensas</a>
          <a href="#">Enviar ofensa</a>
          <a href="#">Mejores del mes</a>
        </div>
      </div>
      <!-- fin menú desplegable -->


    </div>
    <div class="pie fixed-bottom">
      Esto es el pie
    </div>
  </body>
</html>
