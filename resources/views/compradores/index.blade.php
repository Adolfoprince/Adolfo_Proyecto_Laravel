@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>Listado de Compradores
		<a href="{{ route('compradores.create')  }}" class="btn btn-primary pull-right">Registrar</a>
		<a href="{{ url('menu')  }}" class="btn btn-primary pull-right">Menu</a>
		</h2>
		@include('compradores.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del Comprador</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($compradores as $comprador)
				<tr>
					<td>{{ $comprador->id }}</td>
					<td><strong>{{ $comprador->name }}</strong></td>
					<td><strong>{{ $comprador->apellido }}</strong></td>
					<td><strong>{{ $comprador->direccion }}</strong></td>
					
					<td>
					<a href="{{ route('compradores.edit', $comprador->id) }}" class="btn btn-primary pull-right">Editar</a>
					</td>
					<td>
					<form action="{{ route('compradores.destroy', $comprador->id) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-warning pull-right">Borrar</button>
					</form>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $compradores->render() !!}
	</div>

	<div class="col-sm-4">
		@include('compradores.fragment.aside')
	</div>

@endsection