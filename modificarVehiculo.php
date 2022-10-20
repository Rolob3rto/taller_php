<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Vehiculo</title>
    <style>
        body, label, button, form{
            display: flex;
            align-items: center;
            justify-content: space-around;        
            padding: 0.5em;    
            flex-direction: column;
        }
        label{
            display: flex;
            flex-direction: row;            
        }
    </style>
</head>
<body>
    <form action="modificarVehiculoAñadiendo.php" method="post">
        <label>Matricula: <input name="Matricula" type="text" value='<?= $_POST['Matricula']?>' ></label>
        <label>Marca: <input name="Marca" type="text" value='<?= $_POST['Marca']?>'></label>
        <label>Modelo: <input name="Modelo" type="text" value='<?= $_POST['Modelo']?>'></label>
        <label>Color: <input name="Color" type="text" value='<?= $_POST['Color']?>'></label>
        <label>Revisado: <input name="Revisado" type="text" value='<?= $_POST['Revisado']?>'></label>
        <br/>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>