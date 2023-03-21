@extends('/layouts.app')

@section('content')
    <div class="container my-5">
        <form action="{{ route('admin.genres.store') }} " method="POST">

            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">

                        <label for="label" class="form-label">Genre label</label>
                        <input type="text" class="form-control " id="label" name="label" class="form-label"
                            value="{{ old('label') }}">
                    </div>
                </div>

                <div class="col-2">
                    <div class="mb-2">

                        <label for="color" class="form-label">Genre color</label>
                        <input type="color" class="form-control " id="color" name="color" class="form-label"
                            value="{{ old('color') }}">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-success">Salva</button>
        </form>

        <div class="d-flex justify-content-between my-5">

            <a class="btn btn-primary" href="{{ route('admin.genres.index') }}">Indietro</a>
        </div>
    </div>
@endsection
