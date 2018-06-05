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
					<td>Username</td>
					<td>Email</td>
					<td>Nama Lengkap</td>
					<td>Jenis Kelamin</td>
					<td>Alamat</td>
					<td>No. Telp</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->profile->nama }}</td>
						<td>{{ $user->profile->jenis_kelamin }}</td>
						<td>{{ $user->profile->alamat }}</td>
						<td>{{ $user->profile->no_telp }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</center>
@endsection