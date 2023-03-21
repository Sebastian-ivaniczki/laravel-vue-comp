@extends('/layouts.app')

@section('content')
    <div class="container my-5">
        <form action="{{ route('admin.editors.update', $editor->id) }} " method="POST">
            @method('PUT')
            @csrf
            <h1 class="my-5">Edit Editor</h1>
            <div class="bg-dark text-white p-3">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
    
                            <label for="label" class="form-label">Title</label>
                            <input type="text" class="form-control " id="label" name="label" class="form-label"
                                value="{{ old('label', $editor->label) }}">
                        </div>
                    </div>
    
                    <div class="col-6">
                        <div class="mb-2">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control img-fluid" id="logo" name="logo" class="form-label"
                                value="{{ old('logo', $editor->logo ) }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start my-3">
                    <button type="submit" class="btn btn-success mx-2">Save</button>
                    <a class="btn btn-secondary" href="{{ route('admin.editors.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
          
@endsection