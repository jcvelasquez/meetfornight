<template>
    <form action="#" method="post">

          <div class="bloques-de-perfil">

            <div class="espaciado-formulario"><h5 class="formulario-titulos">DATOS:</h5>  <span class="obligatorio">(*) Campos Obligatorios</span></div>

            <div class="form-row">
              <div class="col-lg-12 col-sm-12">
                  <input type="text" class="form-control espacio-campos" name="nombre" placeholder="Nombre *" v-model="nombre">
                  <label class="error" v-if="!$v.nombre.required">El nombre es obligatorio</label>
              </div>
            </div>
            <div class="form-row">  
              <div class="col-lg-6 col-sm-12">
                  <input type="text" class="form-control" v-model.trim="$v.apodo.$model" name="apodo" v-model="apodo" placeholder="Apodo *">
                  <label class="error" v-if="!$v.apodo.required">El apodo es obligatorio</label>
              </div>
              <div class="col-lg-6 col-sm-12">
                  <input type="email" class="form-control espacio-campos" readonly name="email" v-model="email" placeholder="Email *">
              </div>
            </div>
            <!-- <div class="form-row"> 
              <div class="col-lg-6 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="clave" v-model="clave" placeholder="Cambiar contraseña (opcional)">
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="verificar_clave" v-model="verificar_clave" placeholder="Confirmar Contraseña (opcional)">
              </div>
            </div> -->
            <div class="form-row">
              <div class="col-lg-6 col-sm-12">
                  <date-pick v-model="fecha_nacimiento" v-model.trim="$v.fecha_nacimiento.$model" :inputAttributes="{readonly: false, class: 'form-control espacio-campos', placeholder: 'Ingrese una fecha de nacimiento' }" :format="'DD/MM/YYYY'"></date-pick>
                  <label class="error" v-if="!$v.fecha_nacimiento.required">La fecha de nacimiento es obligatoria</label>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" v-model.trim="$v.sexo.$model" name="sexo" v-model="sexo">
                  <option value="">Seleccione un sexo</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                  <option value="T">Trans</option>
                </select>
                <label class="error" v-if="!$v.sexo.required">El sexo es obligatorio</label>
              </div>
              </div>
              <div class="espaciado-formulario">
                  <h5 class="formulario-titulos">LOCALIZACION:</h5> <span class="obligatorio">(*) Campos Obligatorios</span>
              </div>
              <div class="form-row">
                  <div class="col-lg-6 col-sm-12">
                    <select type="text" class="form-control espacio-campos" v-model.trim="$v.idcountry.$model" @change="cambiarPais()" name="idcountry" v-model="idcountry">
                      <option value="">Seleccione una nacionalidad</option>
                      <option value="205">España</option>
                      <option value="169">Panama</option> 
                      <option value="172">Peru</option> 
                    </select>
                    <label class="error" v-if="!$v.idcountry.required">El país es obligatorio</label>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <select type="text" class="form-control espacio-campos" v-model.trim="$v.idstate.$model"  @change="cambiarDepartamento()" name="idstate" v-model="idstate">
                      <option value="">Seleccione un departamento</option>
                      <option v-for="(option, index) in arStates" :key="index" :value="option.id" :selected="option.id === idstate ? 'selected' : ''">{{ option.name }}</option>
                    </select>
                    <label class="error" v-if="!$v.idstate.required">El departamento es obligatorio</label>
                  </div>
              </div>
              <div class="form-row"> 
                <div class="col-lg-6 col-sm-12">
                    <select type="text" class="form-control espacio-campos" v-model.trim="$v.idcity.$model" name="idcity" v-model="idcity">
                      <option value="">Seleccione un distrito</option>
                      <option v-for="(option, index) in arCities" :key="index" :value="option.id" :selected="option.id === idcity ? 'selected' : ''">{{ option.name }}</option>
                    </select>
                    <label class="error" v-if="!$v.idcity.required">La ciudad es obligatoria</label>
                </div>
              </div>

              <div class="espaciado-formulario">
                  <h5 class="formulario-titulos">CARACTERISTICAS PERSONALES:</h5> <span class="obligatorio">(*) Campos Obligatorios</span>
              </div>
              
              <div class="form-row">

                <div class="col-lg-6 col-sm-12" v-if=" sexo === 'F' || sexo === 'T'">
                  <select type="text" class="form-control espacio-campos" name="pecho" v-model="pecho">
                    <option value="">Seleccione tamaño de pecho</option>
                    <option value="AA">AA</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="DD">DD</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>

                <div class="col-lg-6 col-sm-12" v-if=" sexo === 'M' ">
                 <select type="text" class="form-control espacio-campos" name="pene" v-model="pene">
                    <option value="">Seleccione tamaño de pene</option>
                    <option value="SMALL">Small</option>
                    <option value="MEDIUM">Medium</option>
                    <option value="LARGE">Large</option>
                  </select>
                </div>

              <div class="col-lg-6 col-sm-12">

                <select type="text" v-model="color_ojos" class="form-control espacio-campos" name="color_ojos">
                    <option value="">Seleccione un color de ojos</option>
                    <option value="Ojos Castaños">Ojos Castaños</option>
                    <option value="Ojos Negros">Ojos Negros</option>
                    <option value="Ojos Miel (Avellana)">Ojos Miel (Avellana)</option>
                    <option value="Ojos Verdes">Ojos Verdes</option>
                    <option value="Ojos Azules">Ojos Azules</option>
                    <option value="Otros">Otros</option>
                  </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="color_cabello" v-model="color_cabello">
                  <option value="">Seleccione un color de cabello</option>
                  <option value="Cabello negro">Cabello negro</option>
                  <option value="Cabello castaño">Cabello castaño</option>
                  <option value="Cabello rubio o castaño claro">Cabello rubio o castaño claro</option>
                  <option value="Cabello pelirrojo (rojo anaranjado)">Cabello pelirrojo (rojo anaranjado)</option>
                  <option value="Cabello canoso">Cabello canoso</option>
                  <option value="Cabello blanco">Cabello blanco</option>
                  <option value="Otros">Otros</option>
                </select>
                
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="corte_intimo" v-model="corte_intimo">
                  <option value="">Seleccione un corte intimo</option>
                  <option value="Natural">Natural</option>
                  <option value="Triangulo">Triangulo</option>
                  <option value="Afeitado">Afeitado</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>
            <div class="form-row">
                <div class="col-lg-6 col-sm-12">

                  <h5 class="formulario-titulos">ESTATURA (CM):</h5>

                    <div class="busqueda-detallada-range espacio-campos">
                        <div class="col-lg-12 col-sm-12">

                          <vue-slider :marks="[140, 240]" :min="140" :max="240" v-model="estatura"></vue-slider>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">

                  <h5 class="formulario-titulos">PESO (KG):</h5>

                    <div class="busqueda-detallada-range espacio-campos">
                        <div class="col-lg-12 col-sm-12">
                            
                            <vue-slider :marks="[45, 150]" :min="45" :max="150" v-model="peso"></vue-slider>

                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ORIENTACIÓN SEXUAL:</h5>
            <div class="form-row">
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="raLESBIANA" class="custom-control-input" name="orientacion" value="LESBIANA" @change="checkOrientacion('LESBIANA')" v-model="orientacion">
                <label class="custom-control-label custom-control-label-espacio" for="raLESBIANA">Lesbiana</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="raHETEROSEXUAL" class="custom-control-input" name="orientacion" color="info" value="HETEROSEXUAL" @change="checkOrientacion('HETEROSEXUAL')" v-model="orientacion">
                <label class="custom-control-label custom-control-label-espacio" for="raHETEROSEXUAL">Heterosexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="raTRANSEXUAL" class="custom-control-input" name="orientacion" color="info" value="TRANSEXUAL" @change="checkOrientacion('TRANSEXUAL')" v-model="orientacion">
                <label class="custom-control-label custom-control-label-espacio" for="raTRANSEXUAL">Transexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="raHOMOSEXUAL" class="custom-control-input" name="orientacion" color="info" value="HOMOSEXUAL" @change="checkOrientacion('HOMOSEXUAL')" v-model="orientacion">
                <label class="custom-control-label custom-control-label-espacio" for="raHOMOSEXUAL">Homosexual</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="raBISEXUAL" class="custom-control-input" name="orientacion" color="info" value="BISEXUAL" @change="checkOrientacion('BISEXUAL')" v-model="orientacion">
                <label class="custom-control-label custom-control-label-espacio" for="raBISEXUAL">Bisexual</label>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos no-marmar">CATEGORÍA:</h5>
            <span class="aparecer">Selecciona una o mas categorias en la que quieres aparecer</span>
            <div class="form-row">
                <div class="col-lg-4 col-sm-12" v-for="categoria in arCategorias" :key=" 'o_' + categoria.id" v-show=" checkVisibility(categoria.nombre_categoria) ">
                  
                  <!-- Start Categorias -->
                  <div class="form-group checksito">
                    <input type="checkbox" @change="$v.checkbox_items.$touch()" style="display:none;" :value="categoria.id" :true-value="1" :false-value="0" v-model="categoria.es_marcado" :id="'categoria' + categoria.id" name="categorias" class="inp-cbx always-validate">
                    <label class="cbx" style="width:100%;" :for="'categoria' + categoria.id">
                      <span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg>
                      </span>
                      <span class="tam-check">{{categoria.nombre_categoria}}</span>
                    </label>
                  </div>                 
                   <!-- End Categorias -->
                </div>
             <!--    <label class="error" v-if="!$v.selectedCategorias.required">Seleccione una categoria al menos</label> -->

            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos no-marmar">IDIOMAS:</h5>
            <span class="aparecer">Selecciona los idiomas en los que te puedes comunicar con tus clientes</span>
            <div class="form-row">
                <div class="col-lg-4 col-sm-12" v-for="idioma in arIdiomas" :key=" 'o_' + idioma.id" >
                  <!-- Start CHECK -->
                  <div class="form-group checksito-total">
                      <input type="checkbox" style="display:none;" :true-value="1" :false-value="0" v-model="idioma.es_marcado" :id="'idioma' + idioma.id" name="idiomas[]" class="inp-cbx always-validate">
                      <label class="cbx" style="width:100%;" :for="'idioma' + idioma.id">
                        <span>
                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                          </svg>
                        </span>
                        <span class="tam-check" style="text-transform:uppercase;">{{idioma.nombre_idioma}}</span>
                      </label>
                  </div>
                  <!-- End CHECK -->
                </div>
            </div>
          </div>


          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TATUAJE(S):</h5>
            <div class="form-row">

              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="tatuaje_si" name="tatuaje" :value="1" class="custom-control-input" v-model="tatuaje">
                <label class="custom-control-label custom-control-label-espacio" for="tatuaje_si">Sí</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="tatuaje_no" name="tatuaje" :value="0" class="custom-control-input" v-model="tatuaje">
                <label class="custom-control-label custom-control-label-espacio" for="tatuaje_no">No</label>
              </div>

            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">PIERCING(S):</h5>
            <div class="form-row">

              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="piercing_si" name="piercing" :value="1" class="custom-control-input" v-model="piercing">
                <label class="custom-control-label custom-control-label-espacio" for="piercing_si">Sí</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <input type="radio" id="piercing_no" name="piercing" :value="0" class="custom-control-input" v-model="piercing">
                <label class="custom-control-label custom-control-label-espacio" for="piercing_no">No</label>
              </div>


            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">FUMADOR(A):</h5>
            <div class="form-row">

                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="fumador_si" name="fumador" :value="1" class="custom-control-input" v-model="fumador">
                  <label class="custom-control-label custom-control-label-espacio" for="fumador_si">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                  <input type="radio" id="fumador_no" name="fumador" :value="0" class="custom-control-input" v-model="fumador">
                  <label class="custom-control-label custom-control-label-espacio" for="fumador_no">No</label>
                </div>

            </div>
          </div>

          <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">SEGURIDAD:</h5>

                <div class="form-group checksito">
                  <input id="seguridad" name="seguridad" :true-value="1" :false-value="0" type="checkbox" v-model="seguridad" class="inp-cbx" style="display: none;"> 
                  <label for="seguridad" class="cbx"><span><svg width="12px" height="10px" viewBox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span> <span class="tam-check">Esta opción ocultará sus datos de contacto (teléfono y/o WhatsApp y correo) a los usuarios no registrados debidamente. No obstante, tenga presente que esta opción afectará el porcentaje de clientes potenciales (la mayoría de nuestros usuarios son usuarios no registrados).</span></label>
                </div>

          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">FRASE QUE RESALTE:</h5>
            <div class="form-row espacio-campos">
              <div class="col-lg-12 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="frase" v-model="frase" placeholder="Ejm: Te invito a mi mundo de fantasía">
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">DESCRIPCIÓN:</h5>
            <div class="form-row espacio-campos">
              <div class="col-lg-12 col-sm-12">
                <textarea type="text" rows="5" class="form-control" name="descripcion" v-model="descripcion"></textarea>
                <small id="emailHelp" class="form-text text-muted espacio-campos informativo">1000 caracteres como máximo</small>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <div class="form-row">
              <button type="button" @click="actualizarPerfilProfesional()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
            </div>
          </div>

    </form>
</template>


<script>

//import VueRangeSlider from 'vue-range-component'

import DatePick from 'vue-date-pick';
import 'vue-date-pick/dist/vueDatePick.css';
import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';

import { required, minLength } from 'vuelidate/lib/validators';

import { ValidationProvider } from 'vee-validate';



export default {
    components: {
      DatePick,
      VueSlider,
      ValidationProvider
    },
    data(){
        return {
            nombre : '',
            apodo : '',
            frase : '',
            descripcion : '',
            email : '',
            confirmar_email : '',
            clave : '',
            verificar_clave : '',
            fecha_nacimiento : '',
            sexo : '',
            idcountry : 0,
            idstate : 0,
            idcity : 0,
            idioma : '',
            etnia : '',
            pecho : '',
            pene : '',
            color_ojos : '',
            color_cabello : '',
            corte_intimo : '',
            estatura : 140,
            peso : 50,
            orientacion : '',
            tatuaje : 0,
            piercing : 0,
            fumador : 0,
            seguridad : 0,
            estado : '',
            id_perfil : 0,
            usuario: [],
            extras: [],
            arCategorias: [],
            arIdiomas: [],
            arStates: [],
            arCities: [],
            selectedCategorias: 0,
            checkbox_items: []
        }
    },
    validations: {
      nombre: {
        required
      },
      apodo: {
        required
      },
      sexo: {
        required
      },
      fecha_nacimiento: {
        required
      },
      idcountry: {
        required
      },
      idstate: {
        required
      },
      idcity: {
        required
      }
      /* selectedCategorias: {
        checked (val) {
          return val
        }
      }, 
      checkbox_items: {
        checked: value => {
          return value.length
        }
      } */
    },
    methods:{
        mostrarPerfilProfesional(){

            let me = this;

            // Make a request for a user with a given ID
            axios.get('/perfil-profesional/editar')
            .then(function (response) {
                // handle success

                let usuario = response.data.usuario;
                
                me.arCategorias = usuario.categorias;   
                me.arIdiomas = usuario.idiomas;   

                me.estatura = usuario.extras.estatura;
                me.peso = usuario.extras.peso;
                me.fumador = usuario.extras.fumador;
                me.tatuaje = usuario.extras.tatuaje;
                me.piercing = usuario.extras.piercing;
                me.orientacion = usuario.extras.orientacion;
                me.seguridad = usuario.extras.seguridad;
                me.frase = usuario.extras.frase;
                me.descripcion = usuario.extras.descripcion;
                me.nombre = usuario.nombre;
                me.apodo = usuario.apodo;
                me.email = usuario.email;
                me.confirmar_email = usuario.email;
                me.fecha_nacimiento = usuario.fecha_nacimiento;
                me.idcountry = usuario.idcountry;
                me.idstate = usuario.idstate;
                me.idcity = usuario.idcity;
                me.idioma = usuario.idioma;
                me.pecho = usuario.extras.pecho;
                me.sexo = usuario.sexo;
                me.color_ojos = usuario.extras.color_ojos;
                me.color_cabello = usuario.extras.color_cabello;
                me.corte_intimo = usuario.extras.corte_intimo;
                me.pene = usuario.extras.pene;
                me.arStates = usuario.states;
                me.arCities = usuario.cities;

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        },
        checkOrientacion(categoria){
            
            this.arCategorias.forEach(function(categoria) {
              categoria.es_marcado = 0;
            });
         
        },
        cambiarPais(){
                
                let me = this;

                axios.post('seleccionar-states', {
                    'idcountry' : me.idcountry
                })
                .then(function (response) {

                    me.arStates = response.data.states;   

                })
                .catch(function (error) {
                    console.log(error);
                });
                
        },
        cambiarDepartamento(){

            let me = this;

            axios.post('seleccionar-cities', {
              'idstate' : me.idstate
            })
            .then(function (response) {

                me.arCities = response.data.cities; 

            })
            .catch(function (error) {
                console.log(error);
            });

        },
        checkVisibility(categoria){

            if(this.orientacion == "LESBIANA" && categoria == "MUJERES") return true;
            if(this.orientacion == "LESBIANA" && categoria == "PAREJAS") return true;
            if(this.orientacion == "LESBIANA" && categoria == "MASAJES") return true;

            if(this.orientacion == "HETEROSEXUAL" && categoria == "MASAJES") return true;
            if(this.orientacion == "HETEROSEXUAL" && categoria == "PAREJAS") return true;
            if(this.orientacion == "HETEROSEXUAL" && categoria == "TRANS") return true;

            if(this.orientacion == "BISEXUAL" && categoria == "TRANS") return true;
            if(this.orientacion == "BISEXUAL" && categoria == "MUJERES") return true;
            if(this.orientacion == "BISEXUAL" && categoria == "GIGOLOS") return true;
            if(this.orientacion == "BISEXUAL" && categoria == "GAYS") return true;
            if(this.orientacion == "BISEXUAL" && categoria == "MASAJES") return true;
            if(this.orientacion == "BISEXUAL" && categoria == "PAREJAS") return true;

            if(this.orientacion == "HOMOSEXUAL" && categoria == "GIGOLOS") return true;
            if(this.orientacion == "HOMOSEXUAL" && categoria == "GAYS") return true;
            if(this.orientacion == "HOMOSEXUAL" && categoria == "PAREJAS") return true;

            if(this.orientacion == "TRANSEXUAL" && categoria == "GIGOLOS") return true;
            if(this.orientacion == "TRANSEXUAL" && categoria == "GAYS") return true;
            if(this.orientacion == "TRANSEXUAL" && categoria == "PAREJAS") return true;


        },
        
        validarPerfilProfesional(){
          
          this.$v.$touch()

          if (this.$v.$invalid) {           
            return 1;
          } else {
            // do your submit logic here
            return 0;
          }

        },
        actualizarPerfilProfesional(){

            if(this.validarPerfilProfesional()){
              Swal.fire('ERROR!', 'Existen errores en los campos. Verifique.', 'error');
              return;
            }

            let me = this;

            // Make a request for a user with a given ID
            axios.put('/perfil-profesional/actualizar', {
              'nombre' : this.nombre,
              'apodo' : this.apodo,
              'email' : this.email,
              'fecha_nacimiento' : this.fecha_nacimiento,
              'sexo' : this.sexo,
              'idcountry' : this.idcountry,
              'idstate' : this.idstate,
              'idcity' : this.idcity,
              'frase' : this.frase,
              'descripcion' : this.descripcion,
              'pecho' : this.pecho,
              'pene' : this.pene,
              'color_ojos' : this.color_ojos,
              'color_cabello' : this.color_cabello,
              'corte_intimo' : this.corte_intimo,
              'estatura' : this.estatura,
              'peso' : this.peso,
              'orientacion' : this.orientacion,
              'tatuaje' : this.tatuaje,
              'piercing' : this.piercing,
              'fumador' : this.fumador,
              'seguridad' : this.seguridad,
              'categorias' : JSON.stringify(this.arCategorias),
              'idiomas' : JSON.stringify(this.arIdiomas),
            })
            .then(function (response) {
                // handle success
                Swal.fire('CONFIRMACION!', response.data.mensaje, 'success');

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        }
    },
    mounted() {
        this.mostrarPerfilProfesional();
    }

};
</script>
