<template>
      <!--BANNER-->
        <section id="banner">
            <div class="container-fluid no-container-fluid-esp">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>

                <div class="bg-morado"></div>

                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slider/slider.jpg" alt="slider1">
                    <div class="carousel-caption d-none d-md-block banner-texto">
                    <h2>MÉLANY</h2>
                    <h3>Una experiencia inolvidable</h3>
                    <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slider-2.jpg" alt="slider2">
                    <div class="carousel-caption d-none d-md-block banner-texto">
                    <h2>MÉLANY</h2>
                    <h3>Una experiencia inolvidable</h3>
                    <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="slider3">
                    <div class="carousel-caption d-none d-md-block banner-texto">
                    <h2>MÉLANY</h2>
                    <h3>Una experiencia inolvidable</h3>
                    <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slider-4.jpg" alt="slider4">
                    <div class="carousel-caption d-none d-md-block banner-texto">
                    <h2>MÉLANY</h2>
                    <h3>Una experiencia inolvidable</h3>
                    <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </section>
    <!--BANNER-->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
