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
        <h1 align="center">Agregar Camisa</h1>
        <br><br><br>
        <form action="/camisa" method="POST">
    @endisset
    

    <div align="center">
        <form action="/camisa" method="POST">
            @csrf
            <label for="marca" >Marca:&nbsp&nbsp&nbsp</label>
            <input type="text" name="marca" value= "{{isset($camisa) ? $camisa->marca : ''}} {{old('marca')}}">
            <br><br>
            @error('marca')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   
            <label for="precio">Precio:&nbsp&nbsp&nbsp</label>
            <input type="double" name="precio" value = "{{isset($camisa) ? $camisa->precio : ''}} {{old('precio')}}">
            <br><br>
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <label for="no_unidades">Unidades:</label>
            <input type="number" name="no_unidades" value= "{{isset($camisa) ? $camisa->no_unidades : old('no_unidades')}}">
            <br><br>
            @error('no_unidades')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <label for="talla">Talla:&nbsp&nbsp&nbsp</label>
            <select name="talla">
                <option value="Chica" {{ (isset($camisa) && $camisa->talla == "Chica")|| old('talla')=="Chica" ? 'selected' : ''}} >CH</option>
                <option value="Mediana"{{  (isset($camisa) && $camisa->talla == "Mediana")|| old('talla')=="Mediana" ? 'selected' : ''}} >M</option>
                <option value="Grande"{{ (isset($camisa) && $camisa->talla == "Grande")|| old('talla')=="Grande" ? 'selected' : ''}} >G</option>
                <option value="ExtraG"{{ (isset($camisa) && $camisa->talla == "ExtraG")|| old('talla')=="ExtraG" ? 'selected' : ''}} >EG</option>
            </select>
            <br><br>
            @error('talla')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <input type="submit" value="Enviar" >
            <br><br>
        </form>
    </div>
</body>
</html>