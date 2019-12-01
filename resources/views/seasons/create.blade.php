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
			<a href="{{route('season.index')}}" class="list-group-item list-group-item-action active">Temporadas</a>
			<a href="{{route('session.index')}}" class="list-group-item list-group-item-action">Jornadas</a>
			<a href="{{route('battle.index')}}" class="list-group-item list-group-item-action">Batallas</a>
		</div>
	</div>
</div>
@endsection
@section('content')
@if(session()->has('message'))
<div class="row mb-2">
	<div class="col-md-12">
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	</div>
</div>
@endif
<div class="row mb-2">
	<div class="col-md-12">
		<form method="POST" action="{{route('season.store')}}">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="country_id">País</label>
						<select class="form-control" id="country_id" name="country_id" onchange="getNextSeason();">
							<option selected disabled>Elige una opción</option>
							@forelse($paises as $key => $pais)
							<option value="{{$pais->id}}">{{$pais->name_es}}</option>
							@empty
							@endforelse
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="season_no">Número de temporada</label>
						<input type="text" class="form-control" id="season_no" name="season_no" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="year">Año</label>
						<input type="text" class="form-control" id="year" name="year">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('js/seasons.js')}}"></script>
@endpush