@extends('layouts.app')

@section('content')
	<div>
		<h2>
			Editar Comprador
			<a href="{{ route('compradores.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('compradores.fragment.error')
		
		{!! Form::model($comprador, ['route' => ['compradores.update', $comprador->id], 'method' => 'PUT']) !!}
			@include('compradores.fragment.form')
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection