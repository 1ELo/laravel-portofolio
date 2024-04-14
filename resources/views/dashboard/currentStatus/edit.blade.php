@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('currentStatus.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('currentStatus.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="description" class="form-label">Current Status</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="description"
                id="description"
                aria-describedby="helpId"
                placeholder="Status"
                value="{{ $data->description }}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
