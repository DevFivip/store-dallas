@include("layouts.head")

<body class='sc5 home-2'>
    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="body-overlay" id="body-overlay"></div>
 
    <!-- //. search Popup -->

    <!-- navbar start -->
    <header class="navbar-area navbar-area-2">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="/"><img src="storage/{{$informacion->logo}}" alt="img" width="100"></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="/">INICO</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="/productos">PRODUCTOS</a>
                        </li>
                        <li>
                            <a href="/nosotros">ACERCA DE NOSOTROS</a>
                        </li>
                        <li>
                            <a href="/contactanos">CONTACTANOS</a>
                        </li>
                    </ul>
                </div>
           
                <div class="nav-right-part nav-right-part-desktop">                    
                    <ul>
                    <li class="phone-contact"><img class="me-2" src="img/icon/envelope.png" alt="icon">
                            {{ $informacion->email }}
                        </li>
                        <li class="phone-contact"><img class="me-2" src="img/icon/phone.png" alt="icon">
                            {{ $informacion->telefono }}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->

    <!-- Banner Area Start-->
    <section class="banner-area banner-area-2">
        <div class="banner-thumb">
            <img src="img/home-2/banner/1.png" alt="img">
        </div>
        <div class="banner-bg">
            <div class="banner-bg-img"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 align-self-center">
                    <div class="banner-inner">
                        <h3>Lorem ipsum dolor</h3>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum placeat delectus fugiat earum, commodi illum laboriosam magni fugit!</p>
                        <a class="btn btn-secondary" href="/productos">Ver Productos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End --> 
    
    <!-- intro-contact Area Start-->
    <section class="intro-contact-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap">
                        <img src="img/home-2/icon/calendar.png" alt="icon">
                        <h5>Lunes-Viernes :  07AM - 8:00PM</h5>
                        <p>Horarios Laborares</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap single-intro-contact-wrap-active">
                        <img src="img/home-2/icon/map-marker.png" alt="icon">
                        <h5>{{ $informacion->direccion }}</h5>
                        <p>Ubicación</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap">
                        <img src="img/home-2/icon/phone-2.png" alt="icon">
                        <h5>{{ $informacion->telefono }}</h5>
                        <p>Teléfono de Contacto</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-contact Area End --> 

    <!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="thumb mb-lg-0 mb-4">
                        <img src="img/other/about.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Lorem, ipsum dolor. </h3>
                        <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, quae ipsum? Aspernatur ipsum rerum voluptates tempora a dolorum, amet quidem eligendi quasi numquam quod quisquam ullam est natus eaque ratione! Maxime, quasi! Ex officiis quisquam deserunt! Eligendi eius illo, cupiditate ratione ducimus ipsa. Itaque!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="img/icon/1.png" alt="img">
                                Variedad de Alimentos
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="img/icon/2.png" alt="img">
                                Delivery
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="img/icon/3.png" alt="img">
                                Calidad
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="img/icon/4.png" alt="img">
                                Atención 24/7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Area End -->

    <!-- offer Area Start-->
    <section class="offer-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center d-contents">
                    <div class="single-offer-wrap single-offer-wrap-2" style="background-color: var(--secondary-color);">
                        <img class="bg-img" src="img/home-2/offer/1.png" alt="img">
                        <div class="wrap-details">
                            <h4>Double Cheese</h4>
                            <h1>BURGER </h1>
                            <p>With Free Cocacola. Stay home , we deliver</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-3" style="background-color: #000;">
                        <img class="bg-img" src="img/home-2/offer/2.png" alt="img">
                        <div class="wrap-details">
                            <h3>Enjoy 30% CashBack</h3>
                            <span>Up to $70 on all Bikash</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-4" style="background-color: #F8F7F2;">
                        <img class="bg-img" src="img/home-2/offer/3.png" alt="img">
                        <div class="wrap-details text-center">
                            <h3><span>25 EXTRA</span>
                                FREE ON KFC</h3>
                            <p>Stay home , we deliver</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-5" style="background: #39251D">
                        <img class="bg-img" src="img/home-2/offer/4.png" alt="img">
                        <div class="wrap-details">
                            <h5>Test with</h5>
                            <h3><span>JAPANESE</span>FOOD AT HOME</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Area End --> 

    <!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90" style="background-image: url(img/home-2/about/bg.png); background-color: #FAF7F2;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="about-default-thumb">
                        <img src="img/home-2/about/1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-lg-first align-self-center">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Why choose us</h3>
                        <h2 class="title">We Have Excellent Of Quality Japanese Food</h2>
                        <p>A, blandit euismod ullamcorper vestibulum enim habitasse. Ultrices tincidunt scelerisque elit enim. A neque malesuada in tortor eget justo mauris nec dolor. Consequat risus vitae, ac ac et preparation. He wanted to serve burgers, fries and beverages that tasted .</p>
                        <a class="btn btn-secondary" href="menu-list.html">CHECK OUR MENU</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Area End -->

    <!-- testimonial Area Start-->
    <section class="testimonial-area-2 pd-top-110 pd-bottom-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="testimonial-slider owl-carousel">
                        @foreach($testimonios as $testimonio)

                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="thumb">
                                        <img src="img/home-2/testimonial/testimonial.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 align-self-center">
                                    <div class="testimonial-wrap">
                                        <div class="section-title">
                                            <h3 class="sub-title">Nuestros Testimonios</h3>
                                            <h2 class="title">Mas de 10.000 personas satisfechas por nuestros producto</h2>
                                        </div>
                                        <p>“ {{$testimonio->descripcion}} ”</p>
                                        <h3>{{$testimonio->title}}</h3>
                                        <h6>Cliente</h6>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach
                        
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial Area End -->



    <!-- blog Area Start-->
    
    <!-- blog Area End -->

    <!-- footer area start -->
  
    @include("layouts.footer")
</body>

<!-- Mirrored from themefie.com/html/foodka/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:08:46 GMT -->
</html>