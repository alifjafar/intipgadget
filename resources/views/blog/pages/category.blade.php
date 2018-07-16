@extends('blog.layouts.main')
@section('title')
{{$posts[0]->category->name}} -
@endsection
@section('header')
<header>
    <div class="jumbotron jumbotron-fluid bg-pattern bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-muted">Kategori : {{ $posts[0]->category->name }}</h2>
                    <small class="text-muted">Total {{$posts->total()}} Post</small>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb__post float-right">
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $posts[0]->category->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <article class="col-md-8">
                <div class="row">
                @if($posts) @foreach ($posts as $post)
                <div class="col-md-6 mb-5">
                    <div class="animated card card-shadow fadeIn">
                        <a href="{{ route('getSingle', $post->slug) }}">
                            <div class="card__img">
                            @if($post->image)
                            <img class="lazyload" src="{{ asset('img/placeholder.svg') }}" data-src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"> @else
                            <img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}">
                            @endif
                            </div>
                        </a>
                        <div class="card-body">
                            {{-- <div class="card-category">
                                <a class="text-muted" href="#">{{ $post->category->name }}</a>
                            </div> --}}
                            <a class="label" href="{{ route('category_post', $post->category->slug) }}">{{ $post->category->name }}</a>
                            <span class="label-date"> /  {{ date('M j, Y', strtotime( $post->created_at )) }}</span>
                            <h5 class="card-title">
                                <a class="link--black" href="{{ route('getSingle', $post->slug) }}">{{ $post->title }}</a>
                            </h5>
                            <p class="card-text" style="font-size:14px">
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
                    <div class="col-md-8">
                        {{ $posts->links() }}
                    </div>
                </div>
        </article>
        {{-- Sidebar --}}
        @include('blog.layouts.partials.sidebar')
    </div>
</div>
@endsection