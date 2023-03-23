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
                    <th scope="col">Editor</th>
                    <th scope="col">Genres</th>
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

                        {{-- game editor --}}
                        <td>{{ $game->editor?->label }}</td>

                        {{-- game genres --}}
                        <td>
                            @forelse ($game->genres as $genre)
                                <span class="badge rounded-pill"
                                    style="background-color:{{ $genre->color }}">{{ $genre->label }}</span>
                            @empty
                                -
                            @endforelse
                        </td>

                        {{-- game description (little abstract) --}}
                        <td>{{ $game->getAbstract() }}</td>

                        {{-- game pu(s)blished year --}}
                        <td>{{ $game->published_year }}</td>

                        {{-- game last update --}}
                        <td>{{ $game->getDate() }}</td>

                        {{-- game commands --}}
                        <td class="d-flex justify-content-end align-items-center">
                            {{-- show link --}}
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.games.show', $game->id) }}"><i
                                    class="fa-solid fa-folder-open"></i></a>

                            {{-- edit link --}}
                            <a class="btn btn-sm btn-warning mx-2" href="{{ route('admin.games.edit', $game->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>

                            {{-- destroy link --}}
                            <form class="d-inline delete-form" action="{{ route('admin.games.destroy', $game->id) }}"
                                method="post" data-form="{{ $game->title }}">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h4 class="text-center my-2">No games found.</h4>
                @endforelse
            </tbody>
        </table>
        <hr>
        {{-- add new game button --}}
        <div class="text-end">
            <a class="btn btn-sm btn-success me-2" href="{{ route('admin.games.create') }}"><i
                    class="fa-solid fa-circle-plus"></i></a>
        </div>
    </section>

    {{-- <a class="btn btn-sm btn-success me-2" href="{{ route('admin.ciccio') }}"> prova mail</a> --}}
@endsection
