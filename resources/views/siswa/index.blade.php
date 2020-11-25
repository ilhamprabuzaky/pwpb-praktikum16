@extends('layout/main')
@section('title', 'Daftar Siswa | SMK Negeri 4 Bandung')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">

            <div class="row mt-4 ">
                <div class="col">
                    <h1 class="float-left">Daftar Siswa</h1>
                    <a href="{{ url('siswa/create') }}" class="btn btn-outline-primary mt-3 mb-1 float-right">Tambah
                        Data Siswa</a>
                </div>
            </div>

            @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
            @endif

            <hr class="mb-3">

            <ul class="list-group">
                @forelse ($siswa as $s)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $s->nama_lengkap }}

                    <a href="/siswa/{{ $s->id }}" class="badge badge-info">detail</a>
                </li>
                @empty
                <h3 class="font-italic text-danger">Data masih kosong!</h3>
                @endforelse
            </ul>

        </div>
    </div>
</div>
@endsection