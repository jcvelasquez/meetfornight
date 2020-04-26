<template>

    <div class="espacio-reservas">

        <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>DISPONIBILIDAD</h2>

        <div class="disponibilidad">

            <div class="fecha" v-for="dispo in arDisponibilidad" :key=" 'm_' + dispo.id">      
                <div v-if="estaDisponible(dispo)">
                    <span class="dias" v-text="dispo.dia.substr(0, 3)"></span>
                    <p v-text="dispo.desde"></p>
                    <p v-text="dispo.hasta"></p>
                </div>
                <div v-else>
                    <span class="dias" style="background:#f20f21;" v-text="dispo.dia.substr(0, 3)"></span>
                    <p>N/D</p>
                </div>

            </div>


        </div>

    </div>

</template>

<script>

    export default {
        props: ['apodoData'],
        mounted() {
            this.mostrarDisponibilidad();
        },
        data(){
            return {
                arDisponibilidad: []
            }
        },
        methods:{
            estaDisponible(dispo) {

                return dispo.idesde > 0 && dispo.ihasta > 0
                
            },
            mostrarDisponibilidad(){

                  let me = this;

                  axios.get('/perfil/disponibilidad/' + me.apodoData ).then(function (response) {

                      var respuesta= response.data;
                      me.arDisponibilidad = respuesta.disponibilidad;

                  }).catch(function (error) {  console.log(error);     });
                
            }
            
         }

    }
</script>