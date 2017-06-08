<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "Ari Ardiansyah";
    	return "Nama Saya Adalah : ".$a;
    }
    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }
    //passing data
    public function percobaan3()
    {
    	$a = 'Ari Ardiansyah';
    	return view('latihan.saya', compact('a'));
    }
     public function percobaan4()
    {
    	$a = 'Ari Ardiansyah';
    	$b = 'XII RPL 1';
    	$c = 'SMK ASSALAAM';
    	return view('latihan.saya', compact('a','b','c'));
    }
}
