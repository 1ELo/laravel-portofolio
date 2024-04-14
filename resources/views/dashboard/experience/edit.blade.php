@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('experience.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('experience.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="institution"
                id="institution"
                aria-describedby="helpId"
                placeholder="Institution"
                value="{{$data->institution}}"
            />
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="role"
                id="role"
                aria-describedby="helpId"
                placeholder="Role"
                value="{{$data->role}}"
            />
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="date"
                id="date"
                aria-describedby="helpId"
                placeholder="Date"
                value="{{$data->date}}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
