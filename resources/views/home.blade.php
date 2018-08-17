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

    <div class="col-md-8">
      <h1>Home - Dashboard</h1>
    </div>

    

    <div style="position: fixed; top: 0; right: 0; z-index: 10; opacity: 0.9;" id="carro_content" class="col-md-4">
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">Tu Pedido</h4>
          <h6 class="card-subtitle mb-2 text-muted">Productos</h6>
          <ul style="list-style:none;" id="lista">
          </ul>
          <p class="card-text"></p>
          {{-- <a href="#0" class="card-link">Card link</a>
          <a href="#0" class="card-link">Another link</a> --}}
        </div>
      </div>
    </div>

    <div class="col-md-12">

      @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
      @endif

      <!-- Tabs -->
      <h2 class="demoHeaders">Tabs</h2>
      <div id="tabs">
        <ul>
          <li><a href="#tabs-1">First</a></li>
          <li><a href="#tabs-2">Second</a></li>
          <li><a href="#tabs-3">Third</a></li>
        </ul>
        <div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
        <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
      </div>

      <!-- Accordion -->
      <h2 class="demoHeaders">Accordion</h2>
      <div id="accordion">
        <h3>First</h3>
        <div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
        <h3>Second</h3>
        <div>Phasellus mattis tincidunt nibh.</div>
        <h3>Third</h3>
        <div>Nam dui erat, auctor a, dignissim quis.</div>
      </div>

      <form id="formulario">
        <select name="select" id="select">
          <option>Opcion 1</option>
          <option>Opcion 2</option>
          <option>Opcion 3</option>
        </select>
        <button type="button" name="enviar" id="enviar" class="btn btn-primary">Primary</button>
      </form>

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

      

    </div>
  </div>
</div>
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
    $( "#tabs" ).tabs();
    $( "#accordion" ).accordion();

      var content = $('#carro_content');
      var ul = $('#lista');
      content.hide();


    $('#enviar').click(function(){

      var parrafo = 'hola';
      content.fadeIn(1000);
      ul.append('<li>'+ parrafo +'</li>');
      //console.log(div);

    });


  </script>

@endsection
<!-- Extra css end -->
