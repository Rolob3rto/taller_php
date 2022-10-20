<?php
    require 'vehiculos.php';
    if ($_POST) {
        session_start();
        $revision = null;

       if ($_POST['Revisado'] == 'N')
            $revision = 'S';
        else
            $revision = 'N';

        $vehiculo = new Vehiculo($_POST['Matricula'], $_POST['Marca'], $_POST['Modelo'],$_POST['Color'], $revision);
        
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