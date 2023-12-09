<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsregistrarse.css" />
    <link rel="stylesheet" href="styleregistrarse.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="REGISTRARME">
      <div class="div">
        <div class="overlap-group">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO</a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL</a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE</a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO</a></div></div>
          <div class="TITULOS-MEN-4"><div class="texto-men">
          <?php
            
            if(isset($_SESSION["usuario"])){
                echo $_SESSION["usuario"] . "<br>"; //nombre admin
                echo '<a href="centroedu_cerrarsesion.php" class="enlace_blanco3">Cerrar sesión</a>';
            }
            else{
                echo '<a href="login.html" class="enlace_blanco">LOGIN</a>'; //vuelve al login
      
            }
            ?>
          </div></div>
          <img class="ellipse" src="img/ellipse-4.png" />
        </div>
        <div class="overlap">
          <img class="img" src="img/ellipse-5.png" />
          <div class="NIVEL"><div class="text-wrapper">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="frame">
            <div class="NIVEL-wrapper">
              <p class="p">¡ES MOMENTO DE ESTUDIAR Y EXPLORAR TU POTENCIAL!</p>
            </div>
          </div>
          <div class="NIVEL-2"><div class="NIVEL-3">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS"></div>
          <div class="LINEAS-2"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="NIVEL-12"><div class="NIVEL-13">CREAR UNA CUENTA</div></div>
        <form action="centroedu_agrega.php" method="post"> <!--Formulario de cuenta-->
          <div class="NIVEL-4"><label class="NIVEL-5">Nombre<br><br>
          <input type="text" name="nombre" required></label></div>
          <div class="NIVEL-6"><label class="NIVEL-5">Apellido<br><br>
          <input type="text" name="apellido" required></label></div>
          <div class="NIVEL-7"><label class="NIVEL-5">Email<br><br>
            <input type="email" name="email" required></label></div>
            <div class="NIVEL-8"><label for="rol" class="NIVEL-5">Rol<br><br>
              <select name="rol"  required>
                <option>Estudiante</option>
                <option>Docente</option>
                <option>Padre/Madre/Tutor</option>
                <option>Personal</option>
                <option>Autoridad</option>
            </select></label></div>
            <div class="NIVEL-9"><label class="NIVEL-5">Nombre de usuario<br><br>
              <input type="text" name="nombredeusuario" required></label></div>
              <div class="NIVEL-10"><label class="NIVEL-5">Contraseña<br><br>
                <input type="password" name="password" required></label></div>
        <div class="BOTN">
          <div class="VER-m-s-wrapper"><input class="VER-m-s" type="submit" name="registrarme" value="REGISTRARME"></div>
        </div>

      </div>
    </div>
  </form>
  </body>
</html>
