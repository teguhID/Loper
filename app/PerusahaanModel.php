<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerusahaanModel extends Model
{
    protected $table = 'perusahaan';
    protected $fillable = ['id_perusahaan', 'nama_perusahaan', 'alamat', 'email', 'phone', 'web', 'deskripsi', 'jenis_usaha', 'logo', 'jam_kerja', 'karywan', 'karir'];
}
