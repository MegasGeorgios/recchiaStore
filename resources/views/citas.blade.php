<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/recchiastore-588x376.jpg" type="image/x-icon">
  <meta name="description" content="Website Maker Description">
  <title>Recchia Store</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/data-tables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="menu cid-qzaNQM9hTm" once="menu" id="menu2-n" data-rv-view="1438">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{url('/')}}">
                        <img src="assets/images/recchiastore-588x376.jpg" alt="Recchia Store" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

                <li class="nav-item"><a class="nav-link link text-info display-4" href="{{ url('/logout') }}">Logout<br></a></li>

            </ul>
        </div>
    </nav>
</section>

<section class="engine"><a>bootstrap modal</a></section><section class="section-table cid-qzxaTEBIEG" id="table1-o" data-rv-view="1440">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">CITAS</h2>

      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <form class="mbr-form" method="GET" action="{{ url('/busqueda') }}">
                      {{ csrf_field() }}
                      <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                      <input class="form-control input-sm" name="buscar" required>
                  </form>
                </div>
            </div>
          </div>
        </div>

        @if(session('status'))<div class="alert alert-secondary" role="alert" style="color:black;"> {{session('status')}} </div>@endif


        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">




              <th class="head-item mbr-fonts-style display-7">
                      NOMBRE</th><th class="head-item mbr-fonts-style display-7">CORREO</th><th class="head-item mbr-fonts-style display-7">TELEFONO</th><th class="head-item mbr-fonts-style display-7">CITA</th><th class="head-item mbr-fonts-style display-7">PRENDA</th><th class="head-item mbr-fonts-style display-7">EDITAR</th><th class="head-item mbr-fonts-style display-7">ELIMINAR</th></tr>
            </thead>

            <tbody>


              @foreach ($citas as $cita)

            <tr>
              <td class="body-item mbr-fonts-style display-7">{{$cita->nombre}}</td>
              <td class="body-item mbr-fonts-style display-7">{{$cita->email}}</td>
              <td class="body-item mbr-fonts-style display-7">{{$cita->telefono}}</td>
              <td class="body-item mbr-fonts-style display-7">{{$cita->fecha}}</td>
              <td class="body-item mbr-fonts-style display-7">{{$cita->prenda}}</td>
              <td class="body-item mbr-fonts-style display-7">
                <form  method="GET" action="{{ route('cita.edit', $cita->id) }}">
                  {{ csrf_field() }}
                  <button type="submit">
                      Editar
                  </button>
                </form>

              </td>
              <td class="body-item mbr-fonts-style display-7">
                <form  method="POST" action="{{ route('cita.destroy', $cita->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">
                        Eliminar
                    </button>
                </form>
              </td>
            </tr>
              @endforeach


              </table>
        </div>
      </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
