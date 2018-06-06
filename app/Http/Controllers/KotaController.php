<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
    	$kotas = \App\Kota::all();

    	return view('crud.kota.view', compact('kotas'));
    }
}
