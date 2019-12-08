@extends('layout')
@push('styles')
@endpush
@section('sidebar')
@include('sidebar')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="jumbotron">
			<h1 class="display-4">FMS Manager</h1>
			<p class="lead">Este es un administrador de contenidos para FMS.</p>
			<hr class="mt-4">
			<p>Aquí se pueden gestionar los aspectos que componen la competencia.</p>
		</div>
	</div>
</div>
@push('scripts')
@endpush
@endsection