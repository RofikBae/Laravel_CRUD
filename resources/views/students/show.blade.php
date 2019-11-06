@extends('layout.main')
@section('title', 'LARALEARN-STUDENTS')

@section('content')
    <h3>Detail Mahasiswa</h3>

    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> {{ $student->nama }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $student->nim }} </h6>
                    <p class="card-text"> {{ $student->jurusan }} </p>
                    <p class="card-text"> {{ $student->email }} </p>
                    <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form method="POST" action="/students/{{$student->id}}" class="d-inline">
                        @csrf 
                        @method('delete')<button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection