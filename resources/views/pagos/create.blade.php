@extends('layouts.app')

@section('content')
	<div>
		<h2>
			Nuevo Pago
			<a href="{{ route('pagos.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('pagos.fragment.error')

		{!! Form::open(['route' => 'pagos.store']) !!}
			@include('pagos.fragment.form')
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection