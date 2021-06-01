@extends('layout.master')
@section('title', 'Halaman Prodi')

@section('content')
<h2>Prodi</h2>
<table class="table table-striped">
    <thread>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Prodi</th>
        </tr>
    </thread>
    <tbody>
    @foreach ($allmahasiswaprodi as $item)
        <tr>
            <td> {{ $item->npm }} </td>
            <td> {{ $item->nama_mahasiswa }} </td>
            <td> {{ $item->nama_prodi }} </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection