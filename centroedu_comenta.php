<?php
session_start();
    //valores a ingresar en la tabla
    $texto=$_POST["opinion"];
    $usuario="ANONIMO";

 try{
    $base= new PDO('mysql:host=localhost; dbname=centroedu','root',''); 
    $base->exec("set character set utf8");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="insert into comentarios (USUARIO_usuarios,TEXTO) values (:usuario,:texto)";
    $resultado=$base->prepare($sql); //paso 2
    if(isset($_SESSION["usuario"])){
        $resultado->execute(array(":texto"=>$texto,":usuario"=>$_SESSION["usuario"])); //paso 3
    }
    else{
        $resultado->execute(array(":texto"=>$texto,":usuario"=>$usuario)); //paso 3
    }
    $resultado->closeCursor();
    header("location: opiniones.php"); //vuelve al login
}catch(Exception $e){
    die("Error" . $e->GetMessage());

}finally{
    $base=null;
}
?>