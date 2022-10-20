<?php
    require 'vehiculos.php';

    if ($_POST) {
        session_start();

        $vehiculo = new Vehiculo($_POST['Matricula'], $_POST['Marca'], $_POST['Modelo'], $_POST['Color'] ,$_POST['Revisado']);
        
        $Vehiculos = $_SESSION['arrayVehiculos'];

        array_push($Vehiculos, $vehiculo);

        $_SESSION['arrayVehiculos'] = $Vehiculos;

        header("Location: listadoVehiculos.php");
    }
?>