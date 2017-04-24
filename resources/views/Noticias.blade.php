@extends('main')
@section ('content')


<div class="container">
  <div class="row">
    <div class="col l8 offset-l2 ">
      <div style="margin-top: 30px; text-align: center;"><h3>Noticias</h3></div>
    </div>
  </div>
</div>
@foreach ($notis as $not)
<div class="row">
    <div class="col l4" style="border: 2px solid #eee; margin-top: 5px;">
      <img src="{{$not->imagen}}" alt="" class=" responsive-img">
    </div>
    <div class="col l8" style="border: 2px solid #eee; margin-top: 5px;">
      <div><b>{{$not->titulo}}</b></div>
      <p style="text-align: justify;">{{$not->texto}}</p>
    </div>
</div>
@endforeach

<div>
  {!! $notis->links() !!}
</div>

@endsection