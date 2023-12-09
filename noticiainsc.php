<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsNI.css" />
    <link rel="stylesheet" href="styleNI.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="NOTICIAS">
      <div class="div">
        <div class="overlap">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO</a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL</a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE </a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO </a></div></div>
          <div class="TITULOS-MEN-4"><div class="texto-men"><a href="login.php" class="enlace_blanco">
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
          <img class="ellipse" src="img/ellipseNI-4.png" />
        </div>
        <div class="LINEAS"></div>
        <div class="NIVEL"><div class="text-wrapper">Julio, 2023</div></div>
        <div class="DESCRIPCIN-NIVEL">
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span">Se complace en anunciar la </span>
              <span class="text-wrapper-2">apertura de las inscripciones para el ciclo lectivo 2024. </span>
              <span class="span"
                >Este emocionante momento marca el inicio de un nuevo año académico lleno de oportunidades de
                aprendizaje y crecimiento para nuestros estudiantes.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >El proceso de inscripción está diseñado para brindar a las familias la flexibilidad y facilidad
                necesarias para asegurar un lugar en nuestra institución educativa de renombre. Estamos comprometidos en
                ofrecer una educación de calidad que abarca desde la educación inicial hasta la secundaria, respaldada
                por docentes altamente calificados y un enfoque pedagógico centrado en el desarrollo integral de
                nuestros alumnos.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >Creemos en la excelencia académica, la promoción de valores éticos y ciudadanos, y la formación de
                líderes del mañana. Nuestro compromiso con la diversidad e inclusión, la promoción de la creatividad y
                la colaboración enriquecerá la experiencia educativa de su hijo o hija.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >Aproveche esta oportunidad para unirse a nuestra comunidad educativa y ser parte de un viaje educativo
                excepcional. Las inscripciones están abiertas a partir de julio 2023, y nuestro equipo de admisiones
                está listo para responder a sus preguntas y brindarle orientación durante todo el proceso.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >Para obtener más detalles sobre cómo inscribirse, visite nuestra página web o póngase en contacto con
                nuestro equipo de admisiones.</span
              >
            </p>
          </div>
        </div>
        <div class="overlap-group">
          <img class="img" src="img/ellipseNI-5.png" />
          <div class="NIVEL-wrapper"><div class="NIVEL-2">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-3"><div class="NIVEL-4">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <div class="overlap-2">
            <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
            <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
          </div>
        </div>
        <img class="rectangle-2" src="img/rectangleNI-32.png" />
        <div class="overlap-3">
          <div class="text-wrapper-3">Inscripciones abiertas 2024</div>
          <div class="text-wrapper-3">Inscripciones abiertas 2024</div>
        </div>
      </div>
    </div>
  </body>
</html>
