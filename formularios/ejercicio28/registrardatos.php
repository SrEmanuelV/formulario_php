<?php 

    $email = $_POST['correo'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 !== $pass2){
        echo "Contraseña Incorrecta";
        exit;
    }else{
        echo "Tu Email es: " . $email. "<br>";
        echo "Tu Contraseña es: " . $pass1. "";
    }

?>

