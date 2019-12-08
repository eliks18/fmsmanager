@extends('layout')
@push('styles')
@endpush
@section('sidebar')
@include('sidebar')
@endsection
@section('content')
<div class="row mb-2">
	<div class="col-md-12">
		<a href="{{route('freestyler.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar un freestyler</a>
	</div>
</div>
<div class="row mb-2">
	<div class="col-md-12">
		<table id="freestylers-table" class="table display" style="width:100%">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>A.K.A.</th>
					<th>País</th>
				</tr>
			</thead>
			<tbody>
				@forelse( $freestylers as $key => $freestyler )
				<tr>
					<th>{{ $key+1 }}</th>
					<th>{{ $freestyler->aka }}</th>
					<th>{{ $freestyler->country->name_es }}</th>
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