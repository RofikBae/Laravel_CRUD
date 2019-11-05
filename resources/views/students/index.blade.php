@extends('layout.main')
@section('title', 'LARALEARN-STUDENTS')

@section('content')
    <h3>Daftar Mahasiswa</h3>
    <a class="btn btn-primary my-3" href="/students/create">Tambah Data Mahasiswa</a>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td> {{ $student->nim }} </td>
                      <td> {{ $student->nama }} </td>
                      <td> <span class="badge badge-primary badge-pill">Detail</span> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection