@extends('blog.layouts.main')
@section('title', 'Halaman Tidak Ditemukan - ')
@section('body')
class="bg-light"
@endsection
@section('content')
<div class="container pt-5 pb-5 text-center">
    <div class="error-page">
        <div class="row justify-content-center">
            <div class="col">
                <h1>404</h1>
                <h3>Konten yang kamu cari tidak ditemukan</h3>
                <p style="font-size:16px;">Mungkin terdapat kesalahan dalam penulisan link atau halaman sudah dipindah</p>
                <a href="{{ route('blog') }}" class="btn btn-lg btn-outline-danger"><span class="fa fa-home"></span> Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection