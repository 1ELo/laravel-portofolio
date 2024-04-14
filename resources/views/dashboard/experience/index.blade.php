@extends('dashboard.layout');
@section('konten')
    <p class="card-title">Experience</p>
    <div class="pb-3"><a href="{{route('experience.create')}}" class="btn btn-primary">+ Add new experience history</a></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Institution</th>
                        <th>Role</th>
                        <th>Date</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->institution}}</td>
                        <td>{{$item->role}}</td>
                        <td>{{$item->date}}</td>
                        <td>
                            <a href="{{route('experience.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Are you sure to delete this data?')" action="{{ route('experience.destroy', $item->id) }}" method="POST" class="d-inline">
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
