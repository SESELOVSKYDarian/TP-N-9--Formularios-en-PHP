<?php
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $dni = $_REQUEST['dni'];
    $genero = $_REQUEST['genero'];
    $nacimiento = $_REQUEST['lug-nac'];
    $direccion = $_REQUEST['direccion'];
    $intereses = $_REQUEST['intereses'];
    $comentarios = $_REQUEST['comentarios'];

    header('Location: index.html');
    exit();
?>
