<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/js/bootstrap.min.js')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('empleado.index')}}">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('proyecto.index')}}">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
            </li>
            </ul>
        </nav> 

        <h2>Departamentos</h2>

        <table>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
          </tr>
          @foreach($departamentos as $departamento)
            <tr>
              <td>{{$departamento->id}}</td>
              <td>{{$departamento->nombre}}</td>
            </tr>
          @endforeach
        </table>

    </body>
</html>
