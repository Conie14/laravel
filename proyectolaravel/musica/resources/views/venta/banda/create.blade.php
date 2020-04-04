@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo banda</h3>
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
			{!!Form::open(array('url'=>'venta/banda','method'=>'POST','autocomplete'=>'off'))!!}
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="Genero">Genenero</label>
				<input type="text" name="Genero" class="form-control" placeholder="Genero">
			</div>
			<div class="form-group">
				<label for="Integrantes">Integrantes</label>
				<input type="text" name="Integrantes" class="form-control" placeholder="Integrantes">
			</div>
			<div class="form-group">
				<label for="">Id_factura</label>
				<select name="Id_factura" class="form-control">
					@foreach($facturas as $cat)
					<option value="{{$cat->Id_factura}}">{{$cat->No_contrato}}</option>
					@endforeach
				</select>
				
			<div class="form-group">
				<label for="Importe">Correo</label>
				<input type="text" name="Correo" class="form-control" placeholder="Correo">
			</div>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Telefono">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection