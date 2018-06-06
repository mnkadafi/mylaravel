<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
    	$kendaraans = \App\Kendaraan::all();

    	return view('crud.kendaraan.view', compact('kendaraans'));
    }

    public function create()
    {
    	$users = \App\User::all();

    	return view('crud.kendaraan.create', compact('users'));
    }

    public function store(Request $request)
    {
    	$validate = \Validator::make($request->all(), [
    			'nama_kendaraan' => 'required',
    			'jenis_kendaraan' => 'required',
    			'made_in' => 'required',
    			'pemilik' => 'required'
    	],

    	$after_save = [
    			'alert' => 'danger',
    			'title' => 'Oh wait!!',
    			'text-1' => 'Ada kesalahan',
    			'text-2' => 'Silahkan coba lagi.'
    	]);

    	if($validate->fails()){
    		return redirect()->back()->with('after_save', $after_save);
    	}

    	$after_save = [
    			'alert' => 'success',
    			'title' => 'Good Job!!',
    			'text-1' => 'Tambah lagi',
    			'text-2' => 'atau kembali.'
    	];

    	$data = [
    		'nama_kendaraan' => $request->nama_kendaraan,
    		'jenis_kendaraan' => $request->jenis_kendaraan,
    		'buatan' => $request->made_in,
    		'user_id' => $request->pemilik
    	];

    	$store = \App\Kendaraan::insert($data);

    	return redirect()->back()->with('after_save', $after_save);
    }

    public function show($id)
    {
    	$users = \App\User::all();

    	$showById = \App\Kendaraan::find($id);

    	return view('crud.kendaraan.edit', compact('showById', 'users'));
    }

    public function update(Request $request, $id)
    {
    	$validate = \Validator::make($request->all(), [
    			'nama_kendaraan' => 'required',
    			'jenis_kendaraan' => 'required',
    			'made_in' => 'required',
    			'pemilik' => 'required'
    	],

    	$after_update = [
    			'alert' => 'danger',
    			'title' => 'Oh wait!!',
    			'text-1' => 'Ada kesalahan',
    			'text-2' => 'Silahkan coba lagi.'
    	]);

    	if($validate->fails()){
    		return redirect()->back()->with('after_update', $after_update);
    	}

    	$after_update = [
    			'alert' => 'success',
    			'title' => 'Good Job!!',
    			'text-1' => 'Update lagi',
    			'text-2' => '.'
    	];

    	$data = [
    		'nama_kendaraan' => $request->nama_kendaraan,
    		'jenis_kendaraan' => $request->jenis_kendaraan,
    		'buatan' => $request->made_in,
    		'user_id' => $request->pemilik
    	];

    	$update = \App\Kendaraan::where('id', $id)->update($data);

    	return redirect()->to('kendaraan')->with('after_update', $after_update);
    }    

    public function destroy($id)
    {
    	$after_hapus = [
    			'alert' => 'success',
    			'title' => 'Good Job!!',
    			'text-1' => 'Hapus lagi',
    			'text-2' => '.'
    	];

    	$hapus = \App\Kendaraan::find($id);
    	$hapus->delete();

    	return redirect()->to('kendaraan')->with('after_hapus', $after_hapus);
    }

}
