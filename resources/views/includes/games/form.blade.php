@if ($game->exists)
    <form class="mb-5" action="{{ route('admin.games.update', $game->id) }}" method="post" enctype="multipart/form-data"
        novalidate>
        {{-- * method helper --}}
        @method('PUT')
    @else
        <form class="mb-5" action="{{ route('admin.games.store') }}" method="post" enctype="multipart/form-data"
            novalidate>
@endif
{{-- ! cross-site request forgery --}}
@csrf

<div class="row">
    {{-- title --}}
    <div class="col-4">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                name="title" value="{{ old('title', $game->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="form-text">Add a game title</div>
            @enderror
        </div>
    </div>

    {{-- # editor select --}}
    {{-- <div class="col-3 mb-3">
    <label for="editor_id" class="form-label">Editor</label>
    <select class="form-select @error('editor_id') is-invalid @enderror" id="editor_id" name="editor_id">
      <option value="">None</option>
      @foreach ($editors as $editor)
        <option @if (old('editor_id', $game->editor_id) == $editor->id) selected @endif value="{{ $editor->id }}">{{ $editor->label }}
        </option>
      @endforeach
    </select>
    @error('type_id')
      <div class="invalid-feedback">{{ $message }}</div>
    @else
      <div class="form-text">Select an Editor</div>
    @enderror
  </div> --}}


    {{-- image --}}
    <div class="col-5">
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="url" class="form-control @error('image') is-invalid @enderror" id="image"
                name="image" value="{{ old('image', $game->image) }}">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="form-text">Upload a game image</div>
            @enderror
        </div>
    </div>

    {{-- description --}}
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                rows="10" required>{{ old('description', $game->description) }}</textarea>
        </div>
    </div>

    {{-- published year --}}
    <div class="col-3">
        <div class="my-3">
            <label for="pusblished_year" class="form-label">pusblished_year:</label>
            <input type="number" step="1" min="1901"
                value="{{ old('pusblished_year', $game->pusblished_year ?? '1900') }}" class="form-control"
                id="pusblished_year" name="pusblished_year">
        </div>
    </div>

    {{-- # genres checkboxes --}}
    <div class="col-6 d-flex align-items-center ms-5">
        @foreach ($genres as $genre)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="gen-{{ $genre->label }}" value="{{ $genre->id }}"
                    name="genres[]" @checked(in_array($genre->id, old('genres', $game_genres ?? [])))>
                <label class="form-check-label" for="gen-{{ $genre->label }}"><span class="badge rounded-pill"
                        style="background-color:{{ $genre->color }}">{{ $genre->label }}</span></label>
            </div>
        @endforeach
    </div>
</div>

<hr>

{{-- form buttons --}}
<div class="d-flex justify-content-between align-items-center">
    {{-- # publish toggle --}}
    {{-- <div class="form-check">
    <input class="form-check-input" type="checkbox" id="is_published" name="is_published"
      @if (old('is_published', $game->is_published)) checked @endif>
    <label id="toggle-label" class="form-check-label">
      <span
        class="text-{{ $game->is_published ? 'success' : 'danger' }}">{{ $game->is_published ? 'Online' : 'Draft' }}</span>
    </label>
  </div> --}}

    {{-- buttons --}}
    <div>
        <button class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i></button>
        <a class="btn btn-sm btn-secondary" href="{{ route('admin.games.index') }}"><i
                class="fa-solid fa-circle-left"></i></a>
    </div>
</div>
</form>

@section('scripts')
    {{-- #checkbox toggle --}}
    <script>
        //get elements from dom
        const checkbox = document.getElementById("is_published");
        const checkboxLabel = document.getElementById("toggle-label");

        // listen checkbox click
        checkbox.addEventListener("click", () => {
            if (checkbox.checked) {
                checkboxLabel.innerText = "Will be published";
                checkboxLabel.classList.remove("text-danger");
                checkboxLabel.classList.add("text-success");
            } else {
                checkboxLabel.innerText = "Will be drafted";
                checkboxLabel.classList.remove("text-success");
                checkboxLabel.classList.add("text-danger");
            }
        });
    </script>
@endsection
