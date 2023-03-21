@extends('layouts.app')

{{-- font awesome --}}
@section('cdns')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
@endsection

{{-- # main content --}}
@section('content')
  <section id="games-index" class="container">
    {{-- page title --}}
    <h1 class="text-center my-5">Games list</h1>

    {{-- games table --}}
    <table class="table table-dark table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Published year</th>
          <th scope="col">Last update</th>
          <th scope="col" class="text-end">Commands</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($games as $game)
          <tr>
            {{-- game title --}}
            <th scope="row" class="text-capitalize">{{ $game->title }}</th>

            {{-- game description (little abstract) --}}
            <td>{{ $game->getAbstract() }}</td>

            {{-- game pu(s)blished year --}}
            <td>{{ $game->pusblished_year }}</td>

            {{-- game last update --}}
            <td>{{ $game->getDate() }}</td>

            {{-- game commands --}}
            <td class="d-flex justify-content-end align-items-center">
              {{-- show link --}}
              <a class="btn btn-sm btn-primary" href=""><i class="fa-solid fa-folder-open"></i></a>

              {{-- edit link --}}
              <a class="btn btn-sm btn-warning mx-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>

              {{-- destroy link --}}
              <a class="btn btn-sm btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
        @empty
          <h4 class="text-center my-2">No games found.</h4>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection
