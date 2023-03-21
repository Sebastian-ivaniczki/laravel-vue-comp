@extends('layouts.app')

{{-- font awesome --}}
@section('cdns')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
@endsection

@section('content')
  <section id="games-show" class="container">
    <!-- game title -->
    <h1 class="text-center my-4">{{ $game->title }}</h1>

    {{-- game editor --}}
    <p><strong>Editor: </strong>{{ $game->editor?->label }}</p>

    <!-- game image -->
    <div class="img-box mb-5"></div>

    <!-- game content -->
    <p>{{ $game->description }}</p>

    <!-- game genres -->
    <div class="mb-2">
      <strong>Genres: </strong>
      {{-- todo --}}
    </div>

    <!-- game links -->
    <div class="d-flex justify-content-end align-items-center">
      {{-- go back link --}}
      <a class="btn btn-sm btn-secondary" href="{{ route('admin.games.index') }}"><i
          class="fa-solid fa-circle-left"></i></a>

      {{-- edit link --}}
      <a class="btn btn-sm btn-warning mx-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>

      {{-- destroy link --}}
      <a class="btn btn-sm btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
    </div>
  </section>
@endsection
