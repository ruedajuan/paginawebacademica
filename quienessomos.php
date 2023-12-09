<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsquienessomos.css" />
    <link rel="stylesheet" href="stylequienessomos.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="QUINES-SOMOS">
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
          <img class="ellipse" src="img/ellipseQ-4.png" />
        </div>
        <div class="overlap">
          <img class="img" src="img/ellipseQ-5.png" />
          <div class="NIVEL"><div class="text-wrapper">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-wrapper">
            <p class="p">¡ES MOMENTO DE ESTUDIAR Y EXPLORAR TU POTENCIAL!</p>
          </div>
          <div class="NIVEL-2"><div class="NIVEL-3">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS"></div>
          <div class="LINEAS-2"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="overlap-2">
          <img class="rectangle-2" src="img/rectangleQ-25.png" />
          <div class="rectangle-3"></div>
          <div class="text-wrapper-2">QUIÉNES SOMOS</div>
          <div class="DESCRIPCIN-NIVEL">
            <p class="nuestro-nivel">
              Bienvenidos al Centro Educativo Educar para Transformar, un lugar donde el aprendizaje y el crecimiento se
              entrelazan para dar forma a un futuro brillante para nuestros estudiantes. Con una tradición de excelencia
              en educación que abarca décadas, nos enorgullece ser una institución líder en la formación integral de
              niños y adolescentes desde la etapa de educación inicial hasta la secundaria.
            </p>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="LINEAS-4"></div>
        <div class="LINEAS-5"></div>
        <div class="NIVEL-4"><div class="NIVEL-5">NUESTRO OBJETIVO</div></div>
        <div class="NIVEL-6"><div class="NIVEL-5">NUESTRO ENFOQUE</div></div>
        <div class="NIVEL-7"><div class="NIVEL-8">NUESTRA COMUNIDAD EDUCATIVA</div></div>
        <div class="nuestro-nivel-wrapper">
          <p class="nuestro-nivel-2">
            Nuestra misión es nutrir el potencial de cada estudiante para que puedan alcanzar sus sueños y metas.
            Creemos en proporcionar una educación de calidad que no solo se centra en el desarrollo académico, sino
            también en el desarrollo social, emocional y ético de nuestros alumnos. Buscamos inspirar la curiosidad, la
            creatividad y el amor por el aprendizaje a lo largo de toda la vida.
          </p>
        </div>
        <div class="DESCRIPCIN-NIVEL-2">
          <p class="nuestro-nivel-2">
            Reconocemos que la educación no se limita al aula. Promovemos un enfoque holístico que incluye el desarrollo
            de habilidades sociales, emocionales y ciudadanas. Fomentamos valores como la responsabilidad, la empatía y
            el respeto, que son fundamentales para la formación de ciudadanos comprometidos y éticos.
          </p>
        </div>
        <div class="DESCRIPCIN-NIVEL-3">
          <p class="nuestro-nivel-2">
            En nuestro centro educativo, valoramos la participación activa de las familias en el proceso educativo.
            Creemos en una colaboración estrecha entre padres, maestros y estudiantes para garantizar un ambiente de
            aprendizaje enriquecedor. Juntos, construimos una comunidad educativa que apoya y motiva a nuestros alumnos
            a alcanzar su máximo potencial.
          </p>
        </div>
        <img class="rectangle-4" src="img/rectangleQ-31.png" />
      </div>
    </div>
  </body>
</html>
