@extends('layout')
@push('styles')
@endpush
@section('sidebar')
<div class="row">
	<div class="col-md-12">
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action active">Inicio</a>
			<a href="{{route('league.index')}}" class="list-group-item list-group-item-action">Ligas</a>
			<a href="{{route('freestyler.index')}}" class="list-group-item list-group-item-action">Freestylers</a>
			<a href="{{route('season.index')}}" class="list-group-item list-group-item-action">Temporadas</a>
			<a href="{{route('session.index')}}" class="list-group-item list-group-item-action">Jornadas</a>
			<a href="{{route('battle.index')}}" class="list-group-item list-group-item-action">Batallas</a>
		</div>
	</div>
</div>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="jumbotron">
			<h1 class="display-4">FMS Manager</h1>
			<p class="lead">Este es un administrador de contenidos para FMS.</p>
			<hr class="mt-4">
			<p>Aquí se pueden gestionar los aspectos que componen la competencia.</p>
		</div>
	</div>
</div>
@push('scripts')
@endpush
@endsection