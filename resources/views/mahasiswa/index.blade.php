@extends('layout.master')
@section('title', 'Halaman Mahasiswa')

@section('content')
<h2>Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($allmahasiswa as $item)
            <tr>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
