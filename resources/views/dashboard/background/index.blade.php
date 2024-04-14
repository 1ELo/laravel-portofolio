@extends('dashboard.layout')
@section('konten')
    <p class="card-title">My Background</p>
    <div class="pb-3"></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>First Paragraf</th>
                    <th>Second Paragraf</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->first_paragraf}}</td>
                    <td>{{$item->second_paragraf}}</td>
                    <td>
                        <a href="{{route('background.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
