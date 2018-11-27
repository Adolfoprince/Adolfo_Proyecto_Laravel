<div class="form-group">
	{!! Form::label('name_comprador', 'Nombre del Comprador') !!}
	{!! Form::Text('name_comprador', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('name', 'Nombre del Producto') !!}
	{!! Form::Text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion del Producto') !!}
	{!! Form::Text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('fabricante', 'Fabricante del Producto') !!}
	{!! Form::Text('fabricante', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>