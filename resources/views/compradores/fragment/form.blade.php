<div class="form-group">
	{!! Form::label('name', 'Nombre del Comprador') !!}
	{!! Form::Text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido del Comprador') !!}
	{!! Form::Text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('direccion', 'Direccion del Comprador') !!}
	{!! Form::Text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>