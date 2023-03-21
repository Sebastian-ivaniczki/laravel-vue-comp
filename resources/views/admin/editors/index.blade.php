@extends('/layouts.app')

@section('content')
    <div class="container my-5">
        <header class="d-flex justify-content-between my-5">
            <h1>Editor</h1>
            <div>
                <a class="btn btn-success me-2" href="{{ route('admin.editors.create') }}">Add new</a>
            </div>   
        </header>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Logo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($editors as $editor)
                    <tr>
                        <th scope="row">{{ $editor->id }}</th>
                        <td>{{ $editor->label }}</td>
                        <td><span>@if($editor->logo)
                                     <img class="me-2" width="50px" src="{{ asset('storage/' . $editor->logo) }}" alt="{{ $editor->label }}">
                                 @endif</span></td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route('admin.editors.edit', $editor->id) }}"
                                class="btn btn-small btn-outline-warning mx-2">Edit</a>
                            <form action="{{ route('admin.editors.destroy', $editor->id) }}" method="POST"
                                class="delete-form" data-name="{{ $editor->label }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
