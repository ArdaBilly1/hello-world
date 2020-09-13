@extends('layout.main')
@section('title','index mahasiswa')
    
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-10">               
                <div class="col-sm-8">
                    <h1 class="mt-4">Data Mahasiswa</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                    <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>
                            <a href="mahasiswa/{{ $mhs->id }}" class="badge badge-info badge-pill">Detail</a>
                            <a href="/mahasiswa/{{ $mhs->id }}/edit" class="badge badge-primary badge-pill">edit</a>
                            <form action="/mahasiswa/{{ $mhs->id }}" method="post" class="d-inline" >
                                @method('delete')
                                @csrf
                                <button class="badge badge-danger badge-pill" type="submit"> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <hr>
</div>

@endsection
