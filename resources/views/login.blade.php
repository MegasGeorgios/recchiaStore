<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/recchiastore-588x376.jpg" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  <title>Recchia Store</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="menu cid-qzaNQM9hTm" once="menu" id="menu2-p" data-rv-view="1527">



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

              @if (session('logueado'))
                  <li class="nav-item"><a class="nav-link link text-info display-4" href="{{ route('cita.index') }}">Citas<br></a></li>
              @else
                <li class="nav-item"><a class="nav-link link text-info display-4" href="{{ url('/login') }}">Login<br></a></li>
              @endif
              <li class="nav-item"><a class="nav-link link text-info display-4" href="{{ url('/contactanos') }}">Contactanos<br></a></li>

          </ul>

      </div>
  </nav>
</section>


<section class="engine"><a>bootstrap buttons</a></section><section class="mbr-section form3 cid-qzxcPgBomZ" id="form3-q" data-rv-view="1529">





    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    INICIAR SESIÓN</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Solo para la empresa.</h3>
            </div>
        </div>

        <div class="row row-sm-offset py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">

              <form  method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                    <div class="mbr-subscribe input-group">
                        <input id="email" type="hidden"name="email" value="@recchiastore">
                        <input  id="password" type="password" class="btn" style="border:solid;" name="password" placeholder="Contraseña" required>
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary display-4">Login</button></span>
                    </div>
                    <div class="form-group py-2  justify-content-center">
                        <div class="col-md-6 col-md-offset-4">
                          @if (session('status'))
                              <span class="help-block">
                                  <strong>{{ session('status') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                </form>
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
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
