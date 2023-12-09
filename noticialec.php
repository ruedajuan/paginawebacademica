<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalslec.css" />
    <link rel="stylesheet" href="stylelec.css" />
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
          <img class="ellipse" src="img/ellipseNL-4.png" />
        </div>
        <div class="LINEAS"></div>
        <div class="NIVEL"><div class="text-wrapper">Julio, 2023</div></div>
        <div class="DESCRIPCIN-NIVEL">
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span"
                >El Club de Lectura es una iniciativa que busca enriquecer la experiencia educativa de nuestros alumnos,
                promoviendo la lectura como una herramienta fundamental para el desarrollo intelectual y
                emocional.</span
              >
              <span class="text-wrapper-2">
                Creemos que los libros tienen el poder de abrir puertas a mundos infinitos y de inspirar el pensamiento
                crítico y la creatividad.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >Este club está abierto a estudiantes de todos los niveles, desde educación inicial hasta
                secundaria,</span
              >
              <span class="text-wrapper-2">
                y está diseñado para adaptarse a diferentes edades e intereses. Los participantes tendrán la oportunidad
                de explorar una variedad de géneros literarios, discutir libros fascinantes y compartir sus propias
                perspectivas en un ambiente enriquecedor y colaborativo.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >Nuestro objetivo es nutrir una comunidad de lectores apasionados, alentando la empatía, el pensamiento
                crítico y la expresión personal a través de la literatura. El Club de Lectura se reunirá regularmente,
                proporcionando un espacio donde los estudiantes pueden interactuar con sus compañeros y docentes
                mientras descubren nuevas historias y amplían sus horizontes.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >Si su hijo o hija tiene interés en unirse al Club de Lectura, lo invitamos a ponerse en contacto con
                nosotros a través de nuestro correo electrónico educarparatransformar@gmail.com o visitar nuestra página
                web para obtener más detalles sobre las próximas reuniones y cómo participar.</span
              >
            </p>
          </div>
        </div>
        <div class="overlap">
          <img class="img" src="img/ellipseNL-5.png" />
          <div class="NIVEL-wrapper"><div class="NIVEL-2">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-3"><div class="NIVEL-4">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
        </div>
        <img class="rectangle-2" src="img/rectangleNL-32.png" />
        <div class="text-wrapper-3">Club de lectura</div>
      </div>
    </div>
  </body>
</html>
