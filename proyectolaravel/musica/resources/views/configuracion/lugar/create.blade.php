@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Lugar</h3>
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
			{!!Form::open(array('url'=>'configuracion/lugar','method'=>'POST','autocomplete'=>'off'))!!}
			<div class="form-group">
				<label for="Pais">Pais</label>
				<input type="text" name="Pais" class="form-control" placeholder="Pais">
			</div>
			<div class="form-group">
				<label for="Estado">Estado</label>
				<input type="text" name="Estado" class="form-control" placeholder="Estado">
			</div>
			<div class="form-group">
				<label for="Codigo_postal">Codigo_postal</label>
				<input type="text" name="Codigo_postal" class="form-control" placeholder="Codigo_postal">
			</div>

			<div class="form-group">
				<label for="Calle">Calle</label>
				<input type="text" name="Calle" class="form-control" placeholder="Calle">
			</div>
			<div class="form-group">
				<label for="Colonia">Colonia</label>
				<input type="text" name="Colonia" class="form-control" placeholder="Colonia">
			</div>
			<div class="form-group">
				<label for="">Banda</label>
				<select name="Id_banda" class="form-control">
					@foreach($bandas as $cat)
					<option value="{{$cat->Id_banda}}">{{$cat->Nombre}}</option>
					@endforeach
				</select>
				
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection