<template>

 <div class="container">

      <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-12" v-for="profesional in arrayProfesionales" :key="profesional.id">
                <div class="item-chica">
                <img src="img/chicas/chica1.jpg" class="img-responsive" />
                <div class="texto-chica">
                    <h3 v-text="profesional.nombre"></h3>
                    <h4 v-text="profesional.ubicacion_edad"></h4>
                    <h5 v-text="profesional.precio"></h5>
                    <span>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    </span>
                    <a target="_blank" href="no-reserva-free.php">VER PERFIL</a>
                    <div class="triangulo">
                    <i class="icon-heart"></i>
                    </div>
                </div>
                </div>
            </div>

      </div>

    </div>


</template>

<script>
export default {
  data() {
    return {
      arrayProfesionales: []
    };
  },
  mounted() {
    console.log("Component mounted.");

    this.listarProfesionales();

  },
  methods : {
      listarProfesionales : function(){

        let me = this;

        // Make a request for a user with a given ID
          axios.get('/perfil-profesional').then(function (response) {
              // handle success
              me.arrayProfesionales = response.data;
              console.log(response);
          })
          .catch(function (error) {
              // handle error
              console.log(error);
          })
          .finally(function () {
              // always executed
          });

      }
  }
};
</script>
