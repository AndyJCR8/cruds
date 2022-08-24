<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Crud</title>
</head>

<body>
  <div class="formContainer">
    <h2>CRUD</h3>
    
    <form action="{{route('post.store')}}" method="post">
      @csrf
      <div class="formItem">
        <label for="">Titulo</label>
        <input type="text" name="title">
      </div>
      <div class="formItem">
        <label for="">URL corta</label>
        <input type="text" name="slug">
      </div>
      <div class="formItem">
        <label for="">Contenido</label>
        <textarea name="content" rows="4"></textarea>
      </div>
      <div class="formItem">
        <label for="">Descripcion</label>
        <textarea name="description" rows="4"></textarea>
      </div>
      <div class="formItem">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </div>
</body>

</html>