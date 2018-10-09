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
      <div class="col-md-12 text-center mb-5">
        <div>
          <button class="btn btn-success btn-fab btn-round">1</button>
          <button class="btn btn-success btn-fab btn-round">2</button>
          <button class="btn btn-primary btn-fab btn-round">3</button>
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

            <h5>Zona: <span>{{ $zone }}</span></h5>
            <h5>Pack: <span>{{ $pack }}</span></h5>
            <h5>Frecuencia de Entrega: <span>{{ $frecuency }}</span></h5>
            <span id="countPieces"></span>

          </div>
        </div>
      </div>

    </div>

    <div class="row">
      @foreach($products as $product)
        <div class="col-md-4 text-center">
          <div class="card text-center" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">{{ $product->name }}</h4>
              <button class="btn btn-primary btn-sm resta">-</button>
              <button data-id="{{ $product->id }}" class="btn btn-primary btn-sm suma">+</button>
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

@endsection
<!-- Content User end -->

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->

@section('scripts')
<script>

  var maxPiece = <?php echo $maxPiece;?>;
  var countPiece = 0;

  // console.log(foo);

  
  $('.resta').click(function(){
    if (countPiece == 0) {
      alert('Llego al minimo');
    } else {
      countPiece = countPiece-1;
      $("<span>"+ countPiece +"</span>").appendTo("#countPieces");
      console.log(countPiece);
    }
  });

  $('.suma').click(function(){
    
    if (countPiece == maxPiece) {
      alert('Llego al maximo');
    } else {
      countPiece = countPiece+1;
      $("<span>"+ countPiece +"</span>").appendTo("#countPieces");
      console.log(countPiece);
    }

  });


</script>
@endsection







