@extends('dashboard.layout');
@section('konten')
    <p class="card-title">Social Media</p>
    <div class="pb-3"><a href="{{route('sosials.create')}}" class="btn btn-primary">+ Add new social account</a></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Username</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->link}}</td>
                        <td>{{$item->img}}</td>
                        <td>
                            <a href="{{route('sosials.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Are you sure to delete this data?')" action="{{ route('sosials.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
