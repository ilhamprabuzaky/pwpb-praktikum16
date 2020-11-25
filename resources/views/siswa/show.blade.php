@extends('layout/main')
@section('title', 'Detail Siswa | SMK Negeri 4 Bandung')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">

            <h1 class="mt-4">Detail Siswa</h1>

            <hr class="mb-3">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $siswa->nama_lengkap }}
                        @if ($siswa->jenis_kelamin === 'L')
                        <label class="btn btn-primary float-right">{{ $siswa->jenis_kelamin }}</label>
                        @else
                        <label class="btn btn-danger float-right">{{ $siswa->jenis_kelamin }}</label>
                        @endif
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $siswa->nis }}</h6>
                    <p class="card-text text-info">{{ $siswa->kelas }}</p>
                    <p class="card-text">{{ $siswa->jurusan }}</p>
                    {{-- btn btn-outline-info --}}
                    <a href="{{ url('/siswa/table') }}" class="card-link">Kembali</a>
                    <a href="{{ url('/siswa') }}/{{ $siswa->id }}/edit"
                        class="btn btn-outline-primary float-right">Edit</a>
                    <form action="/siswa/{{ $siswa->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger float-right mr-2"
                            onclick="return confirm(`Apakah anda yakin akan menghapus siswa ini?`)" ;>Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection