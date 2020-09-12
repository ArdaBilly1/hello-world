@extends('layout.main')

@section('title', 'Edit Data Mahasiswa')

    
@section('container')
<div class="container">
    <form method="post" action="/mahasiswa/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Agung Gumelar"  value="{{ $student->nama }}">
            @error('nama')
            <div class="invalid-feedback">
                {{-- {{ $message }} --}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" placeholder="17321234"  value="{{ $student->nim }}">
            <div class="invalid-feedback">
                {{-- {{ $message }} --}}
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Kebayoran"  value="{{ $student->alamat }}">
            <div class="invalid-feedback">
                {{-- {{ $message }} --}}
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">edid</button>
    </form>
</div>
    

@endsection