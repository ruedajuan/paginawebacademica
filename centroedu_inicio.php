<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Educativo</title>
</head>
<body>
    
    <form action="centroedu_comprueba.php" method="post">
    <table>
            <tr>
                <td align="right"><label >Usuario:</td>
                <td><input type="text" name="usuario" required> </label></td>
            </tr>
            <tr>
                <td align="right"><label>Contraseña:</td>
                <td><input type="password" name="pass" required></label></td>
            </tr>
           
            <tr><td></td><td align="center"><input type="submit" name="insertar" value="Acceder "></td></tr>
        </table>
        <a href="http://localhost/clase1/procesar_tabla.php?numero=1"> Acceder como invitado  <a> <br>
    </form>
    
</body>
</html>