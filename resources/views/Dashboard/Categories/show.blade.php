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
    @csrf
    <div class="show-data-container container w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100">
        <h2>Visualizar categ</h2>
      </div>
      <div class="info w-25">
        
        <p>{{$categories->title}}</p>
        <p>{{$categories->slug}}</p>
      </div>
    </div>
  </div>
</body>

</html>