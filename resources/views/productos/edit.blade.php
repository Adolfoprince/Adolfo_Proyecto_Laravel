@extends('layouts.app')

@section('content')
	<div>
		<h2>
			Editar Producto
			<a href="{{ route('productos.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('productos.fragment.error')
		
		{!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT']) !!}
			@include('productos.fragment.form')
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection