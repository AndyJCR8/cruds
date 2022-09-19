<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Actualizar post</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <div class="formContainer">
      <h2>Actualizar post</h3>
        {{--
          SE LE DEBE MANDAR EL POST A LA RUTA PARA QUE FUNCIONE EL MÉTODO
          UPDATE EN EL CONTROLADOR
        --}}
      <form action="{{route('post.update', $post->id)}}" method="post">
        @method("PUT")
        @include('Dashboard.Partials._form')
      </form>
    </div>
  </div>
</body>
</html>