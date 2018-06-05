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
		<table>
			<thead>
				<tr>
					<td>Kendaraan</td>
					<td>Buatan</td>
					<td>Pemilik</td>
				</tr>
			</thead>
			<tbody>
				@foreach($kendaraans as $kendaraan)
				<tr>
					<td>{{ $kendaraan->nama_kendaraan }}</td>
					<td>{{ $kendaraan->buatan }}</td>
					<td>{{ $kendaraan->user->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</center>
@endsection