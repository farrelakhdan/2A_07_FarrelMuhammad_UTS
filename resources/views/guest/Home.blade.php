@extends('guest.welcome')

@section('link_rel')
    
@endsection

@section('title')
  <section class="section-home">
  </section>
@endsection

@section('content')
  <h2>Arriansoft</h2>
  @foreach ($data as $item)
    <p>{{ $item->paragraf }}</p>
  @endforeach
@endsection