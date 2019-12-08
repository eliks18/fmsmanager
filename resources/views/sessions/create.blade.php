@extends('layout')
@push('styles')
@endpush
@section('sidebar')
@include('sidebar')
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
		<form method="POST" action="{{route('session.store')}}">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="season_id">Temporada</label>
						<select class="form-control" id="season_id" name="season_id">
							<option selected disabled>Elige una opción</option>
							@forelse($temporadas as $key => $temporada)
							<option value="{{$temporada->id}}">{{$temporada->country->name_es.' - Temporada '.$temporada->season_no}}</option>
							@empty
							@endforelse
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="session_no">Número de jornada</label>
						<input type="text" class="form-control" id="session_no" name="session_no">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="city">Ciudad</label>
						<input type="text" class="form-control" id="city" name="city">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
</div>
@endsection
@push('scripts')
@endpush