@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Lugar <a href="lugar/create"> <button class="btn btn-success">Nuevo</button></h3></a>
		@include('configuracion.lugar.seach')

	</div>

</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>#ID</th>
					<th>Pais</th>
					<th>Estado</th>
					<th>Codigo_Postal</th>
					<th>Calle</th> 
					<th>Colonia</th>
					<th>Banda</th>

				</thead>
				@foreach($lugars as $cat)
				<tr>
					<td>{{$cat->Id_evento}}</td>
					<td>{{$cat->Pais}}</td>
					<td>{{$cat->Estado}}</td>
					<td>{{$cat->Codigo_postal}}</td>
					<td>{{$cat->Calle}}</td>
					<td>{{$cat->Colonia}}</td>
					<td>{{$cat->Nombre}}</td>
					<td>
						<a href="{{URL::action('LugarController@edit',$cat->Id_evento)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$cat->Id_evento}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
					
				</tr>
				@include('configuracion.lugar.modal')
				@endforeach
			</table>
		</div>
		{{$lugars->render()}}
	</div>
</div>	

@endsection