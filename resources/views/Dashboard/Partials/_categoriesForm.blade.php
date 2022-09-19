@csrf
<div class="formItem">
  <label for="">Titulo</label>
  <input type="text" name="title">
  @error('title')
    <small class="error">{{$message}}</small>
  @enderror
</div>
<div class="formItem">
  <label for="">URL corta</label>
  <input type="text" name="slug">
  @error('slug')
    <small class="error">{{$message}}</small>
  @enderror
</div>

@if (session('status'))
  <small class="success">{{session('status')}}</small>
@endif

<div class="formItem">
  <button type="submit">Enviar</button>
</div>