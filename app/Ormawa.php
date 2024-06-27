<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $fillable = [
        'nama', 'nama_singkatan', 'slug', 'deskripsi', 'nama_instagram', 'oa_line', 'link_foto'
    ];
}
