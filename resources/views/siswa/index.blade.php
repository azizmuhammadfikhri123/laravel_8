@extends('layout.main')
@section('title', 'Halaman index')
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <a href="{{route('siswa.create')}}" class="btn btn-primary float-right">Create Data</a>
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Rayon</th>
                    <th scope="col">Rombel</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td>{{$item->id_rayon}}</td>
                    <td>{{$item->rombel}}</td>
                    <td>
                        <a href="{{url('/siswa/edit/'. $item->id)}}" class="btn btn-warning">edit</a>
                        <form action="{{url('/siswa/delete/'. $item->id)}}" method="post" class="btn btn-danger">
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

