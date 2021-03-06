

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

       
      
    ID  {{$empleado->id}}<br>
    NOMBRE  {{$empleado->nombre}}<br>
    APELLIDO  {{$empleado->apellido}}<br>
    EMAIL  {{$empleado->email}}<br>
    TELEFONO  {{$empleado->telefono}}<br>
    PROYECTO A CARGO  @isset($empleado->proyecto){{$empleado->proyecto->nombre}}@endisset<br>    
  
 

    </body>
</html>
