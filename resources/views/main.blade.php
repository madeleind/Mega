<!DOCTYPE HTML PUBLIC>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
	<title>Mega</title>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--hojas de estilo del slider-->
	<link rel="stylesheet" href="css/bar/bar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="ccs/style.css" type="text/css" media="screen" />
	<!-- Latest compiled and minified JavaScript -->

	<!--hoja de estilo de las vista-->
	<link rel="stylesheet" href="ccs/estilo.css" type="text/css" media="screen" />
		<!--codigo para el mapa-->
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>


</head>
<body>
<header>
	@include('partials._navbar')
</header>
<main>
<div class="row">
	<div class="col l2 s12 ">
		@include('partials._servicios')
	</div>
	<div class="col l7 " style="height:auto; border-left: 2px solid #000; background:url(images/concrete-wall-2.png") left top repeat; "> 
		@yield('content')
	</div>
	<div class="col l3 s12" style="height:auto; border-left: 2px solid #000;">
		<div class="container">
			@include('partials._acceso')
		</div>
	</div>
</div>
</main>

<footer>
	@include('partials._footer')
</footer>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<!---<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

    <script type="text/javascript">
  $(document).ready(function() {Materialize.updateTextFields();
      });
	</script>


</body>
</html>