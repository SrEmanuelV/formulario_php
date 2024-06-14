<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <form action="registrardatos.php" method="POST">
        <h2>Nombre Completo*</h2>
        <input type="text" name="nombre" placeholder="Juan">

        <h2>Correo Electrónico*</h2>
        <input type="email" name="email" placeholder="example@gmail.com">

        <h2>DNI*</h2>
        <input type="number" name="dni" placeholder="123456789">

        <h2>Curriculum Vitae*</h2>
        <textarea id="" name="cv" placeholder="Ingrese aqui su Curriculum Vitae"></textarea>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>