<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowonganModel extends Model
{
    protected $table = 'lowongan';
    protected $fillable = ['id_lowongan', 'id_perusahaan', 'judul', 'deskripsi', 'perusahaan', 'tempat', 'deadline', 'email', 'phone', 'web', 'created_at', 'updated_at'];
}
