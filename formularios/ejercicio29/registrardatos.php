<?php 

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $number_document = $_POST['dni'];
    $cv = $_POST['cv'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver los datos</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .container{
            width: 630px;
            height: auto;
            border: 2px solid red;
            display: flex;
            flex-direction: column;
            margin: 100px auto;
}
    </style>
</head>
<body>

    <div class="container">
        <h1>Nombre: <?php echo $nombre; ?></h1>
        <h1>Email: <?php echo $email; ?></h1>
        <h1>DNI:<?php echo $number_document; ?></h1>
        <h3>Curriculum Vitae:</h3>
        <p><?php echo $cv; ?></p>
    </div>
</body>
</html>