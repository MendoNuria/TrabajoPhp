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

<br><br>
<div class="superior">
    <!--registro-->
    <form action="crearUsuario.php" method="post">  
 
            <legend> <h2>Creación de un nuevo usuario</h2> </legend><br>
                <label>  Nombre  de la base de datos:<p><input type="text" name="baseDatos" placeholder="Nombre de la base de datos"> </p></label><br>
                <label>  Nombre de la tabla:<p> <input type="text" name="tabla" placeholder="Nombre de la tabla "> </p></label><br>
                <label>  Nombre de usuario:<p><input type="text" name="usuario" placeholder="Pon tu nombre"> </p></label><br>
                <label>  Fecha de nacimiento: <p><input type="datetime" name="fechaNac" placeholder="YYYY-mm-dd"> </p></labe<br>
                <p></p><br>
                <label> Color preferido: <input type="color" name = "color"> </label>
                <p></p><br>
                <input type="submit" value="Crear nuevo usuario">
                <input type="reset" value="Borrar"><br>
    </form>
</div><br><br>
    <div class="inferior">
        <!--login-->
        <form action="login1.php" method="post">
                <legend> <h2> Consulta datos usuario</h2> </legend><br>
                    <label> Escribe tu nombre de usuario: <p><input type="text" name="usuario" placeholder="Pon tu nombre"></p></label>
                    <p></p><br>
                    <input type="submit" value="Login">    
                    <input type="reset" value="Borrar"><br>
        </form>
    </div>
</body>
</html>