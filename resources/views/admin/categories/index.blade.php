@extends('admin.layout.app')

@section('title', 'Listado de categorias')

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

<!-- Content Admin -->
@section('content')

  <!-- Modal Confirmation -->
  @include('admin.includes.confirmation')

  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Listado de Categorías</h1>
      </div>
    </div>

    <div class="row">
      <div id="message" class="fixed-top col-md-12 alert alert-success" role="alert">
      </div>
    </div>

    <div class="row">            
      <div class="col-md-12 text-right">
        <a href="{{ url('/admin/categories/create') }}" type="button" class="btn btn-info btn-lg mb-2">Agregar Producto&nbsp; <i class="fa fa-plus"></i></a>
      </div>
    </div>

    <div class="row">      
      <div class="col-md-12">
        <div class="table-responsive-sm text-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Image</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($categories as $category)
              <tr data-id="{{ $category->id }}">
                <th class="col-lg-1 col-md-1" scope="row">{{ $category->id }}</th>
                <td class="col-lg-2 col-md-2">{{ $category->name }}</td>
                <td class="col-lg-5 col-md-4">{{ $category->description }}</td>
                <td class="col-lg-1 col-md-1"><img src="{{ $category->image }}" alt="" width="50"></td>
                <td class="col-lg-3 col-md-4">
                  <a href="{{ url('/admin/categories/'.$category->id.'/edit') }}" class="btn btn-success btn-flat" title="Editar Producto">
                    <i class="fa fa-edit"></i>
                  </a>

                  <button type="button" rel="tooltip" class="btn btn-danger btn-flat btn_delete_prod btn-confirm" title="Eliminar Categoría"><i class="fa fa-trash"></i></button>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        {{ $categories->links('pagination.default') }}
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
  @include('admin.includes.footer')
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
        $("#mi-modal").modal('hide');
      });

    });

  });
</script>   

@endsection
