@extends('admin.layout.app')

@section('title', 'Crear nuevo producto')

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
        <h1>Nuevo Producto</h1>
      </div>
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

        <form method="post" action="{{ url('/admin/products') }}">
          {{ csrf_field() }}

          <div class="form-row">

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">menu</i>
                  </span>
                </div>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}">
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">category</i>
                  </span>
                </div>
                <select id="category" name="category" class="form-control">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">attach_money</i>
                  </span>
                </div>
                <input type="text" class="form-control" id="price" name="price" placeholder="Precio" value="{{ old('price') }}">
              </div>
            </div>

            <div class="form-group col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">description</i>
                  </span>
                </div>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descripción" value="{{ old('description') }}">
              </div>
            </div>

            <div class="form-group col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">view_headline</i>
                  </span>
                </div>
                <textarea class="form-control" id="long_description" name="long_description" placeholder="Descripción Larga" rows="3">{{ old('long_description') }}</textarea>
              </div>
            </div>

          </div>

          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Registrar Producto</button>
          </div>

        </form>
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
