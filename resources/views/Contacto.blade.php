@extends('main')
@section ('content')


<div style="padding-top: 30px; padding-bottom: 20px;" class="center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7846.151772379144!2d-66.87135501289161!3d10.494684080998098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4ee5006535c903f!2sTorre+Mega+III!5e0!3m2!1ses!2sve!4v1485983444783" width="600" height="450" frameborder="0" style="border:2px solid #ccc;" allowfullscreen></iframe>
</div>

<div class="row">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Nombre Completo" id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
      </div>
     <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Correo Electrónico</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="relato" class="materialize-textarea"></textarea>
          <label for="relato">Mensaje</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar<i class="material-icons right">send</i>
              </button>
        </div>
    </div>
    </form>

  <div class="row col s6">
        <div class="col s12">
      <h6><b>DIRECCIÓN</b></h6>
      <p>
         Av. Los Manguitos y el cristo, Torre Mega III, piso 3, Oficina 3-C 
         Urb. Sabana Grande, Caracas, Distrito Capital.</p>
        </div>
        <div class="col s12">
      <h6><b>TELÉFONO</b></h6>
      <p>
        (0212) 761-25-59 <br>
        (0212) 761-31-09 <br>
        (0212) 763-16-10
        </p>
        </div>
        <div class="col s12">
      <h6>EMAIL</h6>
      <p>
        no suministrado
        </p>
        </div>
    </div>
</div>


@endsection