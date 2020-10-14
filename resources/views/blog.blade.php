@extends('app')
@section('title', 'Todas las publicaciones')

@section('content')
<!-- Banner -->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>Mascotas  =  familia</h1>
    </div> 
</div> 
<!-- /Banner -->

<div style="padding-top: 100px;">

</div>

<!-- Blog -->
<div class="our-blog">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6">

            <div class="single-blog">
                <div class="image"><img src="images/blog/comida.jpg" alt=""></div>
                <div class="text">
                    <h6>Carlos French.</h6>
                    <h5><a href="blog-details.html" class="tran3s">Cómo hacer un delicioso almuerzo para tu gato</a></h5>
                    <p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
                </div>
            </div> <!-- /.single-blog -->

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">

            <div class="single-blog">
                <div class="image"><img src="images/blog/parque.jpg" alt=""></div>
                <div class="text">
                    <h6>María Zapata.</h6>
                    <h5><a href="blog-details.html" class="tran3s">Cuidados para tu perro en el parque</a></h5>
                    <p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
                </div>
            </div> <!-- /.single-blog -->

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="single-blog">

                <div class="image"><img src="images/blog/limpieza.jpg" alt=""></div>
                <div class="text">
                    <h6>Daniel Castaño.</h6>
                    <h5><a href="blog-details.html" class="tran3s">Cómo limpiar tu gato adecuadamente</a></h5>
                    <p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
                </div>
            </div> <!-- /.single-blog -->

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">

            <div class="single-blog">
                <div class="image"><img src="images/blog/cama.jpg" alt=""></div>
                <div class="text">
                    <h6>Sandra Hurtado</h6>
                    <h5><a href="blog-details.html" class="tran3s">Cómo hacer una cama para tu mascota</a></h5>
                    <p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
                </div>
            </div> <!-- /.single-blog -->

        </div>
    </div>
    <a href="#" class="load-more tran3s theme-button"><span></span> Ver blog</a>

    <div class="pagination">
        <a href="#">&laquo;</a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
</div>
<!-- /Blog -->

<div style="padding-bottom: 10px;"></div>
</div> <!-- /.html-top-content -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-data-wrapper">

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-xs-12 text-right pull-right">
                        <ul class="footer-menu">
                            <li><a href="blog.html" class="tran3s">Blog</a></li>
                            <li><a href="#" class="tran3s">Nosotros</a></li>
                            <li><a href="#" class="tran3s">Adopción </a></li>
                            <li><a href="#" class="tran3s">Legal</a></li>
                        </ul>

                        <ul>
                            <li class="search-form" style="margin-right: 40px;">
                                <form action="">
                                    <input class="buscar" align="middle" type="text" name="" placeholder="¿Qué deseas buscar?">
                                    <button type="submit" >
                                        <i class="material-icons">search</i>
                                    </button>
                                </form>
                            </li> 
                        </ul><br>

                        <ul class="social-icon">
                            <li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5 col-xs-12 footer-logo">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Logo"></a></div>
                        <p>Hecho con el &#10084; <strong> hacia los animales</strong></p>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 
    @endsection