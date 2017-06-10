<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table="siswas";
    //yg bisa diisi
    protected $fillable=['nama','alamat','jk'];
    //yg bisa dilihat
    protected $visible=['nama','alamat','jk'];
    public $timestamps=true;
}
