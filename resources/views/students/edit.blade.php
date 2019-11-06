@extends('layout.main')
@section('title', 'LARALEARN-ADD STUDENT')

@section('content')
    <h3>Ubah Data Mahasiswa</h3>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="/students/{{$student->id}}">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" value=" {{$student->nim}} ">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" value=" {{$student->nama}} ">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value=" {{$student->jurusan}} ">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value=" {{$student->email}} ">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection