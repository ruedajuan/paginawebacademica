<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
      session_start();
      ?>
    <div class="HOME">
      <div class="div">
        <div class="overlap">
          <div class="NIVEL"><div class="text-wrapper">NIVEL PRIMARIO</div></div>
          <div class="DESCRIPCIN-NIVEL">
            <p class="p">
              En el Nivel Primario de nuestro centro educativo, fomentamos la curiosidad intelectual y el amor por el
              aprendizaje. Nuestro enfoque está en proporcionar una educación de calidad que no solo se centra en el
              desarrollo académico, sino también en los valores y habilidades que prepararán a nuestros estudiantes para
              enfrentar los desafíos del futuro.
            </p>
          </div>
          <div class="FOTO-NIVEL"></div>
          <div class="LINEAS"></div>
        </div>
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="LINEAS-2"></div>
          <div class="LINEAS-3"></div>
          <div class="NIVEL-wrapper"><div class="NIVEL-2">ÚLTIMAS NOTICIAS</div></div>
          <div class="NIVEL-wrapper9"><div class="NIVEL-29"><a href="galeriafotos.php" class="enlace_blanco"> GALERIA DE FOTOS </a></div></div>
          <div class="div-wrapper"><div class="NIVEL-2">OPINIONES</div></div>
          <div class="CARD-NOTICIAS">
            <div class="text-wrapper-3"><a href="juegospa.php" class="enlace_azul">LEER MÁS »</a></div> <!-- Aprende a jugar-->
            <div class="NIVEL-3"><div class="NIVEL-4">¡Juegos para aprender!</div></div>
            <div class="nuestro-nivel-wrapper">
              <p class="nuestro-nivel">
                Compartimos las propuestas didácticas de “Juegos para aprender” en donde participaron alumnos de todo el
                nivel inicial.
              </p>
            </div>
          </div>
          <div class="CARD-NOTICIAS-2">
            <div class="text-wrapper-3"><a href="noticiademoc.php" class="enlace_azul">LEER MÁS »</a></div><!-- 40 años de democracia-->
            <div class="NIVEL-3"><p class="NIVEL-4">40 años de democracia en Argentina</p></div>
            <div class="nuestro-nivel-wrapper">
              <p class="nuestro-nivel">
                “La libertad, que es una conquista y no una donación exige una búsqueda permanente”. Paulo Freire.
              </p>
            </div>
          </div>
          <div class="frame-wrapper">
            <div class="VER-m-s-wrapper"><div class="VER-m-s"><a href="noticias.php" class="enlace_blanco">VER TODAS</a></div></div> <!--noticias -->
          </div>
          <div class="BOTN-2">
            <div class="VER-m-s-wrapper"><div class="VER-m-s"><a href="opiniones.php" class="enlace_blanco">VER TODAS</a></div></div> <!--opiniones -->
          </div> <!--CARRUSEL INICIO -->
          
          <img class="img" src="img/rectangle-14.png" />
          <div class="rectangle-2"></div>
          <div class="rectangle-3" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2106.003989749243!2d-58.970170651886555!3d-27.41122159525649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1694214182037!5m2!1ses-419!2sar" width="1040" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <img class="ellipse" src="img/ellipse-5.png" />
          <div class="NIVEL-5"><div class="NIVEL-6">EDUCAR PARA TRANSFORMAR</div></div>
          <div class="NIVEL-7"><div class="NIVEL-8">CENTRO EDUCATIVO</div></div>
          <div class="LINEAS-4"></div>
          <div class="LINEAS-5"></div>
          <div class="rol">
            <p class="ROL">Copyright@ 2023 Hecho por Grupo8 Centro Educativo. Todos los derechos reservados.</p>
          </div>
          <div class="rectangle-4"></div>
          <div class="LISTA-OPININ">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
              <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select TEXTO from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['TEXTO'] ;          
                }
                $resultado->closeCursor();
                $posicion=0;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES"><div class="NOMBRE">
            <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select USUARIO_usuarios from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['USUARIO_usuarios'] ;          
                }
                $resultado->closeCursor();
                $posicion=0;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
            </div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">
            <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select FECHA_COMENTARIO from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['FECHA_COMENTARIO'] ;          
                }
                $resultado->closeCursor();
                $posicion=0;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
            </div></div>
            <div class="line-wrapper"><img class="line" src="img/line-1-11.svg" /></div>
          </div>
          <div class="LISTA-OPININ-2">
            <div class="texto-opiniones">
              <p class="excelente-nivel-acad">
              <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select TEXTO from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['TEXTO'] ;          
                }
                $resultado->closeCursor();
                $posicion=1;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
              </p>
            </div>
            <div class="TITULOCARD-OPINIONES"><div class="NOMBRE">
            <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select USUARIO_usuarios from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['USUARIO_usuarios'] ;          
                }
                $resultado->closeCursor();
                $posicion=1;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
            </div></div>
            <div class="NOMBRE-wrapper"><div class="NOMBRE-2">
            <?php
              try{
                $base= new PDO('mysql:host=localhost; dbname=centroedu','root','');
                $base->exec("set character set utf8");
                $sql="select FECHA_COMENTARIO from comentarios ORDER BY FECHA_COMENTARIO DESC LIMIT 5";//paso 1
                $resultado=$base->prepare($sql); //paso 2
                $resultado->execute(); //paso 3
                $comentario= array();
                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){ //paso 4                   
                    $comentario[]= $fila['FECHA_COMENTARIO'] ;          
                }
                $resultado->closeCursor();
                $posicion=1;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
            </div></div>
          </div>
          <img class="rectangle-5" src="img/rectangle-20.png" />
          <div class="rectangle-6"></div>
          <div class="group">
            <div class="overlap-group-2">
              <img class="img-2" src="img/home.svg" />
              <div class="div-2"></div>
            </div>
            <div class="DESCRIPCIN-NIVEL-2">
              <p class="nuestro-nivel-2">Nueva Pompeya 1632.<br />H3500 Resistencia, Chaco.</p>
            </div>
          </div>
          <div class="group-2">
            <div class="overlap-group-2">
              <img class="email" src="img/email.svg" />
              <div class="div-2"></div>
            </div>
            <div class="DESCRIPCIN-NIVEL-3"><div class="nuestro-nivel-3">educarparatransformar@gmail.com</div></div>
          </div>
          <div class="group-3">
            <div class="overlap-group-2">
              <img class="phone-in-talk" src="img/phone-in-talk.svg" />
              <div class="div-2"></div>
            </div>
            <div class="DESCRIPCIN-NIVEL-3"><div class="nuestro-nivel-3">0362-4455583 / 4451193</div></div>
          </div>
          <div class="group-4">
            <div class="overlap-group-2">
              <img class="img-2" src="img/facebook.svg" />
              <div class="div-2"></div>
            </div>
            <div class="DESCRIPCIN-NIVEL-4"><div class="nuestro-nivel-4">facebook.com/educarparatransformar</div></div>
          </div>
          <div class="LINEAS-6"></div>
          <div class="NIVEL-9"><div class="NIVEL-10">CONTACTO</div></div>
          <p class="ES-MOMENTO-DE">
            ¡ES MOMENTO DE ESTUDIAR Y EXPLORAR TU POTENCIAL!</p>
          <div class="group-5">
            <div class="div-2"><img class="vector" src="img/vector-1.svg" /></div>
            <div class="DESCRIPCIN-NIVEL-5"><div class="nuestro-nivel-5">instagram.com/educarparatransformar</div></div>
          </div>
          <div class="group-6">
            <div class="div-2"><img class="vector-2" src="img/vector.svg" /></div>
            <div class="DESCRIPCIN-NIVEL-5"><div class="nuestro-nivel-5">twitter.com/educarparatransformar</div></div>
          </div>
        </div>
        <div class="overlap-2">
          <div class="menu"><div class="rectangle-7"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO</a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL</a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE</a></div></div>
          <div class="TITULOS-MEN-4"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO</a></div></div>
          <div class="TITULOS-MEN-5"><div class="texto-men">
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
          <img class="ellipse-2" src="img/ellipse-4.png" />
        </div>
        <div class="overlap-3">
          <div class="rectangle-8"></div>
          <div class="EDUCAR-PARA">
            <div class="EDUCAR-PARA-2">EDUCAR PARA<br />TRANSFORMAR</div>
          </div>
          <div class="LINEAS-7"></div>
          <div class="CENTRO-EDUCATIVO"><div class="text-wrapper-4">CENTRO EDUCATIVO</div></div>
          <div class="DESCRIPCIN-NIVEL-6">
            <p class="nuestro-nivel-6">
              Inspiramos, desafiamos y empoderamos a todos nuestros alumnos a ser miembros comprometidos y éticos de una
              comunidad global para que se conviertan en agentes de cambio conscientes de sí mismos, seguros,
              innovadores y colaborativos.
            </p>
          </div>
        </div>
        <div class="NIVEL-11"><div class="text-wrapper">NIVEL INICIAL</div></div>
        <div class="NIVEL-12"><div class="text-wrapper">NIVEL SECUNDARIO</div></div>
        <div class="DESCRIPCIN-NIVEL-7">
          <p class="p">
            Nuestro Nivel Inicial se enfoca en brindar un ambiente cálido y acogedor donde los pequeños puedan aprender
            a través del juego, la exploración y la creatividad. Nuestro equipo de educadores altamente capacitados está
            comprometido con el bienestar y el crecimiento de cada niño, ayudándolos a construir una base sólida para su
            futuro académico.
          </p>
        </div>
        <div class="DESCRIPCIN-NIVEL-8">
          <p class="p">
            En el Nivel Secundario de nuestro centro educativo, ofrecemos una educación integral que prepara a los
            estudiantes para el éxito en la vida académica y más allá. Nuestro enfoque va más allá de los conceptos
            básicos y se centra en el pensamiento crítico, la resolución de problemas y el desarrollo de habilidades de
            liderazgo.
          </p>
        </div>
        <div class="FOTO-NIVEL-2"></div>
        <div class="FOTO-NIVEL-3"></div>
        <div class="LINEAS-8"></div>
        <div class="LINEAS-9"></div>


      </div>
    </div>
  </body>
</html>
