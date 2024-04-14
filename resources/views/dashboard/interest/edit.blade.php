@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('interest.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('interest.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="field" class="form-label">Field</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="field"
                id="field"
                aria-describedby="helpId"
                placeholder="field"
                value="{{ $data->field }}"
            />
        </div>
        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
