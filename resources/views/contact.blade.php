<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/images/recchiastore-588x376.jpg')}}" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">
  <title>Recchia Store</title>
  <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">



</head>
<body>
<section class="menu cid-qzaNQM9hTm" once="menu" id="menu2-j" data-rv-view="1430">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">

        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets/images/recchiastore-588x376.jpg')}}" alt="Recchia Store" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>

            </div>
        </div>

    </nav>
</section>


@if(isset($editar))
<section class="engine"><a>bootstrap menu</a></section><section class="mbr-section form1 cid-qzbFmNIGvX" id="form1-k" data-rv-view="1432">




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Editar
                  cita!</h2>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                    @if(session('status'))<div class="alert alert-secondary" role="alert" style="color:black;"> {{session('status')}} </div>@endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="mbr-form" method="POST" action="{{ route('cita.update', $cita->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >Nombre</label>
                                    <input type="text" class="form-control" name="nombre" value="{{$cita->nombre}}" required="" >
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$cita->email}}" required="" >
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >Teléfono</label>
                                    <input type="tel" class="form-control" name="telefono" value="{{$cita->telefono}}" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="form-control-label mbr-fonts-style display-7" >Prendas seleccionadas: {{$cita->prenda}}</label>
                            <select multiple  class="form-control" name="prenda[]" required >
                                <option >Blousa</option>
                                <option >Vestido</option>
                                <option >Bolso</option>
                                <option >Braga</option>
                                <option >Deportivo</option>
                                <option >Accesorios</option>
                                <option >Otro</option>
                            </select>
                            <small id="prenda" class="form-text text-muted">
                                Para seleccionar mas de una opción mantenga oprimida la tecla CTRL y haga click en las opciones.
                            </small>
                        </div>

                        <label class="form-control-label mbr-fonts-style display-7">Fecha</label>
                          <input class="form-control" name="fecha" type="date" list="listafechascita" required>
                          <datalist id="listafechascita">
                            <?php if (strtotime(date("d-m-Y")) < strtotime("14-11-2017") ) {
                              echo ' <option value="2017-11-14">Martes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("15-11-2017") ) {
                              echo '<option value="2017-11-15">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("20-11-2017") ) {
                              echo ' <option value="2017-11-20">Lunes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("21-11-2017") ) {
                              echo '<option value="2017-11-21">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("22-11-2017") ) {
                              echo ' <option value="2017-11-22">Miercoles</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("27-11-2017") ) {
                              echo '<option value="2017-11-27">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("28-11-2017") ) {
                              echo ' <option value="2017-11-28">Martes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("29-11-2017") ) {
                              echo '<option value="2017-11-29">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("04-12-2017") ) {
                              echo ' <option value="2017-12-04">Lunes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("05-12-2017") ) {
                              echo '<option value="2017-12-05">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("06-12-2017") ) {
                              echo ' <option value="2017-12-06">Miercoles</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("11-12-2017") ) {
                              echo '<option value="2017-12-11">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("12-12-2017") ) {
                              echo '<option value="2017-12-12">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("13-12-2017") ) {
                              echo '<option value="2017-12-13">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("18-12-2017") ) {
                              echo '<option value="2017-12-18">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("19-12-2017") ) {
                              echo '<option value="2017-12-19">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("20-12-2017") ) {
                              echo '<option value="2017-12-20">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("21-12-2017") ) {
                              echo '<option value="2017-12-21">Jueves</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("22-12-2017") ) {
                              echo '<option value="2017-12-22">Viernes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("23-12-2017") ) {
                              echo '<option value="2017-12-23">Sabado</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("27-12-2017") ) {
                              echo '<option value="2017-12-27">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("28-12-2017") ) {
                              echo '<option value="2017-12-28">Jueves</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("29-12-2017") ) {
                              echo '<option value="2017-12-29">Viernes</option>';
                            } ?>
                          </datalist>

                        <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-form display-4">Enviar</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>

@else

<section class="engine"><a>bootstrap menu</a></section><section class="mbr-section form1 cid-qzbFmNIGvX" id="form1-k" data-rv-view="1432">




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Haz tu cita!</h2>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                    @if(session('status'))<div class="alert alert-secondary" role="alert" style="color:black;"> {{session('status')}} </div>@endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="mbr-form" method="POST" action="{{ route('cita.store') }}">
                        {{ csrf_field() }}
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >Nombre</label>
                                    <input type="text" class="form-control" name="nombre"  required="" >
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Email</label>
                                    <input type="email" class="form-control" name="email" required="" >
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >Teléfono</label>
                                    <input type="tel" class="form-control" name="telefono" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="form-control-label mbr-fonts-style display-7" >Selecciona tu prenda</label>
                            <select multiple  class="form-control" name="prenda[]" required="">
                                <option >Blousa</option>
                                <option >Vestido</option>
                                <option >Bolso</option>
                                <option >Braga</option>
                                <option >Deportivo</option>
                                <option >Accesorios</option>
                                <option >Otro</option>
                            </select>
                            <small id="prenda" class="form-text text-muted">
                                Para seleccionar mas de una opción mantenga oprimida la tecla CTRL y haga click en las opciones.
                            </small>
                        </div>

                        <label class="form-control-label mbr-fonts-style display-7">Fecha</label>
                          <input class="form-control" name="fecha" type="date" list="listafechascita" required>
                          <datalist id="listafechascita">
                            <?php if (strtotime(date("d-m-Y")) < strtotime("14-11-2017") ) {
                              echo ' <option value="2017-11-14">Martes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("15-11-2017") ) {
                              echo '<option value="2017-11-15">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("20-11-2017") ) {
                              echo ' <option value="2017-11-20">Lunes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("21-11-2017") ) {
                              echo '<option value="2017-11-21">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("22-11-2017") ) {
                              echo ' <option value="2017-11-22">Miercoles</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("27-11-2017") ) {
                              echo '<option value="2017-11-27">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("28-11-2017") ) {
                              echo ' <option value="2017-11-28">Martes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("29-11-2017") ) {
                              echo '<option value="2017-11-29">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("04-12-2017") ) {
                              echo ' <option value="2017-12-04">Lunes</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("05-12-2017") ) {
                              echo '<option value="2017-12-05">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("06-12-2017") ) {
                              echo ' <option value="2017-12-06">Miercoles</option> ';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("11-12-2017") ) {
                              echo '<option value="2017-12-11">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("12-12-2017") ) {
                              echo '<option value="2017-12-12">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("13-12-2017") ) {
                              echo '<option value="2017-12-13">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("18-12-2017") ) {
                              echo '<option value="2017-12-18">Lunes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("19-12-2017") ) {
                              echo '<option value="2017-12-19">Martes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("20-12-2017") ) {
                              echo '<option value="2017-12-20">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("21-12-2017") ) {
                              echo '<option value="2017-12-21">Jueves</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("22-12-2017") ) {
                              echo '<option value="2017-12-22">Viernes</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("23-12-2017") ) {
                              echo '<option value="2017-12-23">Sabado</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("27-12-2017") ) {
                              echo '<option value="2017-12-27">Miercoles</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("28-12-2017") ) {
                              echo '<option value="2017-12-28">Jueves</option>';
                            } ?>
                            <?php if (strtotime(date("d-m-Y")) < strtotime("29-12-2017") ) {
                              echo '<option value="2017-12-29">Viernes</option>';
                            } ?>





                          </datalist>

                        <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-form display-4">Enviar</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>




@endif












<section class="cid-qzxQ1aQHmT" id="social-buttons2-r" data-rv-view="1435">





    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    Síguenos en instagram!
                </h2>
                <div class="social-list pl-0 mb-0">
                    <a href="https://instagram.com/recchiastore" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-instagram socicon" media-simple="true"></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>
</html>
