@extends('layout.main')

@section('title', 'Detail Mahasiswa')

    
@section('container')
    <div class="container">
        <h3>Ini Detail Mahasiswa</h3>
        <div class="card text-black bg-white mb-5" style="max-width: 18rem;">
            <div class="card-header">{{ $student->nama }} </div>
            <div class="card-body">
              <p class="card-title">{{ $student->nim }}</p>
              <p class="card-text">{{ $student->alamat }}</p>
              <p class="card-text">dibuat= {{ $student->created_at }}</p>
              <div class="row">
                  <div class="col-sm-6">
                    <a href="{{ $student->id }}/edit" class="badge badge-info badge-pill">edit</a>
                  </div>
                  <div class="col-sm-6">
                    {{-- <a href="/deleteMhs/{{ $student->id }}" class="badge badge-danger badge-pill">delete</a> --}}
                    <form action="{{ $student->id }}" method="post" >
                      @method('delete')
                      @csrf
                      <button class="badge badge-danger badge-pill" type="submit"> Delete</button>
                    </form>
                  </div>
              </div>
            </div>
    </div>
    

@endsection