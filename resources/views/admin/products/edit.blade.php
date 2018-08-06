@extends('admin.layout.app')

@section('title', 'Editar producto')

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
        <h1>Editar Producto {{ $product->name }}</h1>
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
        
        <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
          {{ csrf_field() }}

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name', $product->name) }}">
            </div>
            <div class="form-group col-md-4">
              <label for="category">Categoría</label>
              <select id="category" name="category" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" 
                    @if ($category->id == old('category', $product->category_id))
                      selected
                    @endif>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            </div>
            <div class="form-group col-md-4">
              <label for="price">Precio</label>
              <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Precio"  value="{{ old('price', $product->price) }}">
            </div>
          </div>

          <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descripción del producto"  value="{{ old('description', $product->description) }}">
          </div>

          <div class="form-group">
            <label for="long_description">Descripción Larga</label>
            <textarea class="form-control" id="long_description" name="long_description" rows="3" placeholder="Descripción Larga">{{ old('long_description', $product->long_description) }}</textarea>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ url('admin/products') }}" class="btn btn-secondary">Cancelar</a>
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
