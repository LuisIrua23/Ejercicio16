<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <td>
            <h4>id team
        </td>
        <td>
            <h4>codigo
        </td>
        <td>
            <h4>estadio
        </td>
        <td>
            <h4>aforo
        </td>
        <td>
            <h4>año
        </td>


        @foreach ($team as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->codigo }}</td>
                <td>{{ $team->estadio }} </td>
                <td>{{ $team->aforo }} </td>
                <td>{{ $team->año }} </td>
                <td><a href="{{ route('team.show', $team->id) }}"
                        style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('team.edit', $team->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>