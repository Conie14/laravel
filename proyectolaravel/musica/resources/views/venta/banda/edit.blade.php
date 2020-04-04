@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar banda: {{ $banda->Nombre}}</h3>
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
			
		     {!!Form::model($banda,['method'=>'PATCH','route'=>['banda.update',$banda->Id_banda]])!!}
		    
			<div class="form-group">
				<label for="Id_banda">Id_banda</label>
				<input type="text" name="Id_banda" class="form-control" value="{{$banda->Id_banda}}" placeholder="Id_banda">
			</div>
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="{{$banda->Nombre}}" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="Genero">Genero</label>
				<input type="text" name="Genero" class="form-control"  value="{{$banda->Genero}}" placeholder="Genero">
			</div>
			<div class="form-group">
				<label for="Integrantes">Integrantes</label>
				<input type="text" name="Integrantes" class="form-control" value="{{$banda->Integrantes}}"placeholder="Integrantes">
			</div>
			<div class="form-group">
				<label for="Id_factura">Id_factura</label>
				<input type="text" name="Id_factura" class="form-control" value="{{$banda->Id_factura}}"placeholder="Id_factura">
			</div>
			<div class="form-group">
				<label for="Correo">Correo</label>
				<input type="text" name="Correo" class="form-control" value="{{$banda->Correo}}" placeholder="Correo">
			</div>
					<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" value="{{$banda->Telefono}}" placeholder="Telefono">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection