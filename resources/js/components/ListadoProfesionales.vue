<template>

 <div class="container">

      <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-12" v-for="item in listado">
                <div class="item-chica">
                <img src="img/chicas/chica1.jpg" class="img-responsive" />
                <div class="texto-chica">
                    <h3 v-text="item.nombre"></h3>
                    <h4 v-text="item.ubicacion_edad"></h4>
                    <h5 v-text="item.precio"></h5>
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
      listado: [
        {
          nombre: "FRANCESCA",
          ubicacion_edad: "LIMA | 22 años",
          precio: '150',
          valoracion: 2
        },
        {
          nombre: "JIMENA",
          ubicacion_edad: "PIURA | 19 años",
          precio: '120',
          valoracion: 5
        },
        {
          nombre: "JORDANA",
          ubicacion_edad: "AYACUCHO | 24 años",
          precio: '140',
          valoracion: 3
        },
        {
          nombre: "CAROLINA",
          ubicacion_edad: "CHICLAYO | 21 años",
          precio: '130',
          valoracion: 5
        },
        {
          nombre: "ALEJANDRA",
          ubicacion_edad: "TUMBES | 29 años",
          precio: '180',
          valoracion: 4
        },
        {
          nombre: "VERONICA",
          ubicacion_edad: "ICA | 26 años",
          precio: '200',
          valoracion: 1
        },
        {
          nombre: "SUSANA",
          ubicacion_edad: "JUNIN | 23 años",
          precio: '250',
          valoracion: 2
        },
        {
          nombre: "SHEYLA",
          ubicacion_edad: "PUCALLPA | 27 años",
          precio: '150',
          valoracion: 3
        }
      ]
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods : {
      listarCategoria : function(){

      }
  }
};
</script>
