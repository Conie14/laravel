@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de bandas <a href="banda/create"> <button class="btn btn-success">Nuevo</button></h3></a>
		@include('venta.banda.seach')

	</div>

</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>#ID</th>
					<th>Nombre</th>
					<th>Genero</th>
					<th>Integrantes</th>
					<th>Id_factura</th> 
					<th>Correo</th>
					<th>Telefono</th>

				</thead>
				@foreach($bandas as $cat)
				<tr>
					<td>{{$cat->Id_banda}}</td>
					<td>{{$cat->Nombre}}</td>
					<td>{{$cat->Genero}}</td>
					<td>{{$cat->Integrantes}}</td>
					<td>{{$cat->No_contrato}}</td>
					<td>{{$cat->Correo}}</td>
					<td>{{$cat->Telefono}}</td>
					<td>
						<a href="{{URL::action('BandaController@edit',$cat->Id_banda)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$cat->Id_banda}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
					
				</tr>
				@include('venta.banda.modal')
				@endforeach
			</table>
		</div>
		{{$bandas->render()}}
	</div>
</div>	

@endsection