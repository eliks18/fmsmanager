@extends('layout')
@push('styles')
@endpush
@section('sidebar')
<div class="row">
	<div class="col-md-12">
		<div class="list-group">
			<a href="{{url('/')}}" class="list-group-item list-group-item-action">Inicio</a>
			<a href="{{route('league.index')}}" class="list-group-item list-group-item-action active">Ligas</a>
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
		<form>
			<div class="form-group">
				<label for="pais">País</label>
				<select class="form-control" id="pais" name="pais">
					<option selected disabled>Elige una opción</option>
					@forelse($paises as $key => $pais)
					<option>{{$pais->name_es}}</option>
					@empty
					@endforelse
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@push('scripts')
@endpush
@endsection