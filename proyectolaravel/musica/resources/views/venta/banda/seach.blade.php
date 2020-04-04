{!! Form::open(array('url'=>'venta/banda','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
		<div>
			<input type="text" class="form-control" name="searchText" placeholder="Buscar :v" value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>
</div>

{{Form::close()}}