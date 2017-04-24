@extends('main')
@section ('content')

<div class="container">
	<div class="col s12">
      		<h4 class="flow-text" style="margin-bottom: 20px; margin-top: 30px; text-align: center;">Administrador de Noticias</h4>
		</div>
		<form method="POST" action="{{route('Noticia.store')}}">
			<div class="row">
			      <div class="col s12">
			        <div class="input-field col s12">
			          <input placeholder="Título de la Noticia" id="titulo" type="text" class="validate">
			          <label for="titulo">Título</label>
			        </div>
			      </div>
			     <div class="row">
			        <div class="input-field col s12">
			          <textarea id="descrip" class="materialize-textarea"></textarea>
			          <label for="descrip">Descripción</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          <input placeholder="images/nombre.jpg o png" id="img" type="text" class="validate">
			          <label for="img">Imágen</label>
			        </div>
			    </div>
		</form>
			<div class="row">
					<div class="mdl-cell mdl-cell--4-col">
						<button class="btn waves-effect waves-light" type="submit" name="agregar">Agregar</button>
					</div>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
</div>





@endsection