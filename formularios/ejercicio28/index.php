<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="registrardatos.php" method="POST">
        <h1>Ingresa tu Email</h1>
        <input type="email" name="correo" ingresa>

        <h1>Ingresa tu Contraseña</h1>
        <input type="password" name="pass1" placeholder="">

        <h1>Repite nuevamente la contraseña</h1>
        <input type="password" name="pass2">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>