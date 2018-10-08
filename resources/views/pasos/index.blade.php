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
        <h1>Seleccione su Zona</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <div>
          <button class="btn btn-primary btn-fab btn-round">1</button>
          <button class="btn btn-primary btn-fab btn-round" disabled>2</button>
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
            <h4 class="card-title">Acassuso</h4>
            <iframe src="https://www.google.com/maps/d/embed?mid=1GM63l0c3EE2mRlipLTDwqhXf7HlTI1W_&hl=es-419" width="100%"></iframe>

            <form method="post" action="{{ url('/pack/') }}">
              {{ csrf_field() }}
              <input type="hidden" name="acassuso" value="Acassuso">
              <button type="submit" class="btn btn-primary">Esta es mi Zona</button>
            </form>

          </div>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="card text-center" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Tigre</h4>
            <iframe src="https://www.google.com/maps/d/embed?mid=1GM63l0c3EE2mRlipLTDwqhXf7HlTI1W_&hl=es-419" width="100%"></iframe>
            <a href="#0" class="btn btn-primary">Esta es mi Zona</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="card text-center" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">San Fernando</h4>
            <iframe src="https://www.google.com/maps/d/embed?mid=1GM63l0c3EE2mRlipLTDwqhXf7HlTI1W_&hl=es-419" width="100%"></iframe>
            <a href="#0" class="btn btn-primary">Esta es mi Zona</a>
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
