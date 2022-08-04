@extends('layouts.app')

@section('content')
<div class="flex justify-content-center">
	<div class="card card-primary card-outline col-md-6">
		<div class="card-body box-profile">
			<div class="text-center">
				<img class="profile-user-img img-fluid img-circle"
				src="../../dist/img/user4-128x128.jpg"
				alt="User profile picture">
			</div>
			<h3 class="profile-username text-center">{{ $terapeuta->nombre }}</h3>
			<div class="text-center">
				<p class="text-muted">{{ $terapeuta->correo }}</p>
				<p class="text-muted">{{ $terapeuta->telefono }}</p>
				<p class="text-muted">{{ $terapeuta->pais }}</p>
			</div>
			<ul class="list-group list-group-unbordered mb-3">
				<li class="list-group-item">
					<b>Cursos tomados</b> <a class="float-right">1,322</a>
				</li>
				<li class="list-group-item">
					<b>Cursos completados</b> <a class="float-right">543</a>
				</li>
				<li class="list-group-item">
					<b>etc</b> <a class="float-right">13,287</a>
				</li>
			</ul>
			{{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
		</div>
	</div>
</div>
@endsection