<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $siswa = DB::table('students')->get(); /* Query Builder */
        // $siswa = Student::all();
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function table()
    {
        $siswa = Siswa::all();
        return view('siswa.table', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('siswa.create', ['jurusan' => ['Rekayasa Perangkat Lunak', 'Teknik Komputer Jaringan', 'Teknik Audio Video', 'Multimedia']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*   $siswa = new Siswa;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->nis = $request->nis;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;

        $siswa->save(); */

        $request->validate([
            'nama_lengkap' => 'required',
            'nis' => 'required|size:10',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Siswa::create($request->all());
        return redirect('/siswa/table')->with('status', 'Data Siswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param \App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param \App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'), ['jurusan' => ['Rekayasa Perangkat Lunak', 'Teknik Komputer Jaringan', 'Teknik Audio Video', 'Multimedia']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param \App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nis' => 'required|size:10',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Siswa::where('id', $siswa->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'nis' => $request->nis,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
            ]);
        return redirect('/siswa/table')->with('status', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param \App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        siswa::destroy($siswa->id);
        return redirect('/siswa/table')->with('status', 'Data Siswa Berhasil Dihapus!');
    }
}
