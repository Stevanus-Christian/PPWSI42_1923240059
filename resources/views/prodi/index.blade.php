@extends('layout.master')
@section('title', 'Halaman List Prodi')

@section('content')
<div class="row pt-4">
    <div class="col">
        <h2>Prodi</h2>
        <div class="d-md-flex justify-content-md-end">
        <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-hover">
            <thread>
                <tr>
                    <th>Logo</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <tbody>
            @foreach ($prodis as $item)
                <tr>
                    <td><img src="{{ asset('storage/'.$item->foto) }}" width="100px"</td>
                    <td> {{ $item->nama }} </td>
                    <td>
                        <form action="{{ route('prodi.destroy', ['prodi' => $item->id]) }}"
                        method="POST">
                            <a href="{{ url('/prodi/'.$item->id) }}" class="btn btn-warning">Details</a>
                            <a href="{{ url('/prodi/'.$item->id.'/edit') }}" class="btn btn-info">Edit</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection