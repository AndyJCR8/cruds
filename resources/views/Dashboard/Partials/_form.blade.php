@csrf
<div class="formItem">
  <label for="">Titulo</label>
  <input type="text" name="title" value="{{old('title', $post->title)}}">
  @error('title')
  <small class="error">{{$message}}</small>
  @enderror
</div>
<div class="formItem">
  <label for="">URL corta</label>
  <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
  @error('slug')
  <small class="error">{{$message}}</small>
  @enderror
</div>
<div class="formItem">
  <label for="">Contenido</label>
  <textarea name="content" rows="4">{{old('content', $post->content)}}</textarea>
  @error('content')
  <small class="error">Debe ingresar al menos 5 caracteres en el contenido del post</small>
  @enderror
</div>
<div class="formItem">
  <label for="">Descripcion</label>
  <textarea name="description" rows="4">{{old('description', $post->description)}}</textarea>
</div>
@include('Dashboard.Partials.sesion-flash-status')
<div class="formItem">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>