@extends('admin.layout.app')

@section('title', 'Listado de categorias')

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
        <h1>Listado de Categorías</h1>
      </div>

      <div id="message" class="fixed-top col-md-12 alert alert-success small" role="alert">
      </div>
            
    	<div class="col-md-12 text-right">
        <a href="{{ url('/admin/categories/create') }}" type="button" class="btn btn-secondary btn-md mb-3">Agregar Producto&nbsp; <i class="fas fa-plus"></i></a>
      </div>

        <div class="table-responsive-sm text-center">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($categories as $category)
              <tr data-id="{{ $category->id }}">
                <th class="col-lg-1 col-md-1" scope="row">{{ $category->id }}</th>
                <td class="col-lg-2 col-md-2">{{ $category->name }}</td>
                <td class="col-lg-4 col-md-3">{{ $category->description }}</td>
                <td class="col-lg-1 col-md-1">{{ $category->slug }}</td>
                <td class="col-lg-1 col-md-1">{{ $category->image }}</td>
                <td class="col-lg-3 col-md-4">
                  <a href="{{ url('/admin/categories/') }}" class="btn btn-primary" title="Ver Producto">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ url('/admin/categories/'.$category->id.'/edit') }}" class="btn btn-primary" title="Editar Producto">
                    <i class="fas fa-edit"></i>
                  </a>

                  <button class="btn btn-primary btn_delete_prod btn-confirm" title="Eliminar Producto">
                    <i class="fas fa-trash"></i>
                  </button>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>

          <div class="text-center">
            {{ $categories->links() }}
          </div>

        </div>

      </div>
    </div>
  </div>

  <form action="{{ url('/admin/categories/:CATEGORY_ID/') }}" method="DELETE" id="form-delete">
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

    $(".btn-confirm").on("click", function(){
      $("#mi-modal").modal('show');
    });

    $('.btn_delete_prod').click(function(){

      var row = $(this).parents('tr');
      var id = row.data('id');
      var form = $('#form-delete');
      var url = form.attr('action').replace(':CATEGORY_ID', id) ;
      var data = form.serialize();


      $("#modal-btn-si").on("click", function(){
        row.fadeOut();
        $.post(url, data, function(result){
          $("#message").fadeIn();
          $("#message").html(result);
          setTimeout(function() {
          $("#message").fadeOut(1500);
          },2000);
          $("#mi-modal").modal('hide');
        });
      });

      $("#modal-btn-no").on("click", function(){
        console.log('se feee');
        $("#mi-modal").modal('hide');
      });

    });

  });
</script>   

@endsection
