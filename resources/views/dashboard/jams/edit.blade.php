@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('jams.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('jams.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="title"
                id="title"
                aria-describedby="helpId"
                placeholder="title"
                value="{{ $data->title }}"
            />
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="link"
                id="link"
                aria-describedby="helpId"
                placeholder="link"
                value="{{ $data->link }}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
