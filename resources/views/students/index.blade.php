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
                @foreach ($students as $student)
                <tbody>
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td> {{ $student->nim }} </td>
                      <td> {{ $student->nama }} </td>
                      <td> <a href="/students/{{$student->id}}" class="badge badge-primary badge-pill">Detail</a> </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>

@endsection