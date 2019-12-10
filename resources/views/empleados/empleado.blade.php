

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

        <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
      </tr>
      
      <tr>
      @foreach($listaEmpleados as $empleado)
  <tr>
    <td><a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>
    @isset($empleado->proyecto)<td><a href="{{route('proyectos.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>@endisset
  </tr>
  @endforeach
    </table>

    </body>
</html>
