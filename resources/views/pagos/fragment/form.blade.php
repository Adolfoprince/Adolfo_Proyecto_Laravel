<div class="form-group">
	{!! Form::label('name_producto', 'Nombre del Producto') !!}
	{!! Form::Text('name_producto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipo_pago', 'Tipo de Pago') !!}
	{!! Form::Text('tipo_pago', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>