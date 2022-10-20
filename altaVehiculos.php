<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de vehiculo</title>
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
    <form action="altaVehiculoAñadiendo.php" method="post">
        <label>Matricula: <input name="Matricula" type="text"></label>
        <label>Marca: <input name="Marca" type="text"></label>
        <label>Modelo: <input name="Modelo" type="text"></label>
        <label>Color: <input name="Color" type="text"></label>
        <label>Revisado: <input name="Revisado" type="text"></label>
        <br/>
        <button type="submit">Dar de alta</button>
    </form>
</body>
</html>