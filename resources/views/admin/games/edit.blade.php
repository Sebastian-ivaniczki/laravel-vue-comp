@extends('layouts.app')

{{-- font awesome --}}
@section('cdns')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
@endsection

@section('content')
  <section id="game-edit" class="container">
    {{-- page title --}}
    <header>
      <h3 class="text-center my-4">Edit '{{ $game->title }}'</h3>
    </header>

    {{-- # edit form --}}
    @include('includes.games.form')
  </section>
@endsection
