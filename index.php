<?php
    require("vehiculos.php");
    session_start();

  
    $vehiculos = array();


    if (isset($_SESSION['arrayVehiculos']) == false) {
        $vehiculo = new Vehiculo('Matricula1', 'Marca1', 'Modelo1', 'Color1', 'N');
        array_push($vehiculos, $vehiculo);
        $vehiculo = new Vehiculo('Matricula2', 'Marca2', 'Modelo2', 'Color2', 'N');
        array_push($vehiculos, $vehiculo);
        $vehiculo = new Vehiculo('Matricula3', 'Marca3', 'Modelo3', 'Color3', 'S');
        array_push($vehiculos, $vehiculo);

        $_SESSION['arrayVehiculos'] = $vehiculos;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto home</title>
</head>
<body>
    <h2>Taller</h2>
    <button><a href="listadoVehiculos.php">Vehiculos</a></button>
</body>
</html>