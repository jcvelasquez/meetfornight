<template>

    <div class="espacio-reservas">

        <h2 class="sub-tit"><i class="icon-calendar esp-icono-bio"></i>DISPONIBILIDAD</h2>

        <div class="disponibilidad">

            <template v-if="arDisponibilidad.length > 0">

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

            </template>

            <template v-else>
                <p>El profesional aún no registra horarios de disponibilidad</p>
            </template>


        </div>

    </div>

</template>

<script>

    export default {
        props: ['apodo', 'basepath'],
        mounted() {
            this.mostrarDisponibilidad();
        },
        data(){
            return {
                arDisponibilidad: [],
                desde_lunes: "",
                hasta_lunes: "",
                desde_martes: "",
                hasta_martes: "",
                desde_miercoles: "",
                hasta_miercoles: "",
                desde_jueves: "",
                hasta_jueves: "",
                desde_viernes: "",
                hasta_viernes: "",
                desde_sabado: "",
                hasta_sabado: "",
                desde_domingo: "",
                hasta_domingo: "",
                arLunes:[],
                arMartes:[],
                arMiercoles:[],
                arJueves:[],
                arViernes:[],
                arSabado:[],
                arDomingo:[]
            }
        },
        methods:{
            estaDisponible(dispo) {

                return dispo.idesde > 0 && dispo.ihasta > 0
                
            },
            mostrarDisponibilidad(){

                  let me = this;

                  axios.get( me.basepath + '/' + me.$locale + '/perfil/' + me.apodo + '/disponibilidad'  ).then(function (response) {

                      var respuesta= response.data;

                      me.arDisponibilidad = respuesta.disponibilidad;

                  }).catch(function (error) {  console.log(error);     });
                
            }
            
         }

    }
</script>