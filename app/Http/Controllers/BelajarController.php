<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
    	$title = 'Ini adalah judul halaman home';
    	$content = 'Dan ini adalah konten dari halaman index';
    	// $nami1 = '<b>hanya kurawal masing" 2</b>';
    	// $nami2 = '<b>pakai kurawal masing" 1 dan tanda seru masing" 2 didalam</b>';

    	return view('home.index', compact('title', 'content','nami1','nami2','nami3'));
    }

    public function getPage()
    {
    	$title = 'Ini adalah judul halaman HTML';
    	$content = 'Dan ini adalah konten dari halaman HTML';

    	return view('home.index2', compact('title', 'content'));    	
    }

    public function getOne()
    {
        $title = 'One to One Relationship';
        $content = 'Saat ini sedang belajar relasi one to one';
        $users = \App\User::get();

        return view('home.index', compact('title', 'content','users'));           
    }

    public function hasOne($nama)
    {
        $title = 'One to One Relationship';
        $content = 'Saat ini sedang belajar relasi one to one';
        $profile = \App\Profile::where('nama', $nama)->first();

        return view('home.index2', compact('title', 'content','profile'));     
    }

    public function getOneMany()
    {
        $title = 'One to Many and Many to One Relationship';
        $content = 'Saat ini sedang belajar relasi One to Many and Many to One';
        $users = \App\User::all();

        return view('one_to_many', compact('users','title', 'content'));        
    }

    public function getManyOne()
    {
        $title = 'One to Many and Many to One Relationship';
        $content = 'Saat ini sedang belajar relasi One to Many and Many to One';
        $kendaraans = \App\Kendaraan::all();

        return view('many_to_one', compact('kendaraans','title', 'content'));        
    } 

    public function getManytoMany($name='kadafi')
    {
        $title = 'Many to Many Relationship';
        $content = 'Saat ini sedang belajar relasi Many to Many';
        $users = \App\User::where('name', $name)->first();

        return view('many_to_many', compact('users','title','content','name'));        
    }        
}
