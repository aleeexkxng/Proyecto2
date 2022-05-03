<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisas</title>
</head>
<body>
    <a href="/camisa">Pagina principal</a>
    <a href="/camisa/create">Agregar nueva camisa</a>
    <h1>Listado de camisas</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Unidades disponibles</th>
            <th>Acciones</th>
        </tr>
    @foreach($camisas as $camisa)
        <tr>
            <td>{{   $camisa->id   }}</td>
            <td>{{   $camisa->talla   }}</td>
            <td>{{   $camisa->marca   }}</td>
            <td>{{   $camisa->precio   }}</td>
            <td>{{   $camisa->no_unidades   }}</td>
            <td>
                <a href="/camisa/{{$camisa->id}}">Ver Detalle</a>
                <a href="/camisa/{{$camisa->id}}/edit">Editar</a>
                <form action="/camisa/{{$camisa->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>