@extends('/layouts.app')

{{-- main content --}}
@section('content')
    <div class="container my-5">
        <form action="{{ route('admin.editors.store') }} " method="POST" enctype="multipart/form-data">

            @csrf

            {{-- page title --}}
            <h1 class="my-5">Add a new Editor</h1>
            <div class="bg-dark text-white p-3">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">

                            {{-- editor title --}}
                            <label for="label" class="form-label">Title</label>
                            <input type="text" class="form-control " id="label" name="label" class="form-label"
                                value="{{ old('label', $editor->label) }}">
                        </div>
                    </div>
    
                    <div class="col-5">

                          {{-- editor logo --}}                     
                            <div class="mb-2">
                              <label for="logo" class="form-label">Logo</label>
                              <input type="url" class="form-control @error('logo') is-invalid @enderror" id="logo"
                                placeholder="Logo editor" name="logo" value="{{ old('logo', $editor->logo) }}">
                            </div>
                          </div>
                          <div class="col-1">
                            <div class="mt-4">

                            {{-- editor preview-image --}}
                              <img src="{{ old('logo', $editor->logo ?? 'https://marcolanci.it/utils/placeholder.jpg') }}" id="preview-image"
                                alt="preview" class="img-fluid" width="60">
                            </div>    
                    </div>
                </div>
                <div class="d-flex justify-content-start my-3">

                    {{-- save button --}}
                    <button type="submit" class="btn btn-success mx-2">Save</button>

                    {{-- back button --}}
                    <a class="btn btn-secondary text-white" href="{{ route('admin.editors.index') }}">Back</a>
                </div>  
            </form>
        </div>
            </div>
 
@endsection

{{-- preview-image script --}}
@section('scripts')
  @vite('resources/js/preview-image.js')
@endsection
