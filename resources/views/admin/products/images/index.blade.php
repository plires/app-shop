@extends('admin.layout.app')

@section('title', 'Imágenes de producto')

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

  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Imágenes del Producto: "{{ $product->name }}"</h1>
      </div>
    </div>

    <div class="row">
      <div id="message" class="fixed-top col-md-12 alert alert-success small" role="alert">
      </div>
    </div>

    <div class="row">            
      <div class="col-md-12 text-right">

        @if ($errors->any())
          <div class="alert alert-danger small" role="alert">
            @foreach ($errors->all() as $error)
              <ul>
                <li>{{ $error }}</li>
              </ul>
            @endforeach
          </div>
        @endif

        <div class="panel panel-default">
          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input name="photo" type="file" required>
              <button type="submit" class="btn btn-info btn-lg mb-2">Agregar Imágen&nbsp; <i class="fa fa-plus"></i></button>
              <a href="{{ url('admin/products') }}" type="button" class="btn btn-default btn-lg mb-2">Volver a Productos&nbsp; <i class="fa fa-arrow-left"></i></a>
            </form>
          </div>
        </div>

      </div>
    </div>

    <div class="row">

      @foreach ($images as $image)

        <div class="col-sm-6 col-md-4 text-center mb-2">
          <div class="thumbnail">
            <img class="mb-2 mt-2" src="{{ $image->url }}" alt="alt">
            <div class="caption">

              <form method="post" action="">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="image_id" value="{{ $image->id }}">
                <button type="submit" class="btn btn-danger btn-lg mb-2">Eliminar&nbsp; <i class="fa fa-trash"></i></button>

                @if ($image->featured)
                  <button type="button" class="btn btn-success btn-lg ml-1 mb-2" >
                    <i class="fa fa-heart"></i>
                  </button>
                @else
                  <a href="{{ url('admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-info btn-lg ml-1 mb-2">
                    <i class="fa fa-heart"></i>
                  </a>
                @endif
              </form>

              {{-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> --}}
            </div>
          </div>
        </div>

      @endforeach

    </div>

  </div>



{{-- <form action="{{ url('/admin/products/:PRODUCT_ID/') }}" method="DELETE" id="form-delete">
  <input name="_method" type="hidden" value="DELETE">
  {{ csrf_field() }}
</form>
 --}}

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
