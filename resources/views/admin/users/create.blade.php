@extends('admin.layout.app')

@section('title', 'Crear Nuevo Usuario')

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
        <h1>Nuevo Usuario</h1>
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

        <form method="post" action="{{ url('/admin/users') }} enctype="multipart/form-data"">
          {{ csrf_field() }}

          <div class="form-row">

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">person</i>
                  </span>
                </div>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}">
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">tune</i>
                  </span>
                </div>
                <select id="admin" name="admin" class="form-control">
                  <option value="0">Usuario</option>
                  <option value="1">Administrador</option>
                </select>
              </div>
            </div>

          </div>

          <div class="form-row">


            <div class="form-group col-md-4 form-file-upload form-file-multiple">
              <input type="file" multiple="s" class="inputFileHidden">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="material-icons">add_photo_alternate</i>
                </span>
                <input type="text" class="form-control inputFileVisible" placeholder="Single File">
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock</i>
                  </span>
                </div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">lock</i>
                  </span>
                </div>
                <input type="password" class="form-control" name="r_password" id="r_password" placeholder="Repetir Password" value="{{ old('r_password') }}">
              </div>
            </div>

          </div>

          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
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
