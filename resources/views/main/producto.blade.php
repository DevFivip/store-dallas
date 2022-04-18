@include("layouts.head")

<body style="background: #fff;" class='sc5'>
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
    @include("layouts.navbar")
    <!-- navbar end -->

    <!-- shop-details Area Start-->
    <div class="shop-details-area pd-top-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sticy-product">
                        <div class="product-thumbnail-wrapper">
                            <div class="single-thumbnail-slider">
                                <div class="slider-item">
                                    <img src="/storage/{{$producto->imagen}}" alt="item" width="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-item-details">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">INICIO</a></li>
                                <li class="breadcrumb-item"><a href="/productos">PRODUCTOS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DETALLES DE PRODUCTO</li>
                            </ul>
                        </nav>
                        <h2 class="entry-title">{{$producto->producto_nombre}}</h2>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <h4 class="price">$ {{$producto->precio}}</h4>
                            </div>
                        </div>
                        <p class="mt-4">{{$producto->descripcion}}</p>
                        <a href="https://wa.me/{{$informacion->whatapp}}" class="btn mt-4" style="background-color:#25D366;"><i class="fa-brands fa-whatsapp"></i> Cotizar vía Whatapp</a>
                        <ul class="cat mt-4">
                            <li>Categories: <a href="/productos?categoria_id={{$producto->categoria_id}}">{{$producto->categoria->nombre}}</a> </li>
                            <li>Tags: <a href="/productos?subcategoria_id={{$producto->subcategoria_id}}">{{$producto->subcategoria->nombre}}</a> </li>
                        </ul>
                        <!-- <div class="shop-tabs">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p class="mb-4">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="w-100" src="/img/blog/single-2.png" alt="img">
                                        </div>
                                        <div class="col-6">
                                            <img class="w-100" src="/img/blog/single-3.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="mt-4">One of the simplest and most traditional pizzas is the Margherita, which is topped with tomatoes or tomato sauce, mozzarella, and basil. Popular legend relates that it was named for Queen Margherita, wife of Umberto I, who was said to have liked its mild fresh flavour and to have also noted that its topping colours—green, white, and red—were those of the Italian flag.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <h6 class="title">About Product</h6>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centu but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem Ipsum.</p>
                                    <div class="quick-view mt-4">
                                        <h6 class="title mb-4">Quick View</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="/img/icon/1.png" alt="img">
                                                    Fresh food
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="/img/icon/2.png" alt="img">
                                                    Fast Delivery
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="/img/icon/3.png" alt="img">
                                                    Quality Maintain
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="/img/icon/4.png" alt="img">
                                                    24/7 Service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="comment-area">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="/img/blog/comment.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6>Haslida heris</h6>
                                                <span>20 Feb 2020 at 4:00 pm</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="default-form-wrap style-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-input-wrap">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input-wrap">
                                                    <input type="text" class="form-control" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="single-textarea-wrap">
                                                    <textarea rows="4" placeholder="Review..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-base">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-details Area End -->

    <!-- related-product Area Start-->
    <section class="related-product-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h2 class="title">Productos Relacionados</h2>
                    </div>
                    <div class="related-product-slider owl-carousel style-2">
                        @foreach($productos_categoria as $producto)
                        <div class="item">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="/storage/{{$producto->imagen}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="/producto/{{$producto->id}}">{{$producto->producto_nombre}}</a></h5>
                                    <div class="wrap-footer">
                                        <h6 class="price">${{$producto->precio}}</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="/producto/{{$producto->id}}">DETALLES </a>
                                </div>
                            </div>
                        </div>

                        @endforeach


                        @foreach($productos_subcategoria as $producto)
                        <div class="item">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="/storage/{{$producto->imagen}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="/producto/{{$producto->id}}">{{$producto->producto_nombre}}</a></h5>
                                    <div class="wrap-footer">
                                        <h6 class="price">${{$producto->precio}}</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="/producto/{{$producto->id}}">DETALLES </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- related-product Area End -->
    @include("layouts.footer")
</body>

<!-- Mirrored from themefie.com/html/foodka//producto/{{$producto->id}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:09:17 GMT -->

</html>