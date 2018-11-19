@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
	<div class="panel-title">
		<h1>Comprador</h1>
	</div>
	

	<div class="panel-body">

		<form action="{{ url('comprador') }}" method="POST">
		{{csrf_field() }}

		<div class="form-group">
			<label for="name" class="control-label">Nombre</label>
			<input type="text" name="name"
			class="form-control">
		</div>

		<div class="form-group">
			<label for="apellido" class="control-label">Apellido</label>
			<input type="text" name="apellido"
			class="form-control">
		</div>

		<div class="form-group">
			<label for="cedula" class="control-label">Cedula</label>
			<input type="text" name="cedula"
			class="form-control">
		</div> 

		<div class="form-group">
			<label for="direccion" class="control-label">Direccion</label>
			<input type="text" name="direccion"
			class="form-control">
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">
				<i class="fa fa-plus"></i>Registrar Comprador
					
				</button>	
			</div>	
		</form>
	</div>
</div>
@endsection