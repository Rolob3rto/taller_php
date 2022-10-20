<?php
    require 'vehiculos.php';
    if ($_POST) {
        session_start();

        $vehiculo = new Vehiculo($_POST['Matricula'], $_POST['Marca'], $_POST['Modelo'],$_POST['Color'] ,$_POST['Revisado']);
        
        $vehiculos = $_SESSION['arrayVehiculos'];                

        for ($i=0; $i < count($vehiculos); $i++) { 
            if ($vehiculos[$i]->Matricula == $_POST['Matricula']) {
                $vehiculos[$i] = $vehiculo;
                break;
            }
        }

        $_SESSION['arrayVehiculos'] = $vehiculos;

        header("Location: listadoVehiculos.php");
    }
?>