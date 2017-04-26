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


  <nav>
    <div class="nav-wrapper">
      <img src="images/logo.2.png" width="70" alt=""><a href="#" ></a>
      <ul class="right">
        <li><a href="/">Inicio</a></li>
        <li><a href="Quienessomos">Quienes Somos</a></li>
        <li><a href="Noticias">Noticias</a></li>
        <li><a href="Contacto">Contacto</a></li>
        <ul class="right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="logout">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>cerrar sesión</a></li>
                            </ul>
                        </li>
                    @endif
          </ul>
      </ul>
    </div>
  </nav>

   