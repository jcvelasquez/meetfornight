<template>

<div>

<template v-if="!isEditing">

<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
                <div class="btn-group pull-right">
                  <button
                    type="button"
                    class="btn btn-danger dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">Filtrar por pais</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">España</a>
                    <a class="dropdown-item" href="#">Perú</a>
                    <a class="dropdown-item" href="#">Panamá</a>
                  </div>
                  <button
                    type="button"
                    class="btn btn-info pull-right margin-left-20"
                    @click="agregar()"
                  >AGREGAR NUEVO</button>
                </div>
                <div class="text-left">
                    <h4 class="card-title">Blog de MeetForNight</h4>
                    <p class="card-category">Listado de blog registradas en el portal</p>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Icono</th>
                    <th>Estado</th>
                    <th class=" text-right">
                       Acciones
                    </th>
                  </thead>
                  <tbody>

                    <tr v-for="(categoria, index) in arCategorias" :key="categoria.id">
                      <td>{{categoria.id}}</td>
                      <td><h5>{{categoria.nombre_categoria}}</h5></td>
                      <td><i class=""></i>{{categoria.icono_categoria}}</td>
                      <td> 
                          <span class="badge badge-success" v-if="categoria.estado_categoria == 1">ACTIVO</span>
                          <span class="badge badge-danger" v-else>INACTIVO</span>
                      </td>
                      <td class="td-actions text-right">
                          
                          <button type="button" rel="tooltip" class="btn btn-success" @click="editar(categoria)">
                              <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger" @click="eliminar(categoria, index)">
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
                    <h4 class="card-title">Editar Categoria</h4>
                    <p class="card-category">Completa todos los campos</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="bmd-label-floating">Nombre categoria</label>
                              <input type="text" class="form-control" v-model="categoriaSelected.nombre_categoria" />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="bmd-label-floating">Icono</label>
                              <select class="form-control" v-model="categoriaSelected.icono_categoria">
                                  <option value="icon-c-mujer"> MUJER </option>
                                  <option value="icon-c-gigolo"> GIGOLO </option>
                                  <option value="icon-c-homo"> HOMO </option>
                                  <option value="icon-c-trans"> TRANS </option>
                                  <option value="icon-c-fetiche"> FETICHE</option>
                                  <option value="icon-c-masaje">MASAJE</option>
                                  <option value="icon-c-parejas">PAREJAS</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="bmd-label-floating">Estado</label>
                              <select class="form-control" v-model="categoriaSelected.estado_categoria">
                                  <option value="1"> ACTIVO </option>
                                  <option value="0"> INACTIVO </option>
                              </select>
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
        data(){
            return {
                arCategorias: [],
                id: 0,
                isEditing: false,
                categoriaSelected : []
            }
        },
        methods:{
           
            listar(){

                  let me = this;

                  axios.get(  me.basepath + "/" +  me.$locale +  "/categorias/listar").then(function (response) {

                      var respuesta= response.data;
                      me.arCategorias = respuesta.categorias;

                  }).catch(function (error) {  console.log(error);     });
                
            },
            eliminar(categoria, index) {

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

                      axios.post( me.basepath + "/" +  me.$locale +  "/admin/categorias/eliminar", {
                          'id' : categoria.id,

                      }).then(function (response) {

                          if(response.data.code == 0) me.$delete(me.arCategorias, index);

                          Swal.fire('CONFIRMACIÓN', response.data.mensaje , response.data.status );

                      });

                  } 
              
              });
   
          },
          agregar() {

              let me = this;

              me.isEditing = true;
              me.categoriaSelected = [];

          },
          grabar() {

              let me = this;
              
              axios.post( me.basepath + '/' +  me.$locale + '/admin/categorias/grabar', {
                'id' : me.categoriaSelected.id,
                'nombre_categoria' : me.categoriaSelected.nombre_categoria,
                'icono_categoria' : me.categoriaSelected.icono_categoria,
                'estado_categoria' : me.categoriaSelected.estado_categoria
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
          editar(categoria) {
            
            let me = this;

            me.isEditing = true;
            me.categoriaSelected = categoria;

          },
          limpiar(){

              let me = this;
              me.isEditing = false;
              me.categoriaSelected = [];

          }


      }

    }
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

