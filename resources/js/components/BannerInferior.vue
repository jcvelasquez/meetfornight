<template>

     <div class="slider-inferior">
      <div class="container">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators circulos-slider-banner-inferior">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
