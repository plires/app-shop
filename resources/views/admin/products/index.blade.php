@extends('admin.layout.app')

@section('title', 'Listado de productos')

<!-- Header Admin -->
@section('header')
  @include('admin.header.header')
@endsection
<!-- Header Admin end -->

<!-- Content Admin -->
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Listado de Productos</h1>
      </div>

      <div id="message" class="fixed-top col-md-12 alert alert-success small" role="alert">
      </div>
            
    	<div class="col-md-12 text-right">
        <a href="{{ url('/admin/products/create') }}" type="button" class="btn btn-secondary btn-md mb-3">Agregar Producto&nbsp; <i class="fas fa-plus"></i></a>
      </div>

        <div class="table-responsive-sm text-center">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Categoría</th>
                <th scope="col">Precio</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($products as $product)
              <tr data-id="{{ $product->id }}">
                <th class="col-lg-1 col-md-1" scope="row">{{ $product->id }}</th>
                <td class="col-lg-2 col-md-2">{{ $product->name }}</td>
                <td class="col-lg-4 col-md-3">{{ $product->description }}</td>
                <td class="col-lg-1 col-md-1">{{ $product->category ? $product->category->name : 'General' }}</td>
                <td class="col-lg-1 col-md-1">{{ $product->price }}</td>
                <td class="col-lg-3 col-md-4">
                  <a href="{{ url('/admin/products/') }}" class="btn btn-primary" title="Ver Producto">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" class="btn btn-primary" title="Editar Producto">
                    <i class="fas fa-edit"></i>
                  </a>

                  <button class="btn btn-primary btn_delete_prod" title="Eliminar Producto">
                    <i class="fas fa-trash"></i>
                  </button>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>

          <div class="text-center">
            {{ $products->links() }}
          </div>

        </div>

      </div>
    </div>
  </div>

  <form action="{{ url('/admin/products/:PRODUCT_ID/') }}" method="DELETE" id="form-delete">
      <input name="_method" type="hidden" value="DELETE">
      {{ csrf_field() }}
   </form>


@endsection
<!-- Content Admin end -->

<!-- Footer Admin -->
@section('footer')
  @include('admin.footer.footer')
@endsection
<!-- Footer Admin end -->

@section('scripts')

<script>
   $(document).ready(function(){
      $("#message").hide();
      $('.btn_delete_prod').click(function(e){

         e.preventDefault();

         var row = $(this).parents('tr');
         var id = row.data('id');
         var form = $('#form-delete');

         var url = form.attr('action').replace(':PRODUCT_ID', id) ;
         var data = form.serialize();

         row.fadeOut();

         $.post(url, data, function(result){

            $("#message").fadeIn();
            $("#message").html(result);
            setTimeout(function() {
              $("#message").fadeOut(1500);
            },2000);

         }).fail(function(){
            alert('Error en el servidor o el Producto tiene imagenes asosciadas. Intente mas tarde o elimine dichas imagenes.');
            row.fadeIn();
         });
      });
   });
</script>   

@endsection
