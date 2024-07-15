<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf {{-- token o seguridad  --}}
        <label  class="form-label">
            Codigo:
            <br>
            <input class="form-control" type="text" name="codigo"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            Estadio:
            <br>
            <input class="form-control"  type="text" name="estadio" required>
        </label>
        <br>
        <label  class="form-label">
            Aforo:
            <br>
            <input class="form-control"  type="text" name="aforo" required>
        </label>
        <br>
        <label  class="form-label">
            Año:
            <br>
            <input class="form-control"  type="date" name="año" required>
        </label>
        <br><br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</body>
</html>