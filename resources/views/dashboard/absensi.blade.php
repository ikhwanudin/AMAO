@extends('layouts.dashboard')

@section('content')
	<h1>Absensi</h1>
	<p class="lead">Halaman ini digunakan untuk manage absensi anggota</p>
	<hr>
	<form>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h5>Nama</h5>
				</div>
				<div class="col-md-1">
					Hadir
				</div>
				<div class="col-md-1">
					Izin
				</div>
				<div class="col-md-1">
					Sakit
				</div>
				<div class="col-md-1">
					Alpha
				</div>			
			</div>
			<hr>
			<div class="row mt-1">
				<div class="col-md-8">
					<h5>Nur Ikhwanudin</h5>
				</div>
				<div class="col-md-4 statusAbsen">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-primary">
					    <input type="radio" name="options" id="option1" autocomplete="off" checked> Hadir
					  </label>
					  <label class="btn btn-success">
					    <input type="radio" name="options" id="option2" autocomplete="off"> Izin
					  </label>
					  <label class="btn btn-warning">
					    <input type="radio" name="options" id="option3" autocomplete="off"> 
					    Sakit
					  </label>
					  <label class="btn btn-danger active">
					    <input type="radio" name="options" id="option3" autocomplete="off"> 
					    Alpha
					  </label>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection