<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">AGENDA:</h5>
      <p><strong class="precio-morado">La Agenda</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.</p>
      <p>Si estas interesado sigue estos pasos:</p>
    </div>


    <div class="row">
      <div class="col-lg-7">

        <div v-if='selectedDay' class='selected-day'>
<!--           <h3>{{ selectedDay.date.toDateString() }}</h3>
 -->
          <div class="reserva-item espacio-campos" v-for='attr in selectedDay.attributes' :key='attr.key'>
              <ul>
                <li> <i class="fa fa-user" aria-hidden="true"></i> {{ attr.customData.usuario.nombre }} </li>
                <li> <i class="icon-calendar esp-icono-bio"></i> {{ attr.customData.fecha }}  </li>
                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Hora:</strong> {{ attr.customData.desde }} a {{ attr.customData.hasta }}  </li>
                <li> <i class="fa fa-phone" aria-hidden="true"></i> {{ attr.customData.usuario.celular }} </li>
                <li> <i class="fa fa-car" aria-hidden="true"></i> <strong>Dirección:</strong> {{ attr.customData.direccion }} </li>
                <li> <i class="fa fa-comments-o" aria-hidden="true"></i> {{ attr.customData.extras }} </li>
              </ul>
          </div>

          </div>

      </div>
      <div class="col-lg-5">
         <vc-calendar :attributes='attributes' @dayclick='dayClicked'></vc-calendar>
      </div>
    </div>
    

  </form>
</template>

<script>

import VCalendar from 'v-calendar';


export default {
  components:{
    VCalendar
  },
  mounted() {
    this.listarAgenda();
  },
  data() {
    return {
        selectedDay: null,
        arAgenda: []
    }
  },
  computed: {
      attributes() {
        return this.arAgenda.map(a => ({
            key: `todo.${a.id}`,
            dot: 'red',
            dates: new Date(a.desdeunix * 1000),
            customData: a,
        }));
    },
  },
  methods: {
    dayClicked(day) {
      this.selectedDay = day;
    },
    listarAgenda(){

          let me = this;

          axios.get('agenda-profesional/listar').then(function (response) {

              var respuesta= response.data;
              me.arAgenda = respuesta.agenda;

          }).catch(function (error) {  console.log(error);     });
        
    }
  }
};

</script>
