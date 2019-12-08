@extends('layout')
@push('styles')
@endpush
@section('sidebar')
@include('sidebar')
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