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
@push('scripts')
@endpush
@endsection