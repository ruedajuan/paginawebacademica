<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsbienestar.css" />
    <link rel="stylesheet" href="stylebienestar.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="BIENESTAR">
      <div class="div">
        <div class="overlap">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco"> QUIÉNES SOMOS </a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO </a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco"> BIENESTAR ESTUDIANTIL </a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE </a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco"> EMPLEO </a></div></div>
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
          <img class="ellipse" src="img/ellipse-4.png" />
        </div>
        <div class="overlap-group">
          <img class="img" src="img/ellipseB-5-1.png" />
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
        <div class="DESCRIPCIN-NIVEL">
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span"
                >La misión de nuestro departamento de Bienestar Estudiantil es crear un ambiente en el que cada
                estudiante se sienta apoyado y valorado para alcanzar su máximo potencial. Creemos que el bienestar
                estudiantil es esencial para el éxito académico y personal, y estamos comprometidos en proporcionar los
                recursos y el apoyo necesarios para que nuestros estudiantes prosperen en todas las áreas de sus
                vidas.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="span"
                >El bienestar de nuestros estudiantes es una prioridad, y trabajamos incansablemente para asegurar que
                cada uno de ellos tenga la oportunidad de crecer, aprender y alcanzar sus sueños en un entorno seguro y
                enriquecedor.</span
              >
            </p>
          </div>
        </div>
        <div class="overlap-2">
          <img class="rectangle-2" src="img/rectangleB-25.png" />
          <div class="rectangle-3"></div>
          <div class="EDUCAR-PARA">
            <div class="EDUCAR-PARA-2">BIENESTAR<br />ESTUDIANTIL</div>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="LINEAS-4"></div>
        <div class="NIVEL-4"><div class="NIVEL-5">NUESTRA MISIÓN</div></div>
        <div class="NIVEL-6"><div class="NIVEL-7">NUESTROS ESPACIOS Y SERVICIOS</div></div>
        <div class="FOTO-NIVEL"></div>
        <div class="overlap-3">
          <div class="NIVEL-8"><div class="NIVEL-9">DEPORTES</div></div>
          <div class="nuestro-nivel-wrapper">
            <p class="nuestro-nivel">
              Promovemos la práctica de distintas disciplinas deportivas como un modo de complementar la formación
              académica. Las prácticas deportivas y recreativas se realizan en instalaciones propias del Centro
              Educativo: atletismo, natación, fútbol, artes marciales, vóleibol, danza, básquet y ajedrez.
            </p>
          </div>
        </div>
        <div class="overlap-4">
          <div class="NIVEL-8"><div class="NIVEL-9">SERVICIO DE TRASLADO</div></div>
          <div class="nuestro-nivel-wrapper">
            <p class="nuestro-nivel">
              Ofrecemos un servicio de traslado en micro Escolar que busca proporcionar una solución conveniente y
              segura para el transporte de los estudiantes hacia y desde la escuela.
            </p>
          </div>
        </div>
        <div class="overlap-group-2">
          <div class="NIVEL-8"><div class="NIVEL-9">IDIOMAS</div></div>
          <div class="nuestro-nivel-wrapper">
            <p class="nuestro-nivel">
              Dictamos clases de idiomas que se enfocan en el aprendizaje del portugués e inglés,
              cuyo&nbsp;&nbsp;objetivo es equipar a nuestros estudiantes con las habilidades lingüísticas y culturales
              necesarias para tener éxito en un mundo diverso y globalizado.
            </p>
          </div>
        </div>
        <div class="overlap-5">
          <div class="NIVEL-8"><div class="NIVEL-9">COMEDOR</div></div>
          <div class="DESCRIPCIN-NIVEL-2">
            <p class="nuestro-nivel">
              El Servicio de comedor estudiantil es una parte esencial de esta misión, ya que no solo se trata de
              satisfacer las necesidades nutricionales de nuestros alumnos, sino también de fomentar valores como la
              alimentación saludable, la socialización y el respeto por los demás.
            </p>
          </div>
        </div>
        <div class="overlap-6">
          <div class="NIVEL-8"><div class="NIVEL-9">ENFERMERÍA</div></div>
          <div class="DESCRIPCIN-NIVEL-2">
            <p class="nuestro-nivel">
              Nos comprometemos a proporcionar atención médica de calidad, promover la salud y el bienestar, y colaborar
              con las familias para garantizar que cada estudiante esté en las mejores condiciones para tener éxito
              académica y personalmente.
            </p>
          </div>
        </div>
        <div class="overlap-7">
          <div class="NIVEL-8"><div class="NIVEL-9">APOYO ESTUDIANTIL</div></div>
          <div class="DESCRIPCIN-NIVEL-2">
            <p class="nuestro-nivel">
              Nuestro servicio de apoyo estudiantil tiene como objetivo proporcionar a cada estudiante las herramientas
              y el apoyo necesarios para superar obstáculos y alcanzar su máximo potencial académico y personal.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
