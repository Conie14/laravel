@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cliente: {{ $cliente->Nombre}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>
						{{$error}}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			
		     {!!Form::model($cliente,['method'=>'PATCH','route'=>['cliente.update',$cliente->Id_cliente]])!!}
		    
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="{{$cliente->Nombre}}" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="Apellido">Apellido</label>
				<input type="text" name="Apellido" class="form-control" value="{{$cliente->Apellido}}" placeholder="Apellido">
			</div>
			<div class="form-group">
				<label for="Correo">Correo</label>
				<input type="text" name="Correo" class="form-control"  value="{{$cliente->Correo}}" placeholder="Correo">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" value="{{$cliente->Telefono}}"placeholder="Telefono">
			</div>
			<div class="form-group">
				<label for="Edad">Edad</label>
				<input type="text" name="Edad" class="form-control" value="{{$cliente->Edad}}"placeholder="Edad">
			</div>
			<div class="form-group">
				<label for="No_factura">No_factura</label>
				<input type="text" name="No_factura" class="form-control" value="{{$cliente->No_factura}}" placeholder="No_factura">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}




		</div>
	</div>

@endsection