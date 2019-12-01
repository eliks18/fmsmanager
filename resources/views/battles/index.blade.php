@extends('layout')
@push('styles')
@endpush
@section('sidebar')
<div class="row">
	<div class="col-md-12">
		<div class="list-group">
			<a href="{{url('/')}}" class="list-group-item list-group-item-action">Inicio</a>
			<a href="{{route('league.index')}}" class="list-group-item list-group-item-action">Ligas</a>
			<a href="{{route('freestyler.index')}}" class="list-group-item list-group-item-action">Freestylers</a>
			<a href="{{route('season.index')}}" class="list-group-item list-group-item-action">Temporadas</a>
			<a href="{{route('session.index')}}" class="list-group-item list-group-item-action">Jornadas</a>
			<a href="#" class="list-group-item list-group-item-action active">Batallas</a>
		</div>
	</div>
</div>
@endsection
@section('content')
	<div class="row mb-2">
		<div class="col-md-12">
			<a href="{{route('battle.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar una batalla</a>
		</div>
	</div>
@push('scripts')
@endpush
@endsection