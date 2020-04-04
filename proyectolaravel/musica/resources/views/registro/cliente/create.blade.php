@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo cliente</h3>
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
			{!!Form::open(array('url'=>'registro/cliente','method'=>'POST','autocomplete'=>'off'))!!}
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="Apellido">Apellido</label>
				<input type="text" name="Apellido" class="form-control" placeholder="Apellido">
			</div>
			<div class="form-group">
				<label for="Correo">Correo</label>
				<input type="text" name="Correo" class="form-control" placeholder="Correo">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Telefono">
			</div>
			<div class="form-group">
				<label for="Edad">Edad</label>
				<input type="text" name="Edad" class="form-control" placeholder="Edad">
			</div>
			<div class="form-group">
				<label for="No_factura">No_factura</label>
				<input type="text" name="No_factura" class="form-control" placeholder="No_factura">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}




		</div>
	</div>

@endsection