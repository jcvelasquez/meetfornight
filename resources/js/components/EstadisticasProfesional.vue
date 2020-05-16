<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">ESTADÍSTICAS:</h5>
      <p>Con las Estadisticas podrás hacer que tu anuncio sea lo más eficiente posible y podrás controlar a su vez el exito que estás teniendo en nuestra plataforma.</p>

      <p>Queremos que tengas en todo momento el control de tu anuncio y de tu presupuesto.</p>
    </div>

    <div class="bloques-de-perfil">
      <div class="bloque-estadistica-2">
        <div class="row">
          <div class="col-lg-6">
            <div class="estadistica-datos-2">
              <i class="icon-podium tam-icon-grande-2"></i>
              <div class="info-estadistica-2">
                <span class="inf-estadistica-num-2">150</span>
                <span class="inf-estadistica-2">
                  BOOSTERS UTILIZADOS PARA ANUNCIARTE
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="estadistica-datos-2">
              <i class="icon-heart-all tam-icon-grande-2"></i>
              <div class="info-estadistica-2">
                <span class="inf-estadistica-num-2">100</span>
                <span class="inf-estadistica-2">USUARIOS TE TIENEN EN SUS FAVORITOS
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <div class="bloques-de-perfil">
        <select name="" id="" class="form-control col-lg-6">
          <option value="">Seleccionar mes de reporte</option>
        </select>
    </div>

    <div class="bloques-de-perfil">
      <ve-line :data="chartData" :colors="colors" :legend-visible="false" :settings="chartSettings"></ve-line>
    </div>

    <!-- 

     <div class="bloques-de-perfil">
      <div class="bloque-estadistica">
        <div class="estadistica-datos">
          <i class="icon-user-woman tam-icon-grande"></i>
          <div class="info-estadistica">
            <span class="inf-estadistica-num">400</span>
            <span class="inf-estadistica">
              VISITAS
              <br />OBTENIDAS
            </span>
          </div>
        </div>
      </div>
    </div> -->


  </form>
</template>

<script>
import VeLine from "v-charts/lib/line.common";

export default {
  components: {
    VeLine
  },
  mounted() {
    console.log("Component mounted.");
  },
  created: function() {
    this.chartData = {
      columns: ["date", "people"],
      rows: [
        { date: "01/01", people: 150, booster: 50 },
        { date: "01/02", people: 200, booster: 34 },
        { date: "01/03", people: 180, booster: 28 },
        { date: "01/04", people: 230, booster: 15 },
        { date: "01/05", people: 120, booster: 10 },
        { date: "01/06", people: 80, booster: 20 }
      ]
    };
    this.chartSettings = {
      stack: { sell: ["people","booster"] },
      area: true,
      yAxisType: ["normal"] 
    };

    this.colors = ["#a86ba4"];
  },
  data() {
    return {};
  }
};
</script>
