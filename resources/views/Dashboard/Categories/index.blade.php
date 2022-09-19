<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Categories</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <a href="{{route("categories.create")}}" class="btn btn-primary my-5">Crear</a>
    <div class="postsIndex">
      <table class="table">
        <thead>
          <tbody>
            <tr>
              <td>ID</td>
              <td>Titulo</td>
              <td>Ruta</td>
              <td>Creacion</td>
              <td>Actualizado</td>
              <td>Acciones</td>
            </tr>
          </tbody>
          @foreach ($cats as $categories)
              <tr>
                <td>
                  {{$categories->id}}
                </td>
                <td>
                  {{$categories->title}}
                </td>
                <td>
                  {{$categories->slug}}
                </td>
                <td>
                  {{$categories->created_at->format('d/m/Y')}}
                </td>
                <td>
                  {{$categories->updated_at->format('d/m/Y')}}
                </td>
                <td class="d-flex justify-content-center align-items-center">
                  <a href="{{route("categories.show", $categories->id)}}" class="btn btn-primary">ver</a>
                  <a href="{{route("categories.edit", $categories->id)}}" class="btn btn-warning">editar</a>
                  <a  class="btn btn-danger">eliminar</a>
                </td>
              </tr>
          @endforeach
  
        </thead>
        {{$cats->links()}}
      </table>
    </div>
  </div>
</body>

</html>