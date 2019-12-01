@extends('layout')
@push('styles')
@endpush
@section('sidebar')
<div class="row">
	<div class="col-md-12">
		<div class="list-group">
			<a href="{{url('/')}}" class="list-group-item list-group-item-action">Inicio</a>
			<a href="#" class="list-group-item list-group-item-action active">Ligas</a>
			<a href="{{route('freestyler.index')}}" class="list-group-item list-group-item-action">Freestylers</a>
			<a href="{{route('season.index')}}" class="list-group-item list-group-item-action">Temporadas</a>
			<a href="{{route('session.index')}}" class="list-group-item list-group-item-action">Jornadas</a>
			<a href="{{route('battle.index')}}" class="list-group-item list-group-item-action">Batallas</a>
		</div>
	</div>
</div>
@endsection
@section('content')
	<div class="row mb-2">
		<div class="col-md-12">
			<a href="{{route('league.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar una liga</a>
		</div>
	</div>
	@forelse($leagues as $key => $league)
	<p>{{$league}}</p>
	@empty
	<div class="alert alert-warning" role="alert">
		Aún no hay ninguna liga registrada!
	</div>
	@endforelse
@push('scripts')
@endpush
@endsection