@extends('admin.layout.app')

@section('title', 'Listado de productos')

<!-- Header Admin -->
@section('header')
  @include('admin.header.header')
@endsection
<!-- Header Admin end -->

<!-- Content Admin -->
@section('content')

  <!-- Modal Confirmation -->
  @include('admin.includes.confirmation')

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Detalle del Producto: {{ $product->name }}</h1>
      </div>

    
            
    	<div class="col-md-12 text-right">
        <a href="{{ url('/admin/products/create') }}" type="button" class="btn btn-secondary btn-md mb-3">Agregar Producto&nbsp; <i class="fas fa-plus"></i></a>
      </div>

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odit eaque natus adipisci, deserunt odio eius recusandae quidem ratione, consequuntur facilis accusantium doloremque debitis, dolore, sit! Nihil blanditiis magni nostrum.



      </div>
    </div>
  </div>


@endsection
<!-- Content Admin end -->

<!-- Footer Admin -->
@section('footer')
  @include('admin.footer.footer')
@endsection
<!-- Footer Admin end -->

