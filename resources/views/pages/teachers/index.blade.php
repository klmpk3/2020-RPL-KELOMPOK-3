@extends('layouts.TeacherMaster')
@section('content')
<style>
	.waves-effect.waves-brown .waves-ripple{
		background-color: rgba(121,85,72, 0.65); 
	}	
</style>

<h3>Daftar Kehadiran Siswa</h3>

	<a href="{{URL::to('/teachers')}}" class="btn btn-sm btn-warning waves-effect waves-green mr-1">Aktifkan Absen</a>

	<table border="1">
		<tr>
			<td>Nis</td>
			<td>Name</td>
			<td>status</td>				
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	

@endsection