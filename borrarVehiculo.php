<?php
    require 'vehiculos.php';
    if ($_POST) {
        session_start();
        
        
        $vehiculos = $_SESSION['arrayVehiculos']; 

        for ($i=0; $i < count($vehiculos); $i++) { 
            if ($vehiculos[$i]->Matricula == $_POST['Matricula']) {
                array_splice($vehiculos, $i, 1);                
                break;
                $vehiculos = $_SESSION['arrayVehiculos'];                
        
            }
        }

        $_SESSION['arrayVehiculos'] = $vehiculos;

        header("Location: listadoVehiculos.php");
    }
?>