@extends('user.layout.app')

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

<!-- Content User -->
@section('content')

  
  <!-- Carrousel -->
  <div class="container-fluid mb-5">
    <div class="row">
    	<div class="col-md-12 p-0">
    		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://lorempixel.com/1450/725/?12129" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo 1</h5>
                <p>Descripcion del titulo 1</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://lorempixel.com/1450/725/?33684" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo 2</h5>
                <p>Descripcion del titulo 2</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://lorempixel.com/1450/725/?71465" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Titulo 3</h5>
                <p>Descripcion del titulo 3</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Carrousel end -->

  <!-- Bullets Ecommerce -->
  <div class="container text-center mb-3">
    <div class="row">
      <div class="col-lg-3 col-6 mb-2">
        <img class="img-fluid" src="{{ url('assets/img/home/cuotas.gif') }}" alt="cuotas">
      </div>
      <div class="col-lg-3 col-6 mb-2">
        <img class="img-fluid" src="{{ url('assets/img/home/entrega.gif') }}" alt="entrega">
      </div>
      <div class="col-lg-3 col-6 mb-2">
        <img class="img-fluid" src="{{ url('assets/img/home/envios.gif') }}" alt="envios">
      </div>
      <div class="col-lg-3 col-6 mb-2">
        <img class="img-fluid" src="{{ url('assets/img/home/retiro.gif') }}" alt="retiro">
      </div>
    </div>
  </div>
  <!-- Bullets Ecommerce end -->

  <!-- Productos Destacados -->
  <div class="container mb-2">
    <div class="row">

      <div class="col-md-12">
        <h3>Productos Destacados</h3>
      </div>

      <div class="col-lg-3 col-sm-6 text-center">
        <a href="#">
          <div class="card">
            <img class="card-img-top transition" src="https://lorempixel.com/800/450/?71465" alt="Card image cap">
            <div class="card-body">
              <h4 class="">Sillón Wolf Alto</h4>
              <p class="m-0"><strong>$6255</strong> (Contado)</p>
              <p class="card-text">12 Cuotas de $755.83</p>
              <button type="button" class="btn btn-primary">Comprar</button>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-sm-6 text-center">
        <a href="#">
          <div class="card">
            <img class="card-img-top transition" src="https://lorempixel.com/800/450/?71845" alt="Card image cap">
            <div class="card-body">
              <h4 class="">Sillón Wolf Alto</h4>
              <p class="m-0"><strong>$6255</strong> (Contado)</p>
              <p class="card-text">12 Cuotas de $755.83</p>
              <button type="button" class="btn btn-primary">Comprar</button>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-sm-6 text-center">
        <a href="#">
          <div class="card">
            <img class="card-img-top transition" src="https://lorempixel.com/800/450/?71745" alt="Card image cap">
            <div class="card-body">
              <h4 class="">Sillón Wolf Alto</h4>
              <p class="m-0"><strong>$6255</strong> (Contado)</p>
              <p class="card-text">12 Cuotas de $755.83</p>
              <button type="button" class="btn btn-primary">Comprar</button>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-sm-6 text-center">
        <a href="#">
          <div class="card">
            <img class="card-img-top transition" src="https://lorempixel.com/800/450/?76565" alt="Card image cap">
            <div class="card-body">
              <h4 class="">Sillón Wolf Alto</h4>
              <p class="m-0"><strong>$6255</strong> (Contado)</p>
              <p class="card-text">12 Cuotas de $755.83</p>
              <button type="button" class="btn btn-primary">Comprar</button>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- Productos Destacados end -->

@endsection
<!-- Content User end -->

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->
