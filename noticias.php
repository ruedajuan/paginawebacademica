<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsnoticias.css" />
    <link rel="stylesheet" href="stylenoticias.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="NOTICIAS">
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
          <img class="ellipse" src="img/ellipseN-4.png" />
        </div>
        <div class="overlap">
          <img class="img" src="img/ellipse-5.png" />
          <div class="NIVEL"><div class="text-wrapper">EDUCAR PARA TRANSFORMAR</div></div>
          <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
          <div class="NIVEL-wrapper"><div class="NIVEL-2">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS"></div>
          <div class="LINEAS-2"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="NIVEL-3"><div class="NIVEL-4">NOTICIAS</div></div>
        <div class="CARD-NOTICIAS">
          <div class="text-wrapper-2"><a href="juegospa.php" class="enlace_azul">LEER MÁS » </a></div> <!-- Juegos para aprender-->
          <div class="NIVEL-5"><div class="NIVEL-6">¡Juegos para aprender!</div></div>
          <div class="DESCRIPCIN-NIVEL">
            <p class="nuestro-nivel">
              Compartimos las propuestas didácticas de “Juegos para aprender” en donde participarán alumnos de todo el
              nivel inicial.
            </p>
          </div>
        </div>
        <div class="CARD-NOTICIAS-2">
          <div class="text-wrapper-2"><a href="noticiainsc.php" class="enlace_azul">LEER MÁS » </a></div> 
          <div class="NIVEL-5"><div class="NIVEL-6">Inscripciones abiertas 2024</div></div>
          <div class="DESCRIPCIN-NIVEL">
            <p class="nuestro-nivel">
              Este emocionante momento marca el inicio de un nuevo año académico lleno de oportunidades de aprendizaje y
              crecimiento para nuestros estudiantes.
            </p>
          </div>
        </div>
        <div class="CARD-NOTICIAS-3">
          <div class="text-wrapper-2"><a href="noticiademoc.php" class="enlace_azul">LEER MÁS » </a></div>
          <div class="NIVEL-5"><p class="NIVEL-6">40 años de democracia en Argentina</p></div>
          <div class="DESCRIPCIN-NIVEL">
            <p class="nuestro-nivel">
              “La libertad, que es una conquista y no una donación exige una búsqueda permanente”. Paulo Freire.
            </p>
          </div>
        </div>
        <div class="CARD-NOTICIAS-4">
          <div class="text-wrapper-2"><a href="noticialec.php" class="enlace_azul">LEER MÁS » </a></div>
          <div class="NIVEL-5"><div class="NIVEL-6">Club de lectura</div></div>
          <p class="p">
            Anunciamos la apertura de nuestro nuevo Club de Lectura, un espacio dedicado a fomentar el amor por la
            lectura y la exploración literaria.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
