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
    <p><strong>Editor: </strong>{{ $game->editor?->label }} - <strong>Published year:
      </strong>{{ $game->published_year ?? 'Not defined' }}</p>
    <p><strong>Price: </strong>{{ $game->sell_price ?? 'None' }} - <strong>Vote: </strong>{{ $game->vote ?? 'None' }}</p>

    <!-- game image -->
    <div class="img-box mb-5" style="background-image: url('{{ $game->image }}')"></div>

    <!-- game content -->
    <p>{{ $game->description }}</p>

    <!-- game genres -->
    <div class="mb-2">
      <strong>Genres: </strong>
      @forelse ($game->genres as $genre)
        <span class="badge rounded-pill" style="background-color:{{ $genre->color }}">{{ $genre->label }}</span>
      @empty
        -
      @endforelse

      <strong class="ms-5 me-2">Links: </strong>
      <a class="btn btn-sm btn-danger" href="{{ $game->video_trailer }}" target="_blank"
        title="View trailer in new window"><i class="fa-brands fa-youtube"></i></a>
    </div>

    <!-- game links -->
    <div class="d-flex justify-content-end align-items-center">
      {{-- go back link --}}
      <a class="btn btn-sm btn-secondary" href="{{ route('admin.games.index') }}"><i
          class="fa-solid fa-circle-left"></i></a>

      {{-- edit link --}}
      <a class="btn btn-sm btn-warning mx-2" href="{{ route('admin.games.edit', $game->id) }}"><i
          class="fa-solid fa-pen-to-square"></i></a>

      {{-- destroy link --}}
      <form class="d-inline delete-form" action="{{ route('admin.games.destroy', $game->id) }}" method="post"
        data-form="{{ $game->title }}">
        @csrf @method('delete')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
      </form>
    </div>
  </section>
@endsection
