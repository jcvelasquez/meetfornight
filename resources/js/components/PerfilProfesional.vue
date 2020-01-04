<template>
    <form action="#" method="post">

          <div class="bloques-de-perfil">
            <div class="espaciado-formulario">
            <h5 class="formulario-titulos">DATOS:</h5>
            <span class="obligatorio">(*) Campos Obligatorios</span>
            </div>
            <div class="form-row">
              <div class="col-lg-12 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="nombre" placeholder="Nombre *" id="nombre" v-model="nombre">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="text" class="form-control" name="apodo" id="apodo" v-model="apodo" placeholder="Apodo *">
                <small id="emailHelp" class="form-text text-muted espacio-campos informativo">El Apodo será el único dato personal que se visualizará en la web</small>
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="email" class="form-control espacio-campos" name="email" id="email" v-model="email" placeholder="Email *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="email" class="form-control espacio-campos" name="confirmar_email" id="confirmar_email" v-model="confirmar_email" placeholder="Confirmar email *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="clave" id="clave" v-model="clave" placeholder="Contraseña *">
              </div>
              <div class="col-lg-12 col-sm-12">
                <input type="password" class="form-control espacio-campos" name="verificar_clave" id="verificar_clave" v-model="verificar_clave" placeholder="Verificar Contraseña *">
              </div>


              <div class="col-lg-6 col-sm-12">
                <input type="date" class="form-control espacio-campos" name="fecha_nacimiento" id="fecha_nacimiento" v-model="fecha_nacimiento">
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="sexo" id="sexo" v-model="sexo">
                  <option value="">Seleccione un sexo</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  <option value="Femenino">Trans</option>
                </select>
              </div>
              <div class="col-lg-12 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="nacionalidad" id="nacionalidad" v-model="nacionalidad">
                  <option value="">Seleccione una nacionalidad</option>
                  <option value="PE">Peruana</option>
                  <option value="PA">Panameña</option>
                  <option value="ES">Española</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="departamento" id="departamento" v-model="departamento">
                  <option value="Departamento">Departamento * *</option>
                  <option value="Departamento">Departamento * *</option>
                  <option value="Departamento">Departamento * *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="distrito" id="distrito" v-model="distrito">
                  <option value="Distrito">Distrito *</option>
                  <option value="Distrito">Distrito *</option>
                  <option value="Distrito">Distrito *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="idioma" id="idioma" v-model="idioma">
                    <option value="">Seleccione un idioma</option>
                    <option value="ES">Español</option>
                    <option value="EN">Ingles</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="etnia" id="etnia" v-model="etnia">
                  <option value="Etnia">Etnia *</option>
                  <option value="Etnia">Etnia *</option>
                  <option value="Etnia">Etnia *</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="pecho" id="pecho" v-model="pecho">
                  <option value="">Seleccione tamaño de pecho</option>
                  <option value="AA">AA</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="DD">DD</option>
                </select>
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="color_ojos" id="color_ojos" v-model="color_ojos" placeholder="Color de Ojos *">
              </div>
              <div class="col-lg-6 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="color_cabello" id="color_cabello" v-model="color_cabello" placeholder="Color de cabello *">
              </div>
              <div class="col-lg-6 col-sm-12">
                <select type="text" class="form-control espacio-campos" name="corte_intimo" id="corte_intimo" v-model="corte_intimo">
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
                    <div class="busqueda-detallada-range espacio-campos">
                        <div class="col-lg-3 col-sm-12">
                            <label>Estatura</label>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <vue-range-slider ref="slider" :min="140" :max="240" v-model="estatura"></vue-range-slider>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="busqueda-detallada-range espacio-campos">
                      <div class="col-lg-3 col-sm-12">
                            <label>Peso</label>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <vue-range-slider ref="slider" :min="45" :max="150" v-model="peso"></vue-range-slider>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ORIENTACIÓN SEXUAL:</h5>
            <div class="form-row">
              <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="orientacion" color="info" value="LESBIANA" v-model="orientacion">Lesbiana</p-input>
              </div>
              <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="orientacion" color="info" value="HETEROSEXUAL" v-model="orientacion">Heterosexual</p-input>
              </div>
              <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="orientacion" color="info" value="TRANSEXUAL" v-model="orientacion">Transexual</p-input>
              </div>
              <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="orientacion" color="info" value="HOMOSEXUAL" v-model="orientacion">Homosexual</p-input>
              </div>
              <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="orientacion" color="info" value="BISEXUAL" v-model="orientacion">Bisexual</p-input>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos no-marmar">CATEGORÍA:</h5>
            <span class="aparecer">En la(s) que quieres aparecer</span>
            <div class="form-row">
                <div class="col-lg-4 col-sm-12" v-for="categoria in arCategorias" :key=" 'o_' + categoria.id">
                  <!-- Start Categorias -->
                  <div class="form-group checksito-total">
                      <p-input type="checkbox" color="info" :true-value="1" :false-value="0" v-model="categoria.es_marcado" @change="checkCategoria(categoria)">{{categoria.nombre_categoria}}</p-input>       
                  </div>
                  <!-- End Categorias -->
                </div>
            </div>
          </div>


          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">TATUAJE(S):</h5>
            <div class="form-row">
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="tatuaje" color="info" :value="1" v-model="tatuaje">Si</p-input>
              </div>
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="tatuaje" color="info" :value="0" v-model="tatuaje">No</p-input>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">PIERCING(S):</h5>
            <div class="form-row">
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="piercing" color="info" :value="1" v-model="piercing">Si</p-input>
              </div>
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="piercing" color="info" :value="0" v-model="piercing">No</p-input>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">FUMADOR(A):</h5>
            <div class="form-row">
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="fumador" color="info" :value="1" v-model="fumador">Si</p-input>
              </div>
              <div class="no-margin-right-check col-lg-1 col-md-12 col-sm-12 espacio-campos">
                <p-input type="radio" name="fumador" color="info" :value="0" v-model="fumador">No</p-input>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">SEGURIDAD:</h5>
                <div class="form-group checksito-total">
                      
                      
                      <p-input type="checkbox" color="info" :true-value="1" :false-value="0" v-model="seguridad"></p-input>   
                      <label>
                        <span class="color-check espe">Esta opción ocultará tus datos de contacto (teléfono y/o WhatsApp y correo) a los usuarios y/o clientes no registrados debidamente en nuestra plataforma, es decir, a los usuarios y/o clientes anónimos. No obstante, ten presente que esta opción afectará el porcentaje de clientes potenciales (la mayoría de nuestros usuarios y/o clientes son anónimos).</span>
                      </label>    

                </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">FRASE QUE RESALTE:</h5>
            <div class="form-row espacio-campos">
              <div class="col-lg-12 col-sm-12">
                <input type="text" class="form-control espacio-campos" name="frase" id="frase" v-model="frase" placeholder="Ejm: Te invito a mi mundo de fantasía">
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">DESCRIPCIÓN:</h5>
            <div class="form-row espacio-campos">
              <div class="col-lg-12 col-sm-12">
                <textarea type="text" rows="5" class="form-control" name="descripcion" id="descripcion" v-model="descripcion"></textarea>
                <small id="emailHelp" class="form-text text-muted espacio-campos informativo">1000 caracteres como máximo</small>
              </div>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
            </div>
          </div>
    </form>
</template>


<script>

import VueRangeSlider from 'vue-range-component'

export default {

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
            nacionalidad : '',
            departamento : '',
            distrito : '',
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
            errorPerfil : 0,
            erroresPerfil: [],
            id_perfil : 0,
            usuario: [],
            extras: [],
            arCategorias: []
        }
    },
    methods:{
        mostrarPerfilProfesional(){

            let me = this;

            // Make a request for a user with a given ID
            axios.get('/perfil-profesional/editar')
            .then(function (response) {
                // handle success
                
                //me.usuario = response.data.usuario;     
                //me.extras = response.data.usuario.extras;    
                me.arCategorias = response.data.usuario.categorias;   

                me.estatura = response.data.usuario.extras.estatura;
                me.peso = response.data.usuario.extras.peso;
                me.fumador = response.data.usuario.extras.fumador;
                me.tatuaje = response.data.usuario.extras.tatuaje;
                me.piercing = response.data.usuario.extras.piercing;

                me.orientacion = response.data.usuario.extras.orientacion;
                me.seguridad = response.data.usuario.extras.seguridad;
                me.frase = response.data.usuario.extras.frase;
                me.descripcion = response.data.usuario.extras.descripcion;

                /*me.nombre = usuario.nombre;
                me.departamento = usuario.departamento;
                me.apodo = usuario.apodo;
                me.frase = usuario.frase;
                me.descripcion = usuario.descripcion;
                me.email = usuario.email;
                me.confirmar_email = usuario.email;
                me.clave = usuario.clave;
                me.verificar_clave = usuario.clave;
                //me.usuario = usuario.usuario;
                me.fecha_nacimiento = usuario.fecha_nacimiento;
                me.sexo = usuario.sexo;
                me.nacionalidad = usuario.nacionalidad;
                me.distrito = usuario.distrito;
                me.idioma = usuario.idioma;
                me.etnia = usuario.etnia;
                me.pecho = usuario.pecho;
                me.pene = usuario.pene;
                me.color_ojos = usuario.color_ojos;
                me.color_cabello = usuario.color_cabello;
                me.corte_intimo = usuario.corte_intimo;
                me.orientacion = usuario.orientacion;
                me.tatuaje = usuario.tatuaje;
                me.piercing = usuario.piercing;
                me.fumador = usuario.fumador;
                me.seguridad = usuario.seguridad;*/



            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        },
        checkCategoria(categoria){

          console.log(categoria);

        },
        validarPerfilProfesional(){
          this.errorPerfil = 0;
          this.erroresPerfil = [];

          if(!this.nombre) this.erroresPerfil.push("El nombre no puede estar vacio");
          if(!this.apodo) this.erroresPerfil.push("El apodo no puede estar vacio");
          
          if(this.erroresPerfil.length) this.errorPerfil = 1;

          return this.errorPerfil;

        },
        actualizarPerfilProfesional(){

            if(this.validarPerfilProfesional()){
              return;
            }

            let me = this;

            // Make a request for a user with a given ID
            axios.put('/perfil-profesional/actualizar', {
              'nombre' : this.nombre,
              'apodo' : this.apodo,
              'email' : this.email,
              'clave' : this.clave,
              'fecha_nacimiento' : this.fecha_nacimiento,
              'sexo' : this.sexo,
              'nacionalidad' : this.nacionalidad,
              'idioma' : this.idioma,
              'celular' : this.celular,
              'estado' : this.estado,
              'id' : 1
            })
            .then(function (response) {
                // handle success
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
    },
    components: {
      VueRangeSlider
    },
    mounted() {
        console.log("Component mounted.");
        this.mostrarPerfilProfesional();
    }

};
</script>
