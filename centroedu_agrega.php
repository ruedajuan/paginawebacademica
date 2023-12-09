<?php
    //valores a ingresar en la tabla
    $name=$_POST["nombre"];
    $lastname=$_POST["apellido"];
    $email=$_POST["email"];
    $rol=$_POST["rol"];
    $usuario=$_POST["nombredeusuario"];
    $password=$_POST["password"];

 try{
    $base= new PDO('mysql:host=localhost; dbname=centroedu','root',''); 
    $base->exec("set character set utf8");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="insert into usuarios (NOMBRE,APELLIDO,EMAIL,ROL,USUARIO,PASSWORD) values (:name,:lastname,:email,:rol,:usuario,:password)";
    $resultado=$base->prepare($sql); //paso 2
    $resultado->execute(array(":name"=>$name,":lastname"=>$lastname,":email"=>$email,":rol"=>$rol,":usuario"=>$usuario,":password"=>$password)); //paso 3
    $resultado->closeCursor();
    header("location: cuentacreada.html"); //vuelve al login
}catch(Exception $e){
    die("Error" . $e->GetMessage());

}finally{
    $base=null;
}
?>