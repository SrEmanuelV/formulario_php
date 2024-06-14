<?php 

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Los Datos</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial;
            display: flex;
            justify-content: center;
            aling-items: center;
            background-image: linear-gradient(to right, #000, #006bff, red);
        }

        .container{
            margin-top: 300px;
        }

    </style>
<body class="body">
    <div class="container">
        <h1>Tu Nombre es <?php echo $nombre; ?></h1>
        <h1>Tu edad es de <?php echo $edad; ?></h1>
    </div>

</body>
</html>