<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>

@extends("layout-2")

@section("konten")
@include("menu")


    <h2>Data Penduduk</h2>
    Hari ini tanggal: {{$tgl}}
    <hr>

<h3>List Nama</h3>

    <lu>
        @foreach($data_warga as $index => $data_warga)
            <li>{{ $data_warga->nama}}</li>
    </lu>
        @endforeach

@endsection

</body>
</html>