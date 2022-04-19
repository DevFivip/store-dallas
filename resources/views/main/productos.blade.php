@include("layouts.head")

<body class='sc5'>
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

    <!-- navbar start -->
    @include("layouts.navbar")
    <!-- navbar end -->

    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="img/banner/shape-1.png" alt="img"></div>
        <div class="banner-shape-2"><img src="img/banner/shape-2.png" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Descubre nuestros productos
                        </h3>
                        <h1>PRODUCTOS</h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">INICIO</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PRODUCTOS</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Area End -->

    <!-- shop Area Start-->
    <section class="shop-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row justify-content-start">
                        <!-- <div class="col-sm-6 align-self-center pb-4">
                            <p class="mb-0">Showing 1–8 of 12 results</p>
                        </div>
                        <div class="col-sm-6 align-self-center pb-4">
                            <select class="single-select float-sm-end">
                                <option>Default sorting</option>
                                <option value="asc">Pizza</option>
                                <option value="desc">Burger</option>
                                <option value="pop">Ramen</option>
                            </select>
                        </div> -->
                        @foreach( $paginator->items() as $producto)
                        <div class="col-md-4">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="storage/{{$producto->imagen}}" alt="img">
                                </div>
                                <div class="wrap-details">
                                    <h6><a href="/producto/{{$producto->id}}">{{$producto->producto_nombre}}</a></h6>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            {{$producto->categoria->nombre}}
                                        </div>
                                        <br>
                                        <h6 class="price">${{$producto->precio}}</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="/producto/{{$producto->id}}">DETALLES</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="sidebar-area">

                        <div class="widget widget_search">
                            <form class="search-form" action="/productos" method="get">
                                <div class="form-group">
                                    <input type="text" name="producto_nombre" id="producto_nombre" placeholder="Busca un producto">
                                </div>
                                <button class="submit-btn" type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories style-2">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @foreach($categorias as $categoria)
                                <li><a href="/productos?categoria_id={{$categoria->id}}"><img src="storage/{{$categoria->imagen}}" alt="img" width="30"> {{$categoria->nombre}} <span>({{count($categoria->productos)}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-recent-post style-2">
                            <h4 class="widget-title">Ultimos Productos Actualizados</h4>
                            <ul>
                                @foreach($productos_last_modification as $producto)
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="storage/{{$producto->imagen}}" alt="widget" width="80">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="title"><a href="#">{{$producto->producto_nombre}}</a></h6>
                                            <h6 class="price">${{$producto->precio}}</h6>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <a class="d-block mb-5" href="#"><img class="w-100" src="img/widget/ad.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="text-end">
                        <ul class="pagination">


                            {{ $paginator->links('vendor.pagination.bootstrap-4') }}
                        </ul>


                        <!-- <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="ri-arrow-left-s-line"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- shop Area End -->


    <!-- footer area start -->
    @include("layouts.footer")
</body>

<!-- Mirrored from themefie.com/html/foodka/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:09:14 GMT -->

</html>