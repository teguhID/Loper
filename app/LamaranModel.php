<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LamaranModel extends Model
{
    protected $table = 'lamaran';
    protected $fillable = ['id_lowongan', 'id_pekerja', 'id_perusahaan', 'status'];
}
