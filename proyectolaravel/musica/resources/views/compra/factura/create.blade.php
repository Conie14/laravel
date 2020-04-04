@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo factura</h3>
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
			{!!Form::open(array('url'=>'compra/factura','method'=>'POST','autocomplete'=>'off'))!!}
			<div class="form-group">
				<label for="No_contrato">No_contrato</label>
				<input type="text" name="No_contrato" class="form-control" placeholder="No_contrato">
			</div>
			<div class="form-group">
				<label for="">Id_cliente</label>
				<select name="Id_cliente" class="form-control">
					@foreach($clientes as $cat)
					<option value="{{$cat->Id_cliente}}">{{$cat->Nombre}}</option>
					@endforeach
				</select>
				
			</div>
				<label for="">Id_banda</label>
				<select name="Id_banda" class="form-control">
					@foreach($bandas as $cat)
					<option value="{{$cat->Id_banda}}">{{$cat->Nombre}}</option>
					@endforeach
				</select>				
			</div>
			<div class="form-group">
				<label for="Importe">Importe</label>
				<input type="text" name="Importe" class="form-control" placeholder="Importe">
			</div>
			<div class="form-group">
				<label for="Fecha">Fecha</label>
				<input type="date" name="Fecha" class="form-control" placeholder="Fecha">
			</div>
			<div class="form-group">
				<label for="Horas">Horas</label>
				<input type="time" name="Horas" class="form-control" placeholder="Horas">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
			{!!Form::close()!!}

		</div>
	</div>

@endsection