@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('otherskill.index')}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('otherskill.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="field" class="form-label">Field</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="field"
                id="field"
                aria-describedby="helpId"
                placeholder="field"
                value="{{Session::get('field')}}"
            />
        </div>
        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
