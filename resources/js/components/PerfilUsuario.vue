<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <div class="espaciado-formulario">
        <h5 class="formulario-titulos">DATOS:</h5>
        <span class="obligatorio">(*) Campos Obligatorios</span>
      </div>
      <div class="form-row">
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control espacio-campos" name="nombre" id="nombre" placeholder="Nombre *" v-model="nombre" />
        </div>
        <div class="col-lg-12 col-sm-12">
          <input type="text" class="form-control" v-model="apodo" id="apodo" name="apodo" placeholder="Apodo *" />
          <small
            id="emailHelp"
            class="form-text text-muted espacio-campos informativo"
          >El Apodo será el único dato personal que se visualizará en la web</small>
        </div>
        <div class="col-lg-12 col-sm-12">
          <input
            type="password"
            class="form-control espacio-campos"
            name="clave"
            id="clave"
            v-model="clave"
            placeholder="Contraseña *"
          />
        </div>
        <div class="col-lg-12 col-sm-12">
          <input
            type="password"
            class="form-control espacio-campos"
            name="verificar-clave"
            id="verificar-clave"
            v-model="clave"
            placeholder="Verificar Contraseña *"
          />
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="date" class="form-control espacio-campos" name="fecha-nacimiento" />
        </div>
        <div class="col-lg-6 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="sexo">
            <option value="">Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
        <div class="col-lg-12 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="nacionalidad" id="nacionalidad" v-model="nacionalidad">
            <option value="">Seleccione</option>
            <option value="PE">Peruana</option>
            <option value="PA">Panameña</option>
            <option value="ES">Española</option>
          </select>
        </div>
        <div class="col-lg-12 col-sm-12">
          <select type="text" class="form-control espacio-campos" name="idioma" id="idioma" v-model="idioma">
            <option value="">Seleccione</option>
            <option value="ES">Español</option>
            <option value="EN">Ingles</option>
          </select>
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="email" id="email" v-model="email" placeholder="Email *"
          />
        </div>
        <div class="col-lg-6 col-sm-12">
          <input type="email" class="form-control espacio-campos" name="confirmar-email" v-model="email" placeholder="Confirmar email *"
          />
        </div>

      </div>

      <div class="form-row div-error" v-show="errorPerfil">
          <div class="text-center text-error">
              <div v-for="error in erroresPerfil" :key="error" v-text="error">

              </div>
          </div>
      </div>


    </div>

    <div class="bloques-de-perfil">
      <div class="form-row">
        <button type="button" @click="actualizarPerfilUsuario()" class="btn btn-primary btn-busqueda-detallada">ACTUALIZAR DATOS</button>
      </div>
    </div>
  </form>
</template>

<script>
export default {

    data(){
        return {
            nombre : '',
            apodo : '',
            email : '',
            clave : '',
            fecha_nacimiento : '',
            sexo : '',
            nacionalidad : '',
            idioma : '',
            celular : '',
            estado : '',
            errorPerfil : 0,
            erroresPerfil: [],
            id_perfil : 0
        }
    },
    methods:{
        mostrarPerfilUsuario(){

            let me = this;

            // Make a request for a user with a given ID
            axios.get('/perfil-usuario/1')
            .then(function (response) {
                // handle success
              
                me.nombre = response.data.nombre;
                me.apodo = response.data.apodo;
                me.email = response.data.email;
                me.clave = response.data.clave;
                me.fecha_nacimiento = response.data.fecha_nacimiento;
                me.sexo = response.data.sexo;
                me.nacionalidad = response.data.nacionalidad;
                me.idioma = response.data.idioma;
                me.celular = response.data.celular;
                me.estado = response.data.estado;

                console.log(response.data);

            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });

        },
        validarPerfilUsuario(){
          this.errorPerfil = 0;
          this.erroresPerfil = [];

          if(!this.nombre) this.erroresPerfil.push("El nombre no puede estar vacio");
          if(!this.apodo) this.erroresPerfil.push("El apodo no puede estar vacio");
          
          if(this.erroresPerfil.length) this.errorPerfil = 1;

          return this.errorPerfil;

        },
        actualizarPerfilUsuario(){

            if(this.validarPerfilUsuario()){
              return;
            }

            let me = this;

            // Make a request for a user with a given ID
            axios.put('/perfil-usuario/actualizar', {
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
    mounted() {
        console.log("Component mounted.");
        this.mostrarPerfilUsuario();
    }

};
</script>

<style>
  .div-error {
    display:flex;
    justify-content:center;
  }
  .text-error{
    color:red;
    font-weight:bold;
  }
</style>
