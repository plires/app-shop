@extends('user.layout.app')

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

<!-- Content User -->
@section('content')

  <div class="container">
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-12 text-center mt-5">
        <h1>Seleccione sus Productos</h1>
      </div>
    </div>

    <div class="row">
      <div id="message" class="fixed-top col-md-12 alert alert-success" role="alert">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <div>
          <a href="{{ url('/zone') }}" class="btn btn-success btn-fab btn-round">1</a>
          <a href="{{ url('/pack') }}" class="btn btn-success btn-fab btn-round">2</a>
          <a href="{{ url('/choose') }}" class="btn btn-primary btn-fab btn-round">3</a>
          <button class="btn btn-default btn-fab btn-round" disabled>4</button>
          <button class="btn btn-default btn-fab btn-round" disabled>5</button>
        </div>

      </div>
    </div>

    <div class="row">

      <div class="col-md-4 text-center">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Resumen</h4>

            <h5>Zona: <span>{{ Session::get('zone') }}</span></h5>
            <h5>Pack: <span>{{ Session::get('pack') }}</span></h5>
            <h5>Frecuencia de Entrega: <span>{{ Session::get('frecuency') }}</span></h5>
            <span id="countPieces"></span>

          </div>
        </div>
      </div>

    </div>

    <div class="row">
      @foreach($products as $product)
        <div class="col-md-4 text-center">
          <div class="card text-center" style="width: 20rem;">
            <div data-id="{{ $product->id }}" class="card-body">
              <h4 class="card-title">{{ $product->name }}</h4>
              <button type="button" class="btn btn-primary btn-sm resta">-</button>
              <input class="numero" type="number" value="0">
              <button type="button" class="btn btn-primary btn-sm suma">+</button>
            </div>
          </div>
        </div>
      @endforeach
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

  <form action="{{ url('/cart/:PRODUCT_ID/') }}" method="POST" id="form-cart">
    <input name="_method" type="hidden" value="POST">
    {{ csrf_field() }}
  </form>


@endsection
<!-- Content User end -->

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->

@section('scripts')
<script>
  'use strict';

  var maxPiece = '{{ Session::get('maxPiece') }}';
  var countPiece = 0;
  var parcial = 0;
  var resultado = 0;

  $("#message").hide();

  $('.suma').click(function(){

    parcial = parseInt($('.numero').val());

    if (countPiece == maxPiece) {
      alert('llegaste al maximo');
    } else {
      parcial++;
      countPiece++;
      $('.numero').val(parcial);
    }


    var productId = $(this).parent().attr('data-id');
    var form = $('#form-cart');
    var action = form.attr('action').replace(':PRODUCT_ID', productId);
    var url = action + '/suma';

    var data = form.serialize();

    $.post(url, data, function(result){
      $("#message").fadeIn();
      $("#message").html(result);
      setTimeout(function() {
      $("#message").fadeOut(60000);
      },60000);
    });

  });


</script>
@endsection







