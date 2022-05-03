<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    @isset($camisa)
        <h1>Editar Camisa</h1>
        <form action="/camisa/{{ $camisa->id }}" method="POST">
        @method('PATCH')
    @else
        <h1>Agregar Camisa</h1>
        <form action="/camisa" method="POST">
    @endisset
    


    <form action="/camisa" method="POST">
        @csrf
        <label for="marca">Marca:</label>
        <input type="text" name="marca" value= "{{isset($camisa) ? $camisa->marca : ''}} {{old('marca')}}">
        <br>
        <label for="talla">Talla:</label>
        <select name="talla">
            <option value="Chica" {{ isset($camisa) && $camisa->talla == "Chica" ? 'selected' : ''}} >CH</option>
            <option value="Mediana"{{ isset($camisa) && $camisa->talla == "Mediana" ? 'selected' : ''}} >M</option>
            <option value="Grande"{{ isset($camisa) && $camisa->talla == "Grande" ? 'selected' : ''}} >G</option>
            <option value="ExtraG"{{ isset($camisa) && $camisa->talla == "ExtraG" ? 'selected' : ''}} >EG</option>
        </select>
        <br>
        <label for="precio">Precio:</label>
        <input type="double" name="precio" value = "{{isset($camisa) ? $camisa->precio : ''}}{{old('precio')}}">
        <br>
        <label for="no_unidades">Unidades:</label>
        <input type="number" name="no_unidades" value= "{{isset($camisa) ? $camisa->no_unidades : ''}} {{old('no_unidades')}}">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>