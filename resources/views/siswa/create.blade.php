@extends('layout.main')
@section('title', 'Halaman create')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('siswa.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">no hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan no hp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">id rayon</label>
                    <input type="text" class="form-control" id="id_rayon" name="id_rayon" placeholder="Masukan id rayon">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rombel</label>
                    <input type="text" class="form-control" id="rombel" name="rombel" placeholder="Masukan rombel">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    @endsection

