<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, height: 85%, width: 100%">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">	
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>

    <title>Formularios Municipalidad</title>

    <style>
      .input-group-text{
        min-width: 50px;
      }
      a{
        margin-right: 7px;
      }
    </style>
  </head>
  <body>

<div>
<nav class="navbar navbar-dark bg-dark d-flex justify-content-end">
<a title="Instagran" href="https://www.instagram.com/munivillalemana/" target="_blank"><img img src = "{{ asset('icon/i.svg')}}" ><span style="color:white">Instagran </span> </a>
<a title="Twitter" href="https://twitter.com/Munivillalemana" target="_blank"><img img src = " {{asset('icon/t.svg')}}" ><span style="color:white">Twitter </span> </a>
<a title="FaceBook" href="https://www.facebook.com/MunicipalidadVillaAlemana" target="_blank"><img img src = "{{ asset ('icon/f.svg')}}" ><span style="color:white">acebook </span> </a>
</nav>
</div>
<div class="container-fluid">

<div class="row  justify-content-center"  style="background:#00aa18; height:100px;">
  <div class="col-md-9 mt-4">
    <img src="{{ asset('images/recurso10.png')}}" />
  </div>
</div>
     <div class="row  justify-content-center">
     <nav>
     <img src="{{ asset('images/recurso6.png')}}">
     </nav>
     </div>
<main>
  @yield('content')
</main>

<div class="row  justify-content-center">
  <div>
  <h6>Created By</h6>
    <nav>    
    <a href="https://www.ccbsolutions.cl/"><img src="{{ asset('images/ccb.png')}}" /></a>
    </nav>
    <p>Todos los derechos reservados 2020</p>
    
  </div>
</div>  


</div>
  </body>
</html>
