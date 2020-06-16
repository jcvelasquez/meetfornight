<template>
  <div>

    <template v-if="!isEditing">
            
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <button type="button" class="btn btn-info pull-right" @click="agregar()">AGREGAR NUEVO</button>
                        <div class="text-left">
                            <h4 class="card-title">Idiomas de MeetForNight</h4>
                            <p class="card-category">Listado de idiomas registradas en el portal</p>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead class="text-primary">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th class="text-right" width="200">Acciones</th>
                        </thead>
                        <tbody>
                            <tr v-for="(idioma, index) in arIdiomas" :key="idioma.id">
                            <td>{{idioma.id}}</td>
                            <td>
                                <h5>{{idioma.nombre_idioma}}</h5>
                            </td>
                            <td> 
                                <span class="badge badge-success" v-if="idioma.estado_idioma == 1">ACTIVO</span>
                                <span class="badge badge-danger" v-else>INACTIVO</span>
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-success" @click="editar(idioma)">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger" @click="eliminar(idioma, index)">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </template>

    <template v-else>
        <!-- BEGIN EDIT -->
        <div class="content" v-show="isEditing">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Idioma</h4>
                    <p class="card-category">Completa todos los campos</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nombre idioma</label>
                            <input type="text" class="form-control" v-model="idiomaSelected.nombre_idioma" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Estado</label>
                            <input type="number" class="form-control" v-model="idiomaSelected.estado_idioma" />
                        </div>
                        </div>
                    </div>

                    <input type="hidden" v-model="id"/>
                    <button type="button" class="btn btn-success" @click="grabar()">Actualizar</button>
                    <button type="button" class="btn btn-danger" @click="limpiar()">Cancelar</button>
                    <div class="clearfix"></div>

                </div>
                </div>
            </div>
            
            
            </div>
        </div>
        </div>
        <!-- END EDIT -->

    </template>

  </div>
</template>

<script>
export default {
  props: ['basepath'],
  mounted() {
    this.listar();
  },
  data() {
    return {
      arIdiomas: [],
      id: 0,
      isEditing: false,
      idiomaSelected : []
    };
  },
  methods: {
    listar() {
      let me = this;

        axios.get( me.basepath + "/" +  me.$locale +  "/idiomas/listar")
            .then(function(response) {
            var respuesta = response.data;
            me.arIdiomas = respuesta.idiomas;
            })
            .catch(function(error) {
            console.log(error);
            });
    },
    eliminar(idioma, index) {

        let me = this;

        Swal.fire({
        title: 'CONFIRMAR',
        text: 'Una vez eliminado, no podrás recuperar el registro!',
        type: 'error',
        showCancelButton: true,
        confirmButtonText: 'ELIMINAR',
        cancelButtonText: 'CANCELAR'
        }).then((result) => {
        
            if (result.value) {

                axios.post( me.basepath + "/" +  me.$locale +  "/admin/idiomas/eliminar", {
                    'id' : idioma.id,

                }).then(function (response) {

                    if(response.data.code == 0) me.$delete(me.arIdiomas, index);

                    Swal.fire('CONFIRMACIÓN', response.data.mensaje , response.data.status );

                });

            } 
        
        });

            
    },
    agregar() {

      let me = this;

      me.isEditing = true;
      me.idiomaSelected = [];

    },
    grabar() {

        let me = this;
        
        axios.post( me.basepath + '/' +  me.$locale + '/admin/idiomas/grabar', {
                    'id' : me.idiomaSelected.id,
                    'nombre_idioma' : me.idiomaSelected.nombre_idioma,
                    'estado_idioma' : me.idiomaSelected.estado_idioma
                  })
                  .then(function (response) {

                    me.limpiar();
                    me.listar();

                    Swal.fire('CONFIRMACION', response.data.mensaje ,'success');

                  })
                  .catch(function (error) {
                      // handle error
                      console.log(error);
                  });


    },
    editar(idioma) {
      
      let me = this;

      me.isEditing = true;
      me.idiomaSelected = idioma;

    },
    limpiar(){

        let me = this;
        me.isEditing = false;
        me.idiomaSelected = [];

    }
    
  }
};
</script>

<style>
.div-error {
  display: flex;
  justify-content: center;
}
.text-error {
  color: red;
  font-weight: bold;
}
</style>

