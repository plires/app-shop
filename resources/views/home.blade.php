@extends('layouts.app')

@section('title', 'Home')

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Home - Dashboard</h1>

      @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
      @endif

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quaerat cum, id illo cupiditate nemo ullam. Maxime, praesentium itaque modi porro ea odio cumque sequi, molestias aut suscipit repellat nemo.
    </div>
  </div>
</div>
@endsection

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->
