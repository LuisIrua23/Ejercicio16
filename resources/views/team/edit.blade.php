<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('team.update', $team) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('put')
<label>
    Codigo:
    <br>
    <input type="text" name="codigo" value="{{ old('codigo', $team->codigo) }}">
</label>
<br>
<label>
    Estadio:
    <br>
    <input type="text" name="estadio" value="{{ old('estadio', $team->estadio) }}">
</label>
<br>_
<label>
    Aforo:
    <br>
    <input type="text" name="aforo" value="{{ old('aforo', $team->aforo) }}">
</label>

<br>
<label>
    Año:
    <br>
    <input type="text" name="año" value="{{ old('año', $team->año) }}">
</label>
<br>
<br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>