@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de facturas <a href="factura/create"> <button class="btn btn-success">Nuevo</button></h3></a>
		@include('compra.factura.seach')

	</div>

</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>#ID</th>
					<th>No_contrato</th>
					<th>Cliente</th>
					<th>Banda</th>
					<th>Importe</th> 
					<th>Fecha</th>
					<th>Hora</th>

				</thead>
				@foreach($facturas as $cat)
				<tr>
					<td>{{$cat->Id_factura}}</td>
					<td>{{$cat->No_contrato}}</td>
					<td>{{$cat->Nombrec}}</td>
					<td>{{$cat->Nombre}}</td>
					<td>{{$cat->Importe}}</td>
					<td>{{$cat->Fecha}}</td>
					<td>{{$cat->Horas}}</td>
					<td>
						<a href="{{URL::action('FacturaController@edit',$cat->Id_factura)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$cat->Id_factura}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
					
				</tr>
				@include('compra.factura.modal')
				@endforeach
			</table>
		</div>
		{{$facturas->render()}}
	</div>
</div>	

@endsection