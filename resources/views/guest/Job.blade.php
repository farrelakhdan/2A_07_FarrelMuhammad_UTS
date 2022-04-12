@extends('guest.welcome')
@section('link_rel')
    <link rel="stylesheet" href="css/jobStyle.css">
@endsection

@section('content')
    @foreach ($data2 as $item)
        <h2>{{ $item->NAMA }}</h2>
    @endforeach
    <img src="web1.jpg" alt="" srcset="">
    @foreach ($data as $item)
        <p>{{ $item->paragraf }}</p>
    @endforeach
    @php
        $i = 1;
    @endphp
    @foreach ($data1 as $item)
        <p>@php
            echo $i;
            ++$i;
        @endphp. {{ $item->software }}</p>
    @endforeach
@endsection