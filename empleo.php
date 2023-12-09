<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsempleo.css" />
    <link rel="stylesheet" href="styleempleo.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="EMPLEO">
      <div class="div">
        <div class="overlap-group">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco"> QUIÉNES SOMOS </a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO </a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL </a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE </a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO</a></div></div>
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
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8 Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="NIVEL-4"><div class="NIVEL-5">EMPLEO</div></div>
        <div class="DESCRIPCIN-NIVEL">
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span">¡SUMATE A NUESTRO EQUIPO!<br /></span>
            </p>
            <p class="text-i">
              <span class="text-wrapper-2"
                >Si estás interesado/a en alguno de nuestros puestos disponibles, envíanos tu CV a nuestro correo
                electrónico
              </span>
              <span class="span">rrhh-educarparatransformar@gmail.com </span>
            </p>
          </div>
        </div>
        <div class="group">
          <div class="LISTA-OPININ">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
                Se busca maestro/a de nivel inicial comprometido/a y creativo/a para unirse a nuestro equipo educativo.
                Debe poseer título en Educación Inicial, experiencia previa en el nivel, y habilidades para el
                desarrollo integral de los niños.
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES"><div class="NOMBRE">Maestro/a Nivel inicial</div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">25/08/23</div></div>
          </div>
          <div class="LISTA-OPININ-2">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
                Buscamos un/a profesor/a de primaria apasionado/a y con licenciatura en Educación Primaria. Debe tener
                excelentes habilidades de comunicación, capacidad para planificar lecciones atractivas y un enfoque en
                el aprendizaje personalizado.
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES"><div class="NOMBRE">Profesor/a de Primaria</div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">05/08/23</div></div>
          </div>
          <div class="LISTA-OPININ-3">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
                Se busca un/a profesor/a de matemáticas para nivel secundaria. Debe tener un título en Matemáticas,
                experiencia previa en la enseñanza de matemáticas y la capacidad de inspirar a nuestros estudiantes a
                amar esta materia.
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES-2"><p class="NOMBRE-3">Profesor/a de Matemáticas de Secundaria</p></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">10/07/23</div></div>
          </div>
          <div class="LISTA-OPININ-4">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
                Estamos en búsqueda de un/a coordinador/a de nivel secundario altamente organizado/a y motivado/a. Debe
                tener experiencia en gestión educativa, habilidades de liderazgo, y la capacidad de trabajar con
                profesores y estudiantes.
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES-2"><div class="NOMBRE-3">Coordinador/a de Nivel Secundario</div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">21/06/23</div></div>
          </div>
          <div class="LISTA-OPININ-5">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
                Buscamos un/a maestro/a de educación física entusiasta para trabajar con estudiantes de nivel inicial,
                primaria y secundaria. Debe estar certificado/a en Educación Física, ser capaz de planificar actividades
                deportivas y promover un estilo de vida activo entre nuestros estudiantes.
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES-2"><div class="NOMBRE-3">Maestro/a de Educación Física</div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">12/05/23</div></div>
          </div>
          <div class="line-wrapper"><img class="line" src="img/linee-1-1.svg" /></div>
          <div class="img-wrapper"><img class="line" src="img/linee-1-1.svg" /></div>
          <div class="LINEAS-4"><img class="line" src="img/linee-1-1.svg" /></div>
          <div class="LINEAS-5"><img class="line" src="img/linee-1-1.svg" /></div>
          <div class="LINEAS-6"><img class="line" src="img/linee-1-1.svg" /></div>
        </div>
      </div>
    </div>
  </body>
</html>
