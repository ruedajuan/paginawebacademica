<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsGF.css" />
    <link rel="stylesheet" href="styleGF.css" />
  </head>
  <body>
  <?php
      session_start();
      ?>
    <div class="GALERA-DE-IMGENES">
      <div class="div">
        <div class="overlap-group">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO</a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL</a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE </a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO </a></div></div>
          <div class="TITULOS-MEN-4"><div class="texto-men">
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
          <img class="ellipse" src="img/ellipseGF-4.png" />
        </div>
        <div class="LINEAS"></div>
        <div class="NIVEL"><div class="text-wrapper">GALERÍA DE IMÁGENES</div></div>
        <img class="img" src="img/rectangleGF-33.png" />
        <img class="rectangle-2" src="img/rectangleGF-37.png" />
        <img class="rectangle-3" src="img/rectangleGF-35.png" />
        <img class="rectangle-4" src="img/rectangleGF-38.png" />
        <img class="rectangle-5" src="img/rectangleGF-34.png" />
        <img class="rectangle-6" src="img/rectangleGF-39.png" />
        <img class="rectangle-7" src="img/rectangleGF-36.png" />
        <img class="rectangle-8" src="img/rectangleGF-40.png" />
        <div class="overlap">
          <img class="ellipse-2" src="img/ellipseGF-5.png" />
          <div class="NIVEL-wrapper"><div class="NIVEL-2">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-3"><div class="NIVEL-4">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR Y EXPLORAR TU POTENCIAL!</p>
        </div>
      </div>
    </div>
  </body>
</html>
