@extends('layouts.app')

@section('title', $title)

@section('sidebar')
	@parent
	<li>PHP</li>
@endsection

@section('content')
	<center>
		<h1>{{ $title }}</h1>
		<p>{{ $content }}</p>
		@foreach($users as $user)
		<tr>
			<td>Nama : {{ $user->name }}</td>
		</tr>
		<table>
			<thead>
				<tr>
					<td>Kendaraan</td>
					<td>Jenis Kendaraan</td>
					<td>Buatan</td>
				</tr>
			</thead>
			<tbody>
				@foreach($user->kendaraans as $kendaraan)
				<tr>
					<td>{{ $kendaraan->nama_kendaraan }}</td>
					<td>{{ $kendaraan->jenis_kendaraan }}</td>
					<td>{{ $kendaraan->buatan }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endforeach
	</center>
@endsection