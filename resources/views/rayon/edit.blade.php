@extends('layout.main')
@section('title', 'Halaman create')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/rayon/{{$rayon->id}}/update" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama rayon</label>
                    <input type="text" class="form-control" id="nama_rayon" value="{{$rayon->nama_rayon}}" name="nama_rayon" placeholder="Masukan nama_rayon">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pembimbing</label>
                    <input type="text" class="form-control" id="pembimbing"  value="{{$rayon->pembimbing}}" name="pembimbing" placeholder="Masukan pembimbing">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('rayon.index')}}" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>

    @endsection

