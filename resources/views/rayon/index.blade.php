@extends('layout.main')
@section('title', 'Halaman index')
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <a href="{{route('rayon.create')}}" class="btn btn-primary float-right">Create Data</a>
            <thead>
                <tr>
                    <th scope="col">Nama Rayon</th>
                    <th scope="col">Pembimbing</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama_rayon}}</td>
                    <td>{{$item->pembimbing}}</td>
                    <td>
                        <a href="{{url('/rayon/edit/' . $item->id)}}" class="btn btn-warning">edit</a>
                        <form action="{{url('/rayon/delete/' . $item->id)}}" method="post" class="btn btn-danger">
                            @method('delete')
                            @csrf
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

