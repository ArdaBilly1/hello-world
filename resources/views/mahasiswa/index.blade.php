@include('layout.header')
@include('layout.sidebar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mt-4">Ini Mahasiswa</h1>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-4 float-right">
                        <a href="/mahasiswa/create" class="btn btn-primary"> Buat data Mhs baru</a>
                    </div>
                    
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
                                <a href="/mahasiswa/{{ $mhs->id }}/edit" class="badge badge-primary">edit</a>
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
    <div class="container">
        <div class="col-5">
            <ul class="list-group">
                @foreach ($mahasiswa as $mhs)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $mhs->nama }}
                    <a href="mahasiswa/{{ $mhs->id }}" class="badge badge-info badge-pill">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@include('layout.footer')