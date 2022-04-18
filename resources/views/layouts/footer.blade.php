<footer class="footer-area-2 pd-top-100">
    <div class="footer-inner padding-top-100 padding-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget widget">
                        <div class="logo">
                            <img src="/storage/{{$informacion->logo}}" alt="img" width="100">
                        </div>
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
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget widget widget_link">
                        <h4 class="widget-title">Menu</h4>
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/productos">Productos</a></li>
                            <li><a href="/nosotros">Acerca de Nosotros</a></li>
                            <li><a href="/contactanos">Contactanos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget widget widget_link">
                        <h4 class="widget-title">Horarios de atención</h4>
                        <ul>
                            @foreach($horarios as $horario)

                            <li>{{$horario->dia}} : {{$horario->apertura}} - {{$horario->cierre}}</li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center">
                    <div class="copyright-area">
                        <p>© 2022 La Sorpresa Store. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="social-area text-md-end text-center mt-md-0 mt-2">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back-to-top end -->
<div class="back-to-top">
    <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
</div>



<!-- all plugins here -->
<script src="/js/jquery.3.6.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/imageloded.min.js"></script>
<script src="/js/counterup.js"></script>
<script src="/js/waypoint.js"></script>
<script src="/js/magnific.min.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/nice-select.min.js"></script>
<script src="/js/fontawesome.min.js"></script>
<script src="/js/owl.min.js"></script>
<script src="/js/slick-slider.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/tweenmax.min.js"></script>
<!-- main js / -->
<script src="/js/main.js"></script>