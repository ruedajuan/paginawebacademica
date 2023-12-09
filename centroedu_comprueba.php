<?php


    try{
        $base= new PDO('mysql:host=localhost; dbname=centroedu','root',''); 
        $base->exec("set character set utf8");
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="select * from usuarios where USUARIO= :login and PASSWORD= :password";
        $resultado=$base->prepare($sql); //paso 2
        $login=htmlentities(addslashes($_POST["usuario"]));
        
        $password=htmlentities(addslashes($_POST["pass"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount(); //devuelve 0 o 1
        if($numero_registro!=0){
            session_start(); //inicio una sesion por seguridad
            $_SESSION["usuario"]=$_POST["usuario"];
            header("location: index.php"); //redirijo a la pagina posta

        }else{
            header("location: login.html"); //vuelve al login
        }


        
    }catch(Exception $e){
        die("Error" . $e->GetMessage());
    }
    


?>