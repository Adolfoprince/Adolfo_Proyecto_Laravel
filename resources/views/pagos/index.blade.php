@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>Listado de Pagos
		<a href="{{ route('pagos.create')  }}" class="btn btn-primary pull-right">Registrar</a>
		<a href="{{ url('menu')  }}" class="btn btn-primary pull-right">Menu</a>
		</h2>
		@include('pagos.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del Producto</th>
					<th>Tipo de Pago</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($pagos as $pago)
				<tr>
					<td>{{ $pago->id }}</td>
					<td><strong>{{ $pago->name_producto }}</strong></td>
					<td><strong>{{ $pago->tipo_pago }}</strong></td>
					
					<td>
					<a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-primary pull-right">Editar</a>
					</td>
					<td>
					<form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-warning pull-right">Borrar</button>
					</form>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $pagos->render() !!}
	</div>

	<div class="col-sm-4">
		@include('pagos.fragment.aside')
	</div>

@endsection