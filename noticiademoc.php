<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsdemoc.css" />
    <link rel="stylesheet" href="styledemoc.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="NOTICIAS">
      <div class="div">
        <div class="overlap">
          <div class="menu"><div class="rectangle"></div></div>
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
          <img class="ellipse" src="img/ellipseND-4.png" />
        </div>
        <div class="LINEAS"></div>
        <div class="NIVEL"><div class="text-wrapper">Agosto, 2023</div></div>
        <div class="DESCRIPCIN-NIVEL">
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span"
                >Este año celebramos un hito significativo en la historia de Argentina: 40 años de democracia
                ininterrumpida.
              </span>
              <span class="text-wrapper-2"
                >Por este motivo, queremos unirnos a esta celebración para reflexionar sobre el camino recorrido y
                reafirmar nuestro compromiso con los valores democráticos que son fundamentales para nuestra
                sociedad.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >El 10 de diciembre de 1983 marcó el regreso de la democracia a Argentina después de un período de
                dictadura militar. Desde entonces, hemos experimentado un viaje de avances, desafíos y logros.
              </span>
              <span class="span"
                >La democracia ha sido la base de nuestra convivencia como sociedad, proporcionando un espacio para el
                diálogo, la participación y la diversidad de voces.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >A lo largo de estos 40 años, hemos enfrentado desafíos económicos, sociales y políticos, pero también
                hemos vivido momentos de esperanza y progreso. La democracia nos ha brindado la oportunidad de construir
                un país más inclusivo y equitativo, y nos ha dado la posibilidad de expresar nuestras opiniones y
                visiones de futuro a través del voto y la participación ciudadana.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >Desde nuestro lugar, creemos en la importancia de educar a las generaciones futuras sobre los valores
                democráticos. Fomentamos la enseñanza de la ciudadanía activa, el respeto por los derechos humanos y la
                valoración de la diversidad como parte fundamental de la formación de nuestros estudiantes.<br
              /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >Este aniversario nos recuerda la necesidad de seguir trabajando juntos para fortalecer nuestra
                democracia, garantizar la igualdad de oportunidades para todos y proteger nuestros derechos
                fundamentales. La democracia no es un logro estático, sino un proceso continuo que requiere el
                compromiso de cada uno de nosotros.</span
              >
            </p>
          </div>
        </div>
        <div class="overlap-group">
          <img class="img" src="img/ellipseND-5.png" />
          <div class="NIVEL-wrapper"><div class="NIVEL-2">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-3"><div class="NIVEL-4">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
        </div>
        <img class="rectangle-2" src="img/rectangleND-32.png" />
        <p class="p">40 años de democracia en Argentina</p>
      </div>
    </div>
  </body>
</html>
