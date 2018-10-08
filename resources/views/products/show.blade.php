@extends('user.layout.app')

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

<!-- Content User -->
@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center mt-5">
        <h1>Producto {{ $product->name }}</h1>
        <p>Descripcion {{ $product->long_description }} </p>
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
