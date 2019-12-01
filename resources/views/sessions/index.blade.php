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
			<a href="#" class="list-group-item list-group-item-action active">Jornadas</a>
			<a href="{{route('battle.index')}}" class="list-group-item list-group-item-action">Batallas</a>
		</div>
	</div>
</div>
@endsection
@section('content')
<div class="row mb-2">
	<div class="col-md-12">
		<a href="{{route('session.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar una jornada</a>
	</div>
</div>
<div class="row mb-2">
	<div class="col-md-12">
		<table id="seasons-table" class="table display" style="width:100%">
			<thead class="thead-dark">
				<tr>
					<th>No.</th>
					<th>Número de Temporada</th>
					<th>Liga</th>
					<th>Número de Jornada</th>
					<th>Ciudad</th>
				</tr>
			</thead>
			<tbody>
				@forelse( $jornadas as $key => $jornada )
				<tr>
					<th>{{ $key+1 }}</th>
					<th>{{ $jornada->season->season_no }}</th>
					<th>{{ $jornada->season->country->name_es }}</th>
					<th>{{ $jornada->session_no }}</th>
					<th>{{ $jornada->city }}</th>
				</tr>
				@empty
				<tr>
					<th colspan="4">Sin registros</th>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
@push('scripts')
@endpush
@endsection