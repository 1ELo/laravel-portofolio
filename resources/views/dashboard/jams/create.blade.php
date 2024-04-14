@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('jams.index')}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('jams.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="title"
                id="title"
                aria-describedby="helpId"
                placeholder="Title"
                value="{{Session::get('title')}}"
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
                placeholder="Link"
                value="{{Session::get('link')}}"
            />
        </div>
        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
