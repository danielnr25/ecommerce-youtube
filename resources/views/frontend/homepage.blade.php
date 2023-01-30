@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="mb-5">
    <div class="container">
        <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
            <div class="hero__text">
                <span>Gritastic Design</span>
                <h2>Todas las imágenes que <br />necesites, en un solo lugar. </h2>
                <p>Encuentra y descarga las mejores imágenes de alta calidad para tus proyectos.</p>
                <a href="#" class="primary-btn">Ir a tienda</a>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="section-title">
                    <h2>Categorias</h2>
                </div>
            </div>
            <div class="categories__slider owl-carousel">
                @foreach($menu_categories as $menu_category)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ $menu_category->photo->getUrl() }}">
                        <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Productos Destacados</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
    </div>
</section>
<!-- Featured Section End -->

@endsection
