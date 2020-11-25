<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Siswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama_lengkap', 'nis', 'jenis_kelamin', 'kelas', 'jurusan'];
    protected $table = 'siswa'; /* laravel Eloquent will detect table has named `siswas` not `siswa` */
}
