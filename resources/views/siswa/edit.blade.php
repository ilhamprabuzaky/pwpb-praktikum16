@extends('layout/main')
@section('title', 'Form Ubah Data Siswa')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4">Form Ubah Data Siswa</h1>
            <hr>

            <form method="POST" action="{{ url('/siswa') }}/{{ $siswa->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="number" class="form-control
                                    
                    @error('nis')
                        is-invalid
                    @enderror    
                    
                    " id="nis" name="nis" value="{{ $siswa->nis }}">
                    <small id="nisHelp" class="form-text text-muted">We'll never share your nis with anyone
                        else.</small>
                    @error('nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_lengkap">Nama</label>
                    <input type="text" class="form-control

                    @error('nama_lengkap')
                        is-invalid
                    @enderror
                    
                    " id="nama_lengkap" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-2 mt-3">
                        <label for="inputCity">Jenis Kelamin</label>
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="lk" name="jenis_kelamin" class="custom-control-input" value="L"
                                {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="lk">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="pr" name="jenis_kelamin" class="custom-control-input" value="P"
                                {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="pr">Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" class="form-control" name="jurusan">
                            <option disabled>✔ Pilih jurusan</option>
                            @foreach ($jurusan as $j)
                            <option value="{{ $j }}" {{ old('jurusan') == $j ? 'selected' : '' }}>{{ $j }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-5 float-right">Ubah Data</button>
            </form>


        </div>
    </div>
</div>
@endsection