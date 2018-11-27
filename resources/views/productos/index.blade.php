@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>Listado de Productos
		<a href="{{ route('productos.create') }}" class="btn btn-primary pull-right">Registrar</a>
		<a href="{{ url('menu')  }}" class="btn btn-primary pull-right">Menu</a>
		</h2>
		@include('productos.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del comprador</th>
					<th>Nombre del Producto</th>
					<th>Descripcion</th>
					<th>Fabricante</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					<tr>
						<td>{{ $producto->id }}</td>
						<td><strong>{{ $producto->name_comprador }}</strong></td>
						<td><strong>{{ $producto->name }}</strong></td>
						<td><strong>{{ $producto->descripcion }}</strong></td>
						<td><strong>{{ $producto->fabricante }}</strong></td>
						<td>
						<a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary pull-right">Editar</a>
						</td>
						<td>
							<form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-warning pull-right">Borrar</button>
					</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $productos->render() !!}
	</div>
	<div class="col-sm-4">
		@include('productos.fragment.aside')
	</div>





@endsection