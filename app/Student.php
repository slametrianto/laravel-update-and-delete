<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // table tidak jamak 's' nama databse tdk menggunakan 's
    // protected $table = 'mahasiswa';

    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
