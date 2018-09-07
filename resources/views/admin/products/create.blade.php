@extends('admin.layout.app')

@section('title', 'Crear nuevo producto')

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
  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Nuevo Producto</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        @if ($errors->any())
          <div class="alert alert-danger small" role="alert">
            @foreach ($errors->all() as $error)
              <ul>
                <li>{{ $error }}</li>
              </ul>
            @endforeach
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ url('/admin/products/') }}">
          {{ csrf_field() }}

            <div class="box box-info">

              <div class="box-header with-border">
                <h3 class="box-title">Nuevo Producto</h3>
              </div>

              <div class="box-body">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Categorías</label>
                    <select id="category" name="category" class="form-control">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Precio" value="{{ old('price') }}">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Descripcion Corta</label>
                  <textarea class="form-control" rows="3" id="description" name="description" placeholder="Descripción">{{ old('description') }}</textarea>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Descripcion Corta</label>
                  <textarea class="form-control" rows="5" id="long_description" name="long_description" placeholder="Descripción Larga">{{ old('long_description') }}</textarea>
                </div>
              </div>

              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success pull-right ml-1">
                  <i class="fa fa-check"></i>&nbsp;&nbsp;Registrar Producto
                </button>
                <a href="{{ url('admin/products') }}" class="btn btn-info pull-right">
                  <i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Volver
                </a>
              </div>

            </div>
          </div>

        </form>
      </div>
    </div>
    
  </div>

@endsection
<!-- Content Admin end -->

<!-- Footer Admin -->
@section('footer')
  @include('admin.includes.footer')
@endsection
<!-- Footer Admin end -->

<!-- Control Aside Admin -->
@section('control-aside')
  @include('admin.includes.control-aside')
@endsection
<!-- Control Aside Admin end -->