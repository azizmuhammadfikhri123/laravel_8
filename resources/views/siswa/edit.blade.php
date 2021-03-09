<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/siswa/'. $siswa->id . '/update')}}" method="post">
    @method('patch')
    @csrf
        <label>nama</label>
        <input type="text" name="nama" value="{{$siswa->nama}}" required><br>
        <label>alamat</label>
        <input type="text" name="alamat" value="{{$siswa->alamat}}" required><br>
        <label>no_hp</label>
        <input type="text" name="no_hp" value="{{$siswa->no_hp}}" required><br>
        <label>id_rayon</label>
        <input type="text" name="id_rayon" value="{{$siswa->id_rayon}}" required><br>
        <label>rombel</label>
        <input type="text" name="rombel" value="{{$siswa->rombel}}" required><br>
        <button type="submit">update</button>

    </form>
</body>
</html>
