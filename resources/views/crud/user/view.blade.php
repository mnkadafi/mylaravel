@extends('layouts.app')

@section('content')

<div class="panel panel-info">
	<div class="panel-heading">
		<center>
			<h1>CRUD Laravel 5.3</h1>
		</center>
	</div>
	<div class="panel-body">
		<a href="{{ URL('user/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
<!-- 		{{-- part alert --}}
		{{-- Kita cek, jika sessionnya ada maka tampilkan alertnya, jika tidak maka tidak ditampilkan alertnya --}}

		@if(Session::has('after_update'))
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>{{ Session::get('after_update.title') }}</strong>
					<a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
					</div>
				</div>
			</div>
		@endif
		@if(Session::has('after_hapus'))
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-{{ Session::get('after_hapus.alert') }}">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>{{ Session::get('after_hapus.title') }}</strong>
					<a href="javascript:void(0)" class="alert-link">{{ Session::get('after_hapus.text-1') }}</a> {{ Session::get('after_hapus.text-2') }}
					</div>
				</div>
			</div>
		@endif		
		{{-- end part alert --}} -->
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Kota</th>
					<th>Kendaraan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php(
						$no = 1 {{-- buat nomor urut --}}
					)
				{{-- loop all user --}}
				@foreach($users as $user)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->kota->nama_kota }}</td>
						<td>
						{{-- 
						--}}	
							@foreach($user->kendaraans as $kendaraan)
								{{ $kendaraan->nama_kendaraan }}<br/>
							@endforeach
						</td>
						<td>
							<center>
								<a href="{{ URL('user/show') }}/{{ $user->id }}" class="btn btn-sm btn-raised btn-info">Edit</a>
								<a href="{{ URL('user/destroy') }}/{{ $user->id }}" class="btn btn-sm btn-raised btn-danger">Hapus</a>
							</center>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop