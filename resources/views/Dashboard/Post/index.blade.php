<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Crud</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <a href="{{route("post.create")}}" class="btn btn-primary my-5">Crear</a>
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
          @foreach ($posts as $post)
              <tr>
                <td>
                  {{$post->id}}
                </td>
                <td>
                  {{$post->title}}
                </td>
                <td>
                  {{$post->slug}}
                </td>
                <td>
                  {{$post->created_at->format('d-m-Y')}}
                </td>
                <td>
                  {{$post->updated_at->format('d-m-Y')}}
                </td>
                <td class="d-flex justify-content-center align-items-center">
                  <a href="{{route("post.show", $post->id)}}" class="btn btn-primary mx-2">ver</a>
                  <a href="{{route("post.edit", $post->id)}}" class="btn btn-warning mx-2">editar</a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$post->id}}">eliminar</button>
                  <!-- Button trigger modal -->
                  {{-- <form class="mx-2" method="POST" action="{{route("post.destroy", $post->id)}}">
                      @method('DELETE')
                      @csrf
                      <input type="submit" class="btn btn-danger" value="eliminar"/>
                  </form> --}}
                  
                </td>
              </tr>
          @endforeach
  
        </thead>
        {{$posts->links()}}
      </table>
      {{-- <form class="mx-2" method="POST" action="{{route("post.destroy", $post->id)}}">
          @method('DELETE')
          @csrf
          <input type="submit" class="btn btn-danger" value="eliminar"/>
      </form> --}}
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Eliminar el post</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h4>¿Está seguro de borrar este post?</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">eliminar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  const exampleModal = document.getElementById('exampleModal')
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `Eliminar el post ${recipient}`
    modalBodyInput.value = recipient
  })
</script>
</html>