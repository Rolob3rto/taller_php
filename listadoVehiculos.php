<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Vehiculos</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table,
        td {
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
            padding: 1em;
            background-color: darkgray;
        }       
        tr:nth-child(2){
            color: white;
        }

        td {
            text-align: center;
            background-color: white;
            padding: 1em;
        }
        td:nth-child(6){
            display: flex;
            flex-direction: row;
        }

        table {
            background-color: gray;
        }

        button{
            margin: 0.5em;
        }
    </style>
</head>

<body>
    <h1>Listado Vehiculos</h1>

    <table>
        <tr>
            <th>---</th>
            <th>---</th>
            <th>listado</th>
            <th>Vehiculos</th>
            <th>---</th>
            <th>---</th>
        </tr>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Revisado</th>
            <th>
                <form action="altaVehiculos.php" method="post">
                    <button type="submit">Nuevo vehiculo</button>
                </form>
                <form action="borradoTodos.php" method="post">
                    <button type="submit">Eliminar Todos</button>
                </form>
            </th>
        </tr>

        <?php
        require 'vehiculos.php';

        session_start();

        $arrayVehiculos = $_SESSION['arrayVehiculos'];

        //print_r($arrayVehiculos);

        for ($i = 0; $i < count($arrayVehiculos); $i++) {
            $obj = $arrayVehiculos[$i];
            
            echo "<tr>"; 
            echo "<td>$obj->Matricula</td>";
            echo "<td>$obj->Marca</td>";
            echo "<td>$obj->Modelo</td>";
            echo "<td>$obj->Color</td>";
            echo "<td>$obj->Revisado</td>";
            echo "<td><form action='revisarVehiculo.php' method='post'>";
            echo "<input type='hidden' name='Revisado' value='$obj->Revisado'>";
            echo "<button type='submit'>Revisar</button>";
            echo "</form>";
            echo "<form action='modificarVehiculo.php' method='post'>";
            echo "<input type='hidden' name='Matricula' value='$obj->Matricula'>";
            echo "<input type='hidden' name='Marca' value='$obj->Marca'>";
            echo "<input type='hidden' name='Modelo' value='$obj->Modelo'>";
            echo "<input type='hidden' name='Color' value='$obj->Color'>";
            echo "<input type='hidden' name='Revisado' value='$obj->Revisado'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "<form action='borrarVehiculo.php' method='post'>";
            echo "<input type='hidden' name='Matricula' value='$obj->Matricula'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>