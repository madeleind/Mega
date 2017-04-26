<div id="wrapper">
       <!-- <a href="#" id="dev7link" title="Go to dev7studios">dev</a>-->

        <div class="slider-wrapper theme-bar">
            <div id="slider" class="nivoSlider">
                <img src="images/ejemplo5.jpg" data-thumb="images/ejemplo5.jpg" alt="" title="Energia" />
                <img src="images/ejemplo2.jpg" data-thumb="images/ejemplo2.jpg" alt="" title=" Lideres en Gerencia y Proyecto"/>
                <img src="images/ejemplo4.jpg" data-thumb="images/ejemplo4.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/ejemplo3.jpg" data-thumb="images/ejemplo3.jpg" alt="" title="Lideres en Construcción" />
            </div>
        </div>

    </div>

      @if (Auth::check())
             <ul id="logout" class="dropdown-content" >
                <li><a href="{{ url('/logout') }}"><i class="fa fafa-sign-out"></i>cerrar sesión</a></li>
                </ul>
            @else
              <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="">Register</a></li>-->          
       @endif

  <nav>
    <div class="nav-wrapper">
      <img src="images/logo.2.png" width="70" alt=""><a href="#" ></a>
      <ul class="right">
        <li><a href="/">Inicio</a></li>
        <li><a href="Quienessomos">Quienes Somos</a></li>
        <li><a href="Noticias">Noticias</a></li>
        <li><a href="Contacto">Contacto</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="logout">{{ Auth::user()->name }}<i class="material-icons right">perm_identity</i></a></li>
      </ul>
    </div>
  </nav>