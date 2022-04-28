<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar Camisa</h1>
    <form action="indexCamisas" method="POST">
        <label for="marca">Marca:</label>
        <input type="text" name="marca">
        <br>
        <label for="talla">Talla:</label>
        <select name="talla">
            <option value="Chica">CH</option>
            <option value="Mediana">M</option>
            <option value="Grande">G</option>
            <option value="ExtraG">EG</option>
        </select>
        <br>
        <label for="precio">Precio:</label>
        <input type="double" name="precio">
        <br>
        <label for="no_unidades">Unidades:</label>
        <input type="number" name="no_unidades">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>