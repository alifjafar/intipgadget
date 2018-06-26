@extends('blog.layouts.main')
@section('title')
{{ $post->title }} -
@endsection
@section('content')
<div class="container pt-5">
    <div class="row mt-3">
        <div class="col-md-8 mb-5">
            <small>
                <ol class="breadcrumb__post">
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category_post', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </small>
            <article class="card card-shadow">
                <div class="img-fluid">
                    @if($post->image)
                    <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}" class="img-fluid lazyload" data-src="{{ Voyager::image( $post->image ) }}">
                    @else
                    <img src="{{ asset('img/placeholder.svg') }}" alt="{{ $post->title }}" class="lazyload">
                    @endif
                </div>
                <div class="card-body post-wrapper">
                    <div class="post-header mb-3">
                        <div class="row">
                            <div class="col-md-6">
                        <span class="label-cat">
                            <a href="{{ route('category_post', $post->category->slug) }}">{{ $post->category->name }}</a>
                            <span class="label-date" style="font-size:12px">/ {{ date('M j, Y', strtotime( $post->created_at )) }}
                                / <a href="{{ Request::url()}}#disqus_thread">0 Komentar</a>
                            </span>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <span class="float-right">
                            <span class="card-author text-muted">
                                    Ditulis oleh :
                            </span>
                            <a href="{{ route('author_post', $post->authorId->username) }}" class="card-author">
                                <img src="{{ $post->authorId->avatar }}" alt="$post->authorId->name" class="avatar-post"> {{ $post->authorId->name }}
                            </a>
                        </span>
                    </div>
                </div>
                        <h1 class="card-title text--black">{{ $post->title }}</h1>
                    </div>
                    <hr>
                    <div class="post-content">
                        {!! $post->body !!}
                    </div>

                    {{-- Tags --}}
                    @foreach ($post->tags as $tag)
                    <span class="badge bg-intipgadget">
                        <a href="{{ route('tag_post', $tag->slug) }}" class="text-white"><i class="fa fa-tags"></i> {{ $tag->name }}</a></span>
                    @endforeach
                    <div class="social-share">
                            <div class="row">
                            <div class="col-md-6">
                                <h3>Bagikan Artikel ini</h3>
                            </div>
                            <div class="col-md-6">
                                @include('blog.components.social-share', [
                                    'url' => request()->fullUrl(),
                                    'description' => $post->excerpt,
                                    'image' => Voyager::image($post->image)
                                ])
                                {{-- <span class="social-button">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u="
                                        target="_blank">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url="
                                        target="_blank">
                                        <i class="fa fa-twitter-square"></i>
                                    </a>
                                    <a href="https://plus.google.com/share?url="
                                        target="_blank">
                                        <i class="fa fa-google-plus-square"></i>
                                    </a>
                                    <a href="https://pinterest.com/pin/create/button/?{{
                                        http_build_query([
                                            'url' => 'url',
                                            'media' => 'image',
                                            'description' => 'description'
                                        ])
                                        }}" target="_blank">
                                        <i class="fa fa-pinterest-square"></i>
                                    </a>
                                </span> --}}
                        </div>
                </div>
            </div>
                </div>
            </article>
            {{-- Komentar --}}
            @include('blog.components.comment', [
                'id' => $post->id,
            ])
        </div>
        {{-- Sidebar --}}
        @include('blog.layouts.partials.sidebar')
    </div>
</div>
@endsection
@section('js')
<script>

        var popupSize = {
            width: 780,
            height: 550
        };

        $(document).on('click', '.social-button > a', function(e){

            var
                verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

            var popup = window.open($(this).prop('href'), 'social',
                'width='+popupSize.width+',height='+popupSize.height+
                ',left='+verticalPos+',top='+horisontalPos+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                e.preventDefault();
            }

        });
    </script>
@endsection