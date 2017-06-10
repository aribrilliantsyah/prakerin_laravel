<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function Percobaan()
    {
    	$a = Siswa::all();
    	return view('siswa',compact('a'));
    }
}
