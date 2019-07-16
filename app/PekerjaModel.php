<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PekerjaModel extends Model
{
    protected $table = 'pekerja';
    protected $fillable = ['id_pelamar', 'nama','tempat_lahir', 'tanggal_lahir', 'alamat', 'kota', 'negara', 'jenis_kelamin', 'status_perkawinan', 'agama', 'berat_badan', 'tinggi_badan', 'phone', 'email', 'blog', 'web', 'keahlian1', 'keahlian2', 'keahlian3', 'keahlian4','facebook', 'twitter', 'instagram', 'linkedin',
                            'github', 'tahun_lulus_sd', 'tahun_lulus_smp', 'tahun_lulus_sma', 'tahun_lulus_s1', 'tahun_lulus_s2', 'tahun_lulus_s3', 'nama_sd', 'nama_smp', 'nama_sma', 'nama_s1', 'nama_s2', 'nama_s3', 'jurusan_sma', 'jurusan_s1', 'jurusan_s2', 'jurusan_s3', 'pengalaman_perusahaan1', 'pengalaman_perusahaan2', 'pengalaman_perusahaan3', 'pengalaman_jabatan1', 'pengalaman_jabatan2', 'pengalaman_jabatan3', 'pengalaman_lama_kerja1', 'pengalaman_lama_kerja2', 'pengalaman_lama_kerja3', 'foto', 'updated_at', 'created_at']; 
}
