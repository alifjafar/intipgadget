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
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </small>
            <article class="card card-shadow">
                @if($post->image)
                <div class="img-fluid">
                    <img src="{{ asset('img/placeholder.svg') }}" data-src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}" class="img-fluid lazyload">
                </div>
                @endif
                <div class="card-body post-wrapper">
                    <div class="post-header mb-3">
                        <h1 class="card-title text--black">{{ $post->title }}</h1>
                    </div>
                    <hr>
                    <div class="post-content" id="post-content">
                        {!! $post->body !!}
                    </div>
                </div>
            </article>
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
<script>

</script>
@endsection