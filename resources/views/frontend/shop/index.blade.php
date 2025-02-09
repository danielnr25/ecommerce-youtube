@extends('layouts.frontend')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.png') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2 style="color:#000000">Gritastic Tienda</h2>
              <div class="breadcrumb__option">
                <a style="color:#000000" href="{{ url('/') }}">Bienvenido</a>
                <span style="color:#000000">Tienda</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-5">
            @include('frontend.shop.sidebar')
          </div>
          <div class="col-lg-9 col-md-7" id="product-shop">

          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->
@endsection
