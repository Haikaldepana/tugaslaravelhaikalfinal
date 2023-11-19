<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')

@section('content')
    {{ $judul }}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">NIK</th>
                <th scope="col">Isi</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $pengaduan)
                <tr>
                    <th scope="row">{{ $pengaduan->nik }}</th>
                    <td>{{ $pengaduan->isi_laporan }}</td>
                    <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="100px"/></td>
                    <td>
                        {{-- <a href="hapus.php?id=<?= $pengaduan->id_pengaduan ?>">Hapus</a> --}}
                        <a href={{ url("/hapus-pengaduan/$pengaduan->id_pengaduan")}}>Hapus</a>
                        <a href={{ url("/detail-pengaduan/$pengaduan->id_pengaduan")}}>Detail</a>
                        <a href={{ url("/update-pengaduan/$pengaduan->id_pengaduan")}}>Update</a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>