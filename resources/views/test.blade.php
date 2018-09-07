@extends('layouts.app')

@section('title', 'Home')

<!-- Extra css -->
@section('extra_css')
  <!-- Jquery-ui -->
  <link href="{{ asset('assets/css/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
@endsection
<!-- Extra css end -->

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills nav-pills-rose">
        <li id="nav_paso1" class="nav-item"><a class="nav-link active" href="#" data-toggle="tab">Paso1</a></li>
        <li id="nav_paso2" class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Paso2</a></li>
        <li id="nav_paso3" class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Paso3</a></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 offset-md-2 text-center">
      <h1>TEST</h1>
    </div>
  </div>

  <div id="paso1" class="row">
    <div class="col-md-12">

      <form id="formulario_ciudad" action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="ciudad">Ciudad de Entrega</label>
          <select class="form-control selectpicker" data-style="btn btn-link" id="ciudad">
            <option>Olivos</option>
            <option>Recoleta</option>
            <option>Pilar</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Elegir</button>
      </form>


    </div>
  </div>

  <div id="paso2" class="row">
    <div class="col-md-12">
      22222222Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sapiente nostrum perspiciatis commodi, perferendis natus quibusdam expedita alias ducimus eos, similique omnis modi maiores quia praesentium totam placeat unde ipsam.
    </div>
  </div>

  <div id="paso3" class="row">
    <div class="col-md-12">
      3333333Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sapiente nostrum perspiciatis commodi, perferendis natus quibusdam expedita alias ducimus eos, similique omnis modi maiores quia praesentium totam placeat unde ipsam.
    </div>
  </div>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->

<!-- Extra js -->
@section('scripts')
  <!-- Jquery-ui -->
  <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>

  <script type="text/javascript">

    $('document').ready(function(){

      var paso1 = $('#paso1');
      var paso2 = $('#paso2');
      var paso3 = $('#paso3');

      paso2.hide();
      paso3.hide();

      $('#nav_paso1').click(function(){
        paso1.fadeIn(1000);
        paso2.fadeOut(1000);
        paso3.fadeOut(1000);
      });

      $('#nav_paso2').click(function(){
        paso1.fadeOut(1000);
        paso2.fadeIn(1000);
        paso3.fadeOut(1000);
        $('#nav_paso3').disabled;
      });

      $('#nav_paso3').click(function(){
        paso1.fadeOut(1000);
        paso2.fadeOut(1000);
        paso3.fadeIn(1000);
      });


      //console.log('sdf');

    });

    // $( "#tabs" ).tabs();
    // $( "#accordion" ).accordion();

    //   var content = $('#carro_content');
    //   var ul = $('#lista');
    //   content.hide();


    // $('#enviar').click(function(){

    //   var parrafo = 'hola';
    //   content.fadeIn(1000);
    //   ul.append('<li>'+ parrafo +'</li>');
    //   //console.log(div);

    // });


  </script>

@endsection
<!-- Extra css end -->
