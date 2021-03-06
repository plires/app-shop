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
        <h1>Seleccione su Pack</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <div>
          <a href="{{ url('/zone') }}" class="btn btn-success btn-fab btn-round">1</a>
          <a href="{{ url('/pack') }}" class="btn btn-primary btn-fab btn-round">2</a>
          <button class="btn btn-primary btn-fab btn-round" disabled>3</button>
          <button class="btn btn-primary btn-fab btn-round" disabled>4</button>
          <button class="btn btn-primary btn-fab btn-round" disabled>5</button>
        </div>

      </div>
    </div>

    <div class="row">

      <div class="col-md-4 text-center">
        <div class="card text-center" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Resumen</h4>

            <h5>Zona: <span>{{ Session::get('zone') }}</span></h5>

          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-md-4 text-center">
        <div class="card text-center" style="width: 20rem;">
          <div class="card-body">
            <h2 class="card-title">MEDIUM</h2>
            <h3>$599</h3>
            <h3>3 Piezas</h3>

            <form method="post" action="{{ url('/choose') }}">
              {{ csrf_field() }}
              <input type="hidden" name="zone" value="{{ Session::get('zone') }}">
              <input type="hidden" name="pack" value="Medium">

              <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="frecuency" id="semanal" value="Semanal" >
                  Semanal
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="frecuency" id="mensual" value="Mensual" checked>
                  Mensual
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>

              <button type="submit" class="btn btn-primary">Esta es mi Zona</button>
            </form>

          </div>
        </div>
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

@endsection
<!-- Content User end -->

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->
