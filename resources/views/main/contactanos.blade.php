@include("layouts.head")

<body class='sc5'>
    <!-- navbar start -->
    @include("layouts.navbar")

    <!-- navbar end -->

    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="/img/banner/shape-1.png" alt="img"></div>
        <div class="banner-shape-2"><img src="/img/banner/shape-2.png" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Contact with Us
                        </h3>
                        <h1>CONTACTO</h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">INICIO</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CONTACTANOS</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bredcrumb Area End -->

    <!-- contact start -->
    <div class="contact-area pd-top-120 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="contact_info_list">
                        <li class="single-info-item">
                            <img src="/img/icon/location.png" alt="icon">
                            <div class="details">
                                {{$informacion->direccion}}
                            </div>
                        </li>
                        <li class="single-info-item">
                            <img src="/img/icon/phone.png" alt="icon">
                            <div class="details">
                                {{$informacion->telefono}}
                            </div>
                        </li>
                        <li class="single-info-item">
                            <img src="/img/icon/phone.png" alt="icon">
                            <div class="details">
                                {{$informacion->telefono2}}
                            </div>
                        </li>
                        <li class="single-info-item">
                            <img src="/img/icon/envelope.png" alt="icon">
                            <div class="details">
                                {{$informacion->email}}
                            </div>
                        </li>
                        <li class="single-info-item">
                            <img src="/img/icon/envelope.png" alt="icon">
                            <div class="details">
                                {{$informacion->email}}
                            </div>
                        </li>
                    </ul>
                    <p>{{$informacion->empresa_descripcion}}</p>
                </div>
                <div class="col-lg-6">
                    <form action="/contactanos" method="GET" class="default-form-wrap border-1 p-0 mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Tu Nombre y Apellido">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Tu Correo Electrónico">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-textarea-wrap">
                                    <textarea rows="4" id="description" name="description" placeholder="Escribe tu message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-base">Envia tu Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->

    <div class="location-map">
        <div class="responsive-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7736.809349608943!2d90.34779195789959!3d23.772761841203913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1618491766114!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    @include("layouts.footer")

</body>

</html>