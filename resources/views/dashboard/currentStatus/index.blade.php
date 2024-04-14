@extends('dashboard.layout');
@section('konten')
    <p class="card-title">Current Status</p>
    <div class="pb-3"></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Judul</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{route('currentStatus.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
