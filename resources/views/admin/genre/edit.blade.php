@extends('/layouts.app')

@section('content')
    <div class="container my-5">
        <form action="{{ route('admin.genres.update', $genre->id) }}">
            @method('PUT')
            @csrf

            <div class="col-6">
                <div class="mb-3">

                    <label for="label" class="form-label">Genre label</label>
                    <input type="text" class="form-control " id="label" name="label" class="form-label">
                </div>
        </form>
    </div>
@endsection
