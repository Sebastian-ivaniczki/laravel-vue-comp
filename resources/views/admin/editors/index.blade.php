@extends('/layouts.app')

{{-- main content --}}
@section('content')
    <div class="container my-5">
        <header class="d-flex justify-content-between my-5">

            {{-- page title --}}
            <h1>Editor</h1>

            {{-- add new editor --}}
            <div>
                <a class="btn btn-success me-2" href="{{ route('admin.editors.create') }}">Add new</a>
            </div>   
        </header>

        {{-- editor table --}}
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

                        {{-- editor label --}}
                        <td>{{ $editor->label }}</td>
                        
                        {{-- editor logo --}}
                        <td><span>@if($editor->logo)
                                     <img class="me-2" width="30px" src="{{ asset('storage/' . $editor->logo) }}" alt="{{ $editor->label }}">
                                 @endif</span></td>
                        <td class="d-flex justify-content-end">

                            {{-- edit link --}}
                            <a href="{{ route('admin.editors.edit', $editor->id) }}"
                                class="btn btn-small btn-outline-warning mx-2">Edit</a>

                            {{-- destroy link --}}
                            <form action="{{ route('admin.editors.destroy', $editor->id) }}" method="POST"
                                class="delete-form" data-name="{{ $editor->label }}">
                                @csrf
                                @method('DELETE')

                                {{-- delete button --}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
