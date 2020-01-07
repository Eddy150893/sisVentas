{{-- El metodo open recibe un array 
url:la url a la cual enviara la informacion el formulario
method:POST,GET,PUT ETC
autocomplete:si se permite el autocompletar
role:Para que sirve el form --}}
{!! Form::open(array('url'=>'almacen/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..."
		value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>			
		</span>
	</div>
</div>

{{Form::close()}}