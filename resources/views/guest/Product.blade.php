@extends('guest.welcome')
@section('link_rel')
<link rel="stylesheet" href="css/jobStyle.css">
@endsection
@section('content')
    @foreach ($data as $item)
        <h2>{{ $item->nama }}</h2>
        <img src="{{ $item->gambar }}" alt="">
        <p>{{ $item->paragraf }}</p>
        <a href="{{ $item->link }}">{{ $item->link }}</a>
    @endforeach

    {{--<h2>HJB TRACKING</h2>
    <img src="hjb.jpg" alt="" srcset="">
    <p>HJB Tracking adalah website khusus untuk Perusahaan HJB yang bergerak dibidang pengiriman barang</p>
    <a href="http://hjbtracking.co.id/">http://hjbtracking.co.id/</a>
    <h2>Gamification</h2>
    <img src="gami.jpg" alt="">
    <h2>FIB UB</h2>
    <img src="fib.jpg" alt="">
    <a href="http://obefib.arriansoft.com/">http://obefib.arriansoft.com/</a>--}}
@endsection