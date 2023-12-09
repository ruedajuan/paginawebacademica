<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsinscripciones.css" />
    <link rel="stylesheet" href="styleinscripciones.css" />
  </head>
  <body>
     <?php
    session_start();
    ?>
    <div class="INSCRIPCIONES">
      <div class="div">
        <div class="overlap-group">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco"> INICIO</a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL </a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE </a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO </a></div></div>
          <div class="TITULOS-MEN-4"><div class="texto-men"><a href="login.html" class="enlace_blanco">
          <?php
            
            if(isset($_SESSION["usuario"])){
                echo $_SESSION["usuario"] . "<br>"; //nombre admin
                echo '<a href="centroedu_cerrarsesion.php" class="enlace_blanco2">Cerrar sesión</a>';
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
          <div class="NIVEL-wrapper">
            <p class="p">¡ES MOMENTO DE ESTUDIAR Y EXPLORAR TU POTENCIAL!</p>
          </div>
          <div class="NIVEL-2"><div class="NIVEL-3">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS"></div>
          <div class="LINEAS-2"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="LINEAS-4"></div>
        <div class="LINEAS-5"></div>
        <div class="NIVEL-4"><div class="NIVEL-5">CONSULTA DE INSCRIPCIONES</div></div>
        <div class="NIVEL-6"><p class="NIVEL-7">INFORMACIÓN DEL PADRE, MADRE O TUTOR</p></div>
        <div class="NIVEL-8"><div class="NIVEL-7">INFORMACIÓN DEL ALUMNO/A</div></div>

        <form action="centroedu_inscribe.php" method="post"> <!--Formulario de cuenta-->
        <div class="NIVEL-9"><label class="NIVEL-10">Nombre <br>
        <input type="text" name="nombrepadre" required></label></div>
        <div class="NIVEL-11"><label class="NIVEL-10">Nombre <br>
        <input type="text" name="nombrealumno" required></label></div>
        <div class="NIVEL-12"><label class="NIVEL-10">Domicilio <br>
        <input type="text" name="domiciliopadre" required></label></div>
        <div class="NIVEL-13"><label class="NIVEL-10">Edad <br>
        <input type="text" name="edad" required></label></div>
        <div class="NIVEL-14"><label class="NIVEL-10">Domicilio <br>
        <input type="text" name="domicilio" required></label></div>

        <div class="NIVEL-15"><label class="NIVEL-16">Consulta y/o información adicional </label><br><br>
        <textarea class="miTextarea" name="consulta" maxlength="1000" required rows="4" cols="50"></textarea>
        </div>

        <div class="NIVEL-17"><label class="NIVEL-10">Año lectivo <br>
        <input type="text" name="añolectivo" required></label></div>
        <div class="NIVEL-18"><label class="NIVEL-10">Email <br>
        <input type="email" name="email2" required></label></div>
        <div class="NIVEL-19"><label class="NIVEL-10">Nivel escolar <br>
        <input type="email" name="nivelescolar" required></label></div>
        <div class="NIVEL-20"><label class="NIVEL-10">Apellido <br>
        <input type="email" name="apellidopadre" required></label></div>
        <div class="NIVEL-21"><label class="NIVEL-10">Apellido <br>
        <input type="email" name="apellido" required></label></div>
        <div class="BOTN">
          <div class="frame"><input class="VER-m-s" type="submit" name="enviar" value="ENVIAR"></div>
        </div>
        </form>
        <div class="DESCRIPCIN-NIVEL">
          <p class="nuestro-nivel">
            Nuestro departamento de admisiones se comunicará con la familia para coordinar fecha y hora de la
            entrevista.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
