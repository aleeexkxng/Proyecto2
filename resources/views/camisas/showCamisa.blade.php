<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Camisa</title>
</head>
<body>

    <a href="/camisa/create">Agregar nueva camisa</a>
    <h1>Listado de camisas</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Unidades disponibles</th>
        </tr>
        <tr>
            <th>{{   $camisa->id   }}</th>
            <th>{{   $camisa->talla   }}</th>
            <th>{{   $camisa->marca   }}</th>
            <th>{{   $camisa->precio   }}</th>
            <th>{{   $camisa->no_unidades   }}</th>
        </tr>
    </table>
</body>
</html>