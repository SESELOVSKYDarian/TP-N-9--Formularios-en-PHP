<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Tres</title>
</head>
<body>
    <?php
        $cant = 0;
        if(isset($_REQUEST['futbol'])){
            $cant++;
        }
        if(isset($_REQUEST['basket'])){
            $cant++;
        }
        if(isset($_REQUEST['tennis'])){
            $cant++;
        }
        if(isset($_REQUEST['voley'])){
            $cant++;
        }
        echo "La cantidad de deportes que juega {$_REQUEST['nombre']} es de {$cant}";
    ?>
</body>
</html>