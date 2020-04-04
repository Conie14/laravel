@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Factura: {{ $factura->No_contrato}}</h3>
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
			
		     {!!Form::model($factura,['method'=>'PATCH','route'=>['factura.update',$factura->Id_factura]])!!}
		    
			<div class="form-group">
				<label for="Nombre">No_contrato</label>
				<input type="text" name="No_contrato" class="form-control" value="{{$factura->No_contrato}}" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="Id_cliente">Id_cliente</label>
				<input type="text" name="Id_cliente" class="form-control" value="{{$factura->Id_cliente}}" placeholder="Id_cliente">
			</div>
			<div class="form-group">
				<label for="Id_banda">Id_banda</label>
				<input type="text" name="Id_banda" class="form-control"  value="{{$factura->Id_banda}}" placeholder="Id_banda">
			</div>
			<div class="form-group">
				<label for="Importe">Importe</label>
				<input type="text" name="Importe" class="form-control" value="{{$factura->Importe}}"placeholder="Importe">
			</div>
			<div class="form-group">
				<label for="Edad">Fecha</label>
				<input type="date" name="Fecha" class="form-control" value="{{$factura->Fecha}}"placeholder="Fecha">
			</div>
			<div class="form-group">
				<label for="Horas">Horas</label>
				<input type="time" name="Horas" class="form-control" value="{{$factura->Horas}}" placeholder="Horas">
			</div>
				<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>	
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection