@extends('admin.layout.app')

@section('title', 'Administración')

<!-- Header Admin -->
@section('header')
  @include('admin.includes.header')
@endsection
<!-- Header Admin end -->

<!-- Aside Admin -->
@section('aside')
  @include('admin.includes.aside')
@endsection
<!-- Aside Admin end -->


<!-- Dashboard Admin -->
@section('content')

  <!-- Modal Confirmation -->
  @include('admin.includes.confirmation')

  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Listado de Productos</h1>
    </div>
  </div>

  <div class="row">
    <div id="message" class="fixed-top col-md-12 alert alert-success small" role="alert">
    </div>
  </div>

  <div class="row">            
    <div class="col-md-12 text-right">
      <a href="{{ url('/admin/products/create') }}" type="button" class="btn btn-info btn-lg mb-2">Agregar Producto&nbsp; <i class="fa fa-plus"></i></a>
    </div>
  </div>

  <div class="box-body table-responsive no-padding">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Categoría</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr data-id="{{ $product->id }}">
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->category->name }}</td>
              <td>
                <div class="btn-group">
                  <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" title="Editar producto" class="btn btn-success btn-flat">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="{{ url('/admin/products/'.$product->id.'/images') }}" title="Imágenes del producto" class="btn btn-warning btn-flat">
                    <i class="fa fa-image"></i>
                  </a>
                  <button type="button" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-flat btn_delete_prod btn-confirm"><i class="fa fa-trash"></i></button>
                </div>
              </td>
          </tr>
        @endforeach
          
      </tbody>
      <tfoot>
          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Categoría</th>
              <th>Acciones</th>
          </tr>
      </tfoot>
  </table>

</div>

<div class="row">
  <div class="col-md-12 text-center">
    {{ $products->links() }}
  </div>
</div>

<form action="{{ url('/admin/products/:PRODUCT_ID/') }}" method="DELETE" id="form-delete">
  <input name="_method" type="hidden" value="DELETE">
  {{ csrf_field() }}
</form>


@endsection
<!-- Dashboard Admin end -->

<!-- Footer Admin -->
@section('footer')
  @include('admin.includes.footer')
@endsection
<!-- Footer Admin end -->

<!-- Footer Admin -->
@section('control-aside')
  @include('admin.includes.control-aside')
@endsection
<!-- Footer Admin end -->

@section('scripts')



<script>
  $(document).ready(function(){

    $("#message").hide();

    $(".btn-confirm").on("click", function(){
      $("#modal-danger").modal('show');
    });

    $('.btn_delete_prod').click(function(){

      var row = $(this).parents('tr');
      var id = row.data('id');
      var form = $('#form-delete');
      var url = form.attr('action').replace(':PRODUCT_ID', id) ;
      var data = form.serialize();


      $("#modal-btn-si").on("click", function(){
        row.fadeOut();
        $.post(url, data, function(result){
          $("#message").fadeIn();
          $("#message").html(result);
          setTimeout(function() {
          $("#message").fadeOut(800);
          },1300);
          $("#modal-danger").modal('hide');
        });
      });

      $("#modal-btn-no").on("click", function(){
        $("#modal-danger").modal('hide');
      });

    });

  });
</script>

@endsection
