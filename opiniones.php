<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="globalsopiniones.css" />
    <link rel="stylesheet" href="styleopiniones.css" />
  </head>
  <body>
  <?php
    session_start();
    ?>
    <div class="OPINIONES">
      <div class="div">
        <div class="overlap-group">
          <div class="menu"><div class="rectangle"></div></div>
          <div class="TITULOS-MEN"><div class="texto-men"><a href="quienessomos.php" class="enlace_blanco">QUIÉNES SOMOS</a></div></div>
          <div class="texto-men-wrapper"><div class="texto-men"><a href="index.php" class="enlace_blanco">INICIO</a></div></div>
          <div class="div-wrapper"><div class="texto-men"><a href="bienestar.php" class="enlace_blanco">BIENESTAR ESTUDIANTIL</a></div></div>
          <div class="TITULOS-MEN-2"><div class="texto-men"><a href="inscripciones.php" class="enlace_blanco">INSCRIBIRSE</a></div></div>
          <div class="TITULOS-MEN-3"><div class="texto-men"><a href="empleo.php" class="enlace_blanco">EMPLEO</div></div>
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
            <p class="ROL">Copyright@ 2023 Hecho por Centro Educativo. Todos los derechos reservados.</p>
          </div>
        </div>
        <div class="LINEAS-3"></div>
        <div class="NIVEL-4"><div class="NIVEL-5">OPINIONES</div></div>
        <div class="LISTA-OPININ">
          <div class="texto-opiniones">
            <p class="excelente-nivel-acad"> <!--primer cuadro de texto -->
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
          <div class="line-wrapper"><img class="line" src="img/lineo-1.svg" /></div>
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
          <div class="line-wrapper"><img class="line" src="img/lineo-1.svg" /></div>
        </div>
        <div class="LISTA-OPININ-3">
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
                $posicion=2;
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
                $posicion=2;
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
                $posicion=2;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
          </div></div>
          <div class="line-wrapper"><img class="line" src="img/lineo-1.svg" /></div>
        </div>
        <div class="LISTA-OPININ-4">
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
                $posicion=3;
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
                $posicion=3;
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
                $posicion=3;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
          </div></div>
          <div class="line-wrapper"><img class="line" src="img/lineo-1.svg" /></div>
        </div>
        <div class="LISTA-OPININ-5">
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
                $posicion=4;
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
                $posicion=4;
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
                $posicion=4;
                echo $comentario[$posicion];
            }catch(Exception $e){
                die("Error" . $e->GetMessage());
            
            }finally{
                $base=null;
            }
              ?>
          </div></div>
          <div class="line-wrapper"><img class="line" src="img/lineo-1.svg" /></div>
        </div>
        <form action="centroedu_comenta.php" method="post">
        <div class="NIVEL-6"><label class="NIVEL-7">Dejanos tu opinión <br><br>
        <input type="text" name="opinion" maxlength="100" required></label></div>
        <div class="BOTN">
          <div class="frame"><input class="VER-m-s" type="submit" name="enviar" value="ENVIAR"></div>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
