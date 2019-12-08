@extends('layout')
@push('styles')
@endpush
@section('sidebar')
@include('sidebar')
@endsection
@section('content')
<div class="row mb-2">
	<div class="col-md-12">
		<a href="{{route('season.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>
			Agregar una temporada
		</a>
	</div>
</div>
<div class="row mb-2">
	<div class="col-md-12">
		<table id="seasons-table" class="table display" style="width:100%">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Número de Temporada</th>
					<th>Liga</th>
					<th>Año</th>
				</tr>
			</thead>
			<tbody>
				{{-- {{ dd($temporadas) }} --}}
				@forelse( $temporadas as $key => $temporada )
				<tr>
					<th>{{ $key+1 }}</th>
					<th>{{ $temporada->season_no }}</th>
					<th>{{ $temporada->country->name_es }}</th>
					<th>{{ $temporada->year }}</th>
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