@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('sosials.index')}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('sosials.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="username"
                id="username"
                aria-describedby="helpId"
                placeholder="Username"
                value="{{Session::get('username')}}"
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

        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input
                type="file"
                class="form-control form-control-sm"
                name="img"
                id="img"
                aria-describedby="helpId"
                placeholder="Image"
                value="{{Session::get('img')}}"
            />
        </div>
        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img-preview').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#img').change(function() {
            previewImage(this);
        });
    </script>
@endsection
