@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('sosials.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('sosials.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="username"
                id="username"
                aria-describedby="helpId"
                placeholder="Username"
                value="{{$data->username}}"
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
                value="{{$data->link}}"
            />
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input
                type="file"
                class="form-control form-control-sm"
                name="img"
                id="img"
                aria-describedby="helpId"
                placeholder="Image"
                value="{{$data->img}}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
