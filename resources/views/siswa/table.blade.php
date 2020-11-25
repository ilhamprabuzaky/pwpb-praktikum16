@extends('layout/main')
@section('title', 'Tabel Siswa | SMK Negeri 4 Bandung')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row mt-4 ">
                <div class="col">
                    <h1 class="mt-3 float-left">Tabel Siswa</h1>
                    <a href="{{ url('siswa/create') }}" class="btn btn-outline-primary mt-4 float-right">Tambah
                        Data Siswa</a>
                </div>
            </div>

            @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
            @endif

            <hr class="mb-3">
            <table class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $s)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->kelas }}</td>
                        <td>{{ $s->jurusan }}</td>
                        <td>
                            <a href="/siswa/{{ $s->id }}/edit" class="badge badge-primary ">Edit</a>
                            <a href="/siswa/{{ $s->id }}" class="badge badge-info">detail</a>
                        </td>
                    </tr>
                    @empty
                    <h3>No Data Exist!</h3>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection