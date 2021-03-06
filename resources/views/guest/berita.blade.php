@extends('layout.guest')
@section('css')

@endsection
@section('konten')
<div class="row">
@foreach($postView as $posting)
<title>{{$posting->judul}}</title>
    <div class="col-xd-12 col-sm-8 col-md-8 col-lg-8">
        <h1>
            {{$posting->judul}}
        </h1>
        <small>{{$posting->waktu}}</small>
        <div class="thumbnail">
        <p>
            {!!$posting->posting!!}
        </p>
        </div>
    </div>
@endforeach

    <div class="col-sm-4 col-xd-12 col-md-4 col-lg-4">
    <h3>Posting yang lain</h3>
     <div class="box-body">
        <ul class="products-list product-list-in-box">
            @foreach($postNot as $post)
            <li class="item"><a href="{{url('/posting/'.$post->slug)}}">&nbsp;&nbsp;&nbsp;&nbsp;{{$post->judul}}</a><br><small>{{$posting->waktu}}</small></li>
            @endforeach
        </ul>
    </div>

</div>
@endsection
@section('js')

@endsection
@section('navbar')
<li class=""><a href="{{url('/kegiatan')}}">Kegiatan</a></li>
<li class=""><a href="{{url('/alat')}}">Daftar Alat Lab</a></li>
<li class=""><a href="{{url('/langkah-peminjaman')}}">Langkah Peminjaman</a></li>
@endsection
