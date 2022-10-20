<?php
        session_start();

        $_SESSION['arrayVehiculos'] = null;

        header("Location: listadoVehiculos.php");
?>