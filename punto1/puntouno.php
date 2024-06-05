<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Uno</title>
</head>
<body>
    <?php
        $edad = $_REQUEST['edad'];
        if($edad >= 18){
            echo $_REQUEST['nombre'] . " , sos mayor de edad";
        } else{
            echo $_REQUEST['nombre'] . " , sos menor de edad";
        }
    ?>
</body>
</html>