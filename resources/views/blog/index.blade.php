@extends('blog.layouts.main')
@section('description', '- Portal Informasi Seputar Gadget dan Teknologi')
@section('header')
<header>
    <div class="jumbotron jumbotron-fluid bg-pattern bg-light">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 mb-4">
                    <div class="col">
                        <div class="featured-news">
                            <div class="news-image">
                                <a href="{{ route('getSingle', $featuredPost->slug) }}">
                                     @if($featuredPost->image)
                                    <img src="{{ Voyager::image($featuredPost->image) }}" alt="{{ $featuredPost->title }}" class="lazyload" data-src="{{ Voyager::image( $featuredPost->image ) }}">
                                    @else
                                    <img src="https://farnetwork.net/wp-content/uploads/2018/05/akrales_180305_2350_0160.0.jpg" alt="{{ $featuredPost->title }}">
                                    @endif

                                </a>
                            </div>
                            <div class="news-text">
                                <h5>
                                    <a href="{{ route('getSingle', $featuredPost->slug) }}" class="text-light news-title">{{ $featuredPost->title }}</a>
                                </h5>
                                <a href="{{ route('category_post', $featuredPost->category->slug) }}" class="text-light"><i class="fa fa-arrow-circle-o-right"></i> {{ $featuredPost->category->name }}</a>
                            </div>
                            {{--
                            <div class="news-category">
                                <a href="" class="btn btn-sm btn-primary">Intermezzo</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-md-12 mb-3">
                        <div class="list-group">
                            <a href="/php-login-register/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="mb-1">Tutorial PHP &amp; MySQL: Membuat Login dan Register (dengan Bootstrap 4)</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="/java-mysql/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="mb-1">Tutorial Java dan MySQL: Membuat Program CRUD Berbasis Teks</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="/php-phinx/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="mb-1">Panduan Migrasi Database Menggunakan PHP Phinx</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="/tutorial-dasar-mongodb/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="mb-1">Belajar MongoDB: Pengenalan Dasar MongoDB untuk Pemula </h6>
                                    </div>
                                </div>
                            </a>
                            <a href="/tutorial-dasar-mongodb/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="mb-1">Belajar MongoDB: Pengenalan Dasar MongoDB untuk Pemula </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <a href="#">
                            <div class="card bg-social">
                                <div class="card-body text-center">
                                    <h2 class="text-light">Tech News</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection @section('content')
<article id="post" class="card-post mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="category__header">
                    <h2 class="category__title">Latest News</h2>
                    <a href="{{ route('news') }}" class="category__link link--black">View all articles</a>
                </div>
            </div>
            @if($posts) @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                <div class="animated card card-shadow zoomIn">
                    <a href="{{ route('getSingle', $post->slug) }}">
                        <div class="card__img">
                        @if($post->image)
                        <img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else
                        <img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                            class="card-img-top"> @endif
                        </div>
                    </a>
                    <div class="card-body">
                        <div class="card-category">
                            <a class="link--black" href="{{ route('category_post', $post->category->slug) }}">{{ $post->category->name }}</a>
                        </div>
                        <h5 class="card-title">
                            <a class="text-dark" href="{{ route('getSingle', $post->slug) }}">{{ $post->title }}</a>
                        </h5>
                        <p class="card-text">
                            @if( strlen($post->body) > 60 ) {{ substr(strip_tags($post->body), 0,60 ) }} ... @else {{ strip_tags($post->body)
                            }} @endif
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('author_post', $post->authorId->username) }}" class="link--black card-author">
                            <img src="{{ $post->authorId->avatar }}" alt="$post->authorId->name" class="avatar-post"> {{ $post->authorId->name }}</a>
                    </div>
                </div>
            </div>
            @endforeach @else
            <p>Belum ada Posts !</p>
            @endif


            <div class="col-md-12 mt-3 d-flex">
                <div class="category__header">
                    <h2 class="category__title">Tutorials</h2>
                    <a href="" class="category__link link--black">View all tutorials</a>
                </div>
            </div>
            @if($posts) @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                <div class="animated card card-shadow zoomIn">
                    <a href="{{ route('getSingle', $post->slug) }}">
                        <div class="card__img">
                        @if($post->image)
                        <img src="{{ asset('img/placeholder.svg') }}" class="lazyload" data-src="{{ Voyager::image( $post->image ) }}"> @else
                        <img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}"
                            class="card-img-top"> @endif
                        </div>
                    </a>
                    <div class="card-body">
                        <span class="label">
                            {{ $post->created_at->diffForHumans()}}
                        </span>
                        <h5 class="card-title">
                            <a class="text-dark" href="{{ route('getSingle', $post->slug) }}">{{ $post->title }}</a>
                        </h5>
                    </div>

                </div>
            </div>
            @endforeach @else
            <p>Belum ada Posts !</p>
            @endif
        </div>
    </div>
</article>
@endsection