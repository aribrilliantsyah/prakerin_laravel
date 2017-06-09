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
    public function percobaan5()
    {
    	$a=1;
    	$b=2;
    	$c=3;
    	return view('seleksi',compact('a','b','c'));
    }
    public function percobaan6()
    { 
        $nomor=99;
    	$buah = ['mangga','jeruk','apel','anggur'];
    	return view('buah',compact('nomor','buah'));
    }

    public function percobaan7()
    { 
        $binatang = ['Sapi','Monyet','Ikan Tuna','Belalang','Burung Kakatua'];
        $komputer = ['Asus','Dell','Toshiba','Samsung','Acer','Axioo','Hp'];
        $buah = ['Mangga','Jeruk','Apel','Anggur','Melon','Manggis'];
        return view('latihan.all',compact('binatang','buah','komputer'));
    }
    
    //percobaan pilih menu
    public function param1($pilih)
    {
        $campur = ['binatang'=>['kucing','burung','ikan'],
                   'komputer'=>['Asus','Dell','Toshiba'],
                   'buah'=>['Mangga','Jeruk','Appel']];

       
        $baru=$campur[$pilih];
        
         return view('all1',compact('baru','pilih'));
         

    }

    public function param($pilih,$jenis)
    {
        
        $campur = ['binatang'=>['kucing'=>['Persia','Garong','Anggora'],
                                'burung'=>['piit','japati','puyuh'],
                                'ikan'=>['Sepat','Tuna','Hiu']],
                   'komputer'=>['Asus'=>['Laptop','pc','smartphone'],
                                'Dell'=>['Laptop','Pad','Monitor'],
                                'Toshiba'=>['Laptop','Monitor','Pc']],
                   'buah'=>['Mangga'=>['lokal','campur','import'],'Jeruk'=>['bangkok','lokal','sopak'],'Apel'=>['tokyo','indo','malang'] ]];
        $anyar=$campur[$pilih];
        $baru=$anyar[$jenis];
         return view('all',compact('baru','pilih','jenis','anyar'));
         

    }
  


    
     
}
