<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
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
