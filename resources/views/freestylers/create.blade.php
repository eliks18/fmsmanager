@extends('layout')
@push('styles')
<style type="text/css">
	input#aka{
		text-transform: capitalize;
	}
</style>
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
		<form method="POST" action="{{route('freestyler.store')}}">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="country_id">País donde compite</label>
						<select class="form-control" id="country_id" name="country_id">
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
						<label for="aka">A.K.A.</label>
						<input type="text" class="form-control" id="aka" name="aka">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
</div>
@push('scripts')
@endpush
@endsection