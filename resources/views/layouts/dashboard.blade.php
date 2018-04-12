@extends('layouts.master')

@section('main')
	@include('partials.navbar')
	<div class="container">
		<div class="row my-3">
			<div class="col-md-3">
				@include('partials.sidebar')
			</div>
			<div class="col-md-9">
				@yield('content')
			</div>
		</div>
	</div>
@endsection