@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de clientes <a href="cliente/create"> <button class="btn btn-success">Nuevo</button></h3></a>
		@include('registro.cliente.seach')

	</div>

</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>#ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>Edad</th>
					<th>No_factura</th>

				</thead>
				@foreach($clientes as $cat)
				<tr>
					<td>{{$cat->Id_cliente}}</td>
					<td>{{$cat->Nombre}}</td>
					<td>{{$cat->Apellido}}</td>
					<td>{{$cat->Correo}}</td>
					<td>{{$cat->Telefono}}</td>
					<td>{{$cat->Edad}}</td>
					<td>{{$cat->No_factura}}</td>
					<td>
						<a href="{{URL::action('ClienteController@edit',$cat->Id_cliente)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$cat->Id_cliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
					
				</tr>
				@include('registro.cliente.modal')
				@endforeach
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>	

@endsection