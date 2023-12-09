<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsNJ.css" />
    <link rel="stylesheet" href="styleNJ.css" />
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
          <img class="ellipse" src="img/ellipseNJ-4.png" />
        </div>
        <div class="LINEAS"></div>
        <div class="NIVEL"><div class="text-wrapper">Septiembre, 2023</div></div>
        <div class="DESCRIPCIN-NIVEL">
          <p class="nuestro-nivel">
            Estamos encantados de anunciar el emocionante lanzamiento de nuestro nuevo Taller de verano Juegos
            Didácticos para el Nivel Inicial. Este programa innovador tiene como objetivo hacer que el aprendizaje sea
            aún más divertido y efectivo para nuestros estudiantes más jóvenes, combinando la educación y el juego de
            una manera estimulante.<br /><br />El Poder del Juego en la Educación<br />Sabemos que el juego es una
            herramienta poderosa para el aprendizaje y el desarrollo de habilidades en los niños en edad preescolar. Por
            eso, hemos creado un espacio donde el juego se convierte en una experiencia educativa enriquecedora.<br />¿Qué
            Ofrecerá el Taller de Juegos Didácticos?<br />Este emocionante taller brindará a nuestros estudiantes de
            nivel inicial la oportunidad de explorar y aprender a través de una amplia variedad de juegos didácticos
            cuidadosamente seleccionados. Desde rompecabezas y juegos de memoria hasta actividades prácticas y juegos de
            colaboración, cada actividad está diseñada para estimular el desarrollo cognitivo, emocional y social de los
            niños.<br />Beneficios del Taller de Juegos Didácticos:<br />Fomenta el pensamiento lógico y la resolución
            de problemas desde una edad temprana.<br />Mejora la coordinación motora y las habilidades de
            comunicación.<br />Desarrolla habilidades sociales al promover la interacción entre los niños.<br />Fomenta
            la creatividad y la imaginación.<br />Crea un entorno de aprendizaje divertido y estimulante.<br />Inscripciones
            Abiertas<br />Invitamos a todas las familias del nivel inicial a inscribir a sus hijos en este emocionante
            Taller de Juegos Didácticos. Las inscripciones están abiertas a partir de noviembre, y el taller se llevará
            a cabo en nuestras instalaciones los días 20 y 21 de enero 2024.<br />Este es un paso emocionante en nuestra
            misión de proporcionar una educación integral que inspire la curiosidad y el amor por el aprendizaje desde
            el principio. Creemos que cada niño es único y especial, y este taller es una oportunidad para nutrir su
            crecimiento y desarrollo de una manera divertida y efectiva.
          </p>
        </div>
        <div class="overlap-group">
          <img class="img" src="img/ellipseNJ-5.png" />
          <div class="NIVEL-wrapper"><div class="NIVEL-2">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-3"><div class="NIVEL-4">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8. Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <p class="ES-MOMENTO-DE">¡ES MOMENTO DE ESTUDIAR <br />Y EXPLORAR TU POTENCIAL!</p>
        </div>
        <img class="rectangle-2" src="img/rectangleNJ-32.png" />
        <div class="text-wrapper-2">¡Juegos para aprender!</div>
      </div>
    </div>
  </body>
</html>
