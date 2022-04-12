<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabajoPhp</title>
</head>
<body>
<div class="superior">
        <form action="crearUsuario.php" method="post">
            <h1> Formulario para crear usuario</h1>
            <p>Nombre de la base de datos:</p>
            <p> Nombre de la base de datos:  <input type="text" name="baseDatos" placeholder="Nombre de la base de datos"></p>
            <p> Nombre de la tabla:  <input type="text" name="tabla" placeholder="Nombre de la base de la tabla "></p>
            <p> Escribe tu nombre de usuario: <input type="text" name="usuario" placeholder="Pon tu nombre"></p>
            <p> Fecha de nacimiento <input type="datetime" name="fechaNac" placeholder="YYYY-m-d"></p>
            <p> Escribe tu color preferido: <input type="color" name="color" placeholder="Color preferido"></p>
            <input type="submit" value="Crear">
       
            <input type="reset" value="Borrar"><br>
        </form>
    </div>


    <div class="inferior">
        <form action="login.php" method="post">
            <h1> Formulario para hacer login</h1>
            <p> Nombre de usuario <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
           
            <input type="submit" value="Login">
        
            <input type="reset" value="Borrar"><br>
        </form>


</body>
</html>