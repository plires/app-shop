@extends('admin.layout.app')

@section('title', 'Crear nueva Categoría')

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
        <h1>Nueva Categoría</h1>
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
      </div>

      <div class="row">

        <form method="post" action="{{ url('/admin/categories') }}">
          {{ csrf_field() }}

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
            </div>

            <div class="form-group col-md-3">
              <label for="description">Descripción</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Descripción" value="{{ old('description') }}">
            </div>

            <div class="form-group col-md-3">
              <label for="slug">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ old('slug') }}">
            </div>
            <div cla
            ss="form-group col-md-3">
              <label for="image">Imágen</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="Imágen" value="{{ old('image') }}">
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar Categoría</button>
          </div>

        </form>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="list-group">
          <button type="button" class="list-group-item list-group-item-action active">
            Categorías Actuales
          </button>

          @foreach ($categories as $category)
            <a href="#" class="list-group-item list-group-item-action">{{ $category->name }}
              <span class="badge badge-primary badge-pill">{{ $pepe }}</span>
            </a>

          @endforeach

        </div>
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
