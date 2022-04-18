<header class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open" style="font-size:10px !important;">
                        <li class="current-menu-item">
                            <a href="/">INICIO</a>

                        </li>
                        <li class="current-menu-item">
                            <a href="/productos">PRODUCTOS</a>
                        </li>
                        <li>
                            <a href="/nosotros">NOSOTROS</a>
                        </li>
                        <li>
                            <a href="/contactanos">CONTACTANOS</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="main-logo" href="/"><img src="/storage/{{$informacion->logo}}" alt="img" width="100"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                            {{$informacion->telefono}}
                        </li>
                        <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                            {{$informacion->email}}
                        </li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                            {{$informacion->telefono}}
                        </li>
                        <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                            {{$informacion->email}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>