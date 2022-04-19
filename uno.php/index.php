<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabajoPhp</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!--Mirar README.md-->

<div class="superior">
    <form action="crearUsuario.php" method="post">  
        <fieldset>
            <legend> <h3>Creación de un nuevo usuario</h3> </legend>
                <label> <center>   Nombre  de la base de datos:</center><p><input type="text" name="baseDatos" placeholder="Nombre de la base de datos"> </p></label>
                <label> <center>   Nombre de la tabla:</center><p>  <center> <input type="text" name="tabla" placeholder="Nombre de la tabla "> </center></p></label>
                <label> <center> Nombre de usuario:</center><p> <center><input type="text" name="usuario" placeholder="Pon tu nombre"> </center></p></label>
                <label> <center> Fecha de nacimiento:</center> <p> <center> <input type="datetime" name="fechaNac" placeholder="YYYY-m-d"> </center></p></label>
                <label> <center> Color preferido: </center><p><center> <input type="color" name="color" placeholder="Color preferido"></center></p></label>
                <input type="submit" value="Crear nuevo usuario">
                <input type="reset" value="Borrar"><br>
        </fieldset>
    </form>
</div>
<br><br>
<br><br><br><br>
    <div class="inferior">
        <form action="login1.php" method="post">
            <fieldset>
                <legend> <h3> Consulta datos usuario</h3> </legend>
                    <label> Escribe tu nombre de usuario:<p> <input type="text" name="usuario" placeholder="Pon tu nombre"></p></label>
                    <input type="submit" value="Login">    
                    <input type="reset" value="Borrar"><br>
            </fieldset>
        </form>
    </div>

</body>
</html>