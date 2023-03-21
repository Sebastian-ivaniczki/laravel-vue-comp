@extends('/layouts.app')

@section('content')
    <div class="container my-5">
        <header class="d-flex justify-content-between my-5">
            <h1>Genre</h1>
            <a class="btn btn-success" href="{{ route('admin.genres.create') }}">Aggiungi</a>
        </header>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Label</th>
                    <th scope="col">Color code</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <th scope="row">{{ $genre->id }}</th>
                        <td>{{ $genre->label }}</td>
                        <td><span class="badge " style="background-color:{{ $genre->color }}">{{ $genre->color }}</span></td>
                        <td class="d-flex justify-content-end">


                            <a href="{{ route('admin.genres.edit', $genre->id) }}"
                                class="btn btn-small btn-warning mx-2">Modifica</a>
                            <form action="{{ route('admin.genres.destroy', $genre->id) }}" method="POST"
                                class="delete-form" data-name="{{ $genre->title }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
