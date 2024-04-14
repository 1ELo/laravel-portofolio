@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('background.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('background.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="first_paragraf" class="form-label">First Paragraf</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="first_paragraf"
                id="first_paragraf"
                aria-describedby="helpId"
                placeholder="First Paragraf"
                value="{{ $data->first_paragraf }}"
            />
        </div>
        <div class="mb-3">
            <label for="second_paragraf" class="form-label">Second Paragraf</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="second_paragraf"
                id="second_paragraf"
                aria-describedby="helpId"
                placeholder="Second Paragraf"
                value="{{ $data2->first()->second_paragraf }}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
