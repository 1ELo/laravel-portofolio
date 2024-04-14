@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('education.index')}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('education.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="institution"
                id="institution"
                aria-describedby="helpId"
                placeholder="Institution"
                value="{{Session::get('institution')}}"
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
                value="{{Session::get('date')}}"
            />
        </div>
        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection
