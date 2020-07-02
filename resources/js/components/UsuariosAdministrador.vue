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
                <h4 class="card-title">Usuarios de MeetForNight</h4>
                <p class="card-category">Listado de usuarios registrados en el portal</p>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <th>ID</th>
                    <th class="text-center"></th>
                    <th>Nombre</th>
                    <th>Categorias</th>
                    <th>City</th>
                    <th class="text-right">Acciones</th>
                  </thead>
                  <tbody>
                    <tr v-for="(usuario,index) in arUsuarios" :key="usuario.id">
                      <td>{{usuario.id}}</td>
                      <td>
                        <div class="img-container">
                          <img
                            src="https://images.thenorthface.com/is/image/TheNorthFace/NF0A2VFL_619_hero"
                            width="80"
                            rel="nofollow"
                            alt="..."
                          />
                        </div>
                      </td>
                      <td>
                        <h5>{{usuario.nombre}}</h5>
                      </td>
                      <td>{{obtenerCategorias(usuario.categorias)}}</td>
                      <td class="text-primary">Oud-Turnhout</td>
                      <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info"  @click="perfil(usuario)">
                            <i class="material-icons">person</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success" @click="editar(usuario)">
                              <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger" @click="eliminar(usuario, index)">
                              <i class="material-icons">close</i>
                          </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer">
              <nav>
                <ul class="pagination ir-izquierda paginador-meet">
                  <li class="page-item" v-if="pagination.current_page > 1">
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="cambiarPagina(pagination.current_page - 1)"
                    >Anterior</a>
                  </li>
                  <li
                    class="page-item"
                    v-for="page in pagesNumber"
                    :key="page"
                    :class="[page == isActived ? 'active' : '']"
                  >
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="cambiarPagina(page)"
                      v-text="page"
                    ></a>
                  </li>
                  <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="cambiarPagina(pagination.current_page + 1)"
                    >Siguiente</a>
                  </li>
                </ul>
              </nav>
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Company (disabled)</label>
                        <input type="text" class="form-control" disabled />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Fist Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Adress</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">City</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Country</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Postal Code</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <div class="form-group">
                          <label
                            class="bmd-label-floating"
                          >Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                          <textarea class="form-control" rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary pull-right">Actualizar</button>
                  <button
                    type="button"
                    class="btn btn-primary pull-right"
                    @click="cancelar()"
                  >Cancelar</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="javascript:;">
                  <!--                   <img class="img" src="../assets/img/faces/marc.jpg" />
                  -->
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p
                  class="card-description"
                >Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</p>
                <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
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
  props: ["basepath"],
  data() {
    return {
      arUsuarios: [],
      pagination: {
        total: 0,
        current_page: 0,
        per_page: 0,
        last_page: 0,
        from: 0,
        to: 0
      },
      offset: 20,
      path: "",
      page: 1,
      id: 0,
      isEditing: false,
      usuarioSelected: []
    };
  },
  mounted() {
    this.listar();
  },
  computed: {
    isActived: function() {
      return this.pagination.current_page;
    },
    //Calcula los elementos de la paginación
    pagesNumber: function() {
      if (!this.pagination.to) {
        return [];
      }

      var from = this.pagination.current_page - this.offset;
      if (from < 1) {
        from = 1;
      }

      var to = from + this.offset * 2;
      if (to >= this.pagination.last_page) {
        to = this.pagination.last_page;
      }

      var pagesArray = [];
      while (from <= to) {
        pagesArray.push(from);
        from++;
      }
      return pagesArray;
    }
  },
  methods: {
    obtenerCategorias(categorias) {
      let todas = "";
      categorias.forEach(function(item) {
        todas += item.nombre_categoria + ", ";
      });

      return todas;
    },
    perfil(usuario){

      let me = this;
      window.open( me.basepath + "/" + me.$locale + "/perfil/" + usuario.apodo, "_blank");

    },
    cambiarPagina(pagina) {
      let me = this;

      //Actualiza la página actual
      me.pagination.current_page = pagina;
      me.page = pagina;

      //Envia la petición para visualizar la data de esa página
      me.listar();
    },
    listar() {
      let me = this;

      axios.post( me.basepath + "/" + me.$locale + "/admin/usuarios/listar", {
        page: me.page
      })
      .then(function(response) {
        var respuesta = response.data;

        me.arUsuarios = respuesta.arUsuarios;
        me.pagination = respuesta.pagination;
        
      })
      .catch(function(error) {
        // handle error
        console.log(error);
      });
    },
    eliminar(categoria, index) {
      let me = this;

      Swal.fire({
        title: "CONFIRMAR",
        text: "Una vez eliminado, no podrás recuperar el registro!",
        type: "error",
        showCancelButton: true,
        confirmButtonText: "ELIMINAR",
        cancelButtonText: "CANCELAR"
      }).then(result => {
        if (result.value) {
          axios
            .post(
              me.basepath + "/" + me.$locale + "/admin/usuarios/eliminar",
              {
                id: categoria.id
              }
            )
            .then(function(response) {
              if (response.data.code == 0) me.$delete(me.arCategorias, index);

              Swal.fire(
                "CONFIRMACIÓN",
                response.data.mensaje,
                response.data.status
              );
            });
        }
      });
    },
    agregar() {

        let me = this;

        me.isEditing = true;
        me.usuarioSelected = [];

    },
    grabar() {

        let me = this;
        
        axios.post( me.basepath + '/' +  me.$locale + '/admin/usuarios/grabar', {
          'id' : me.usuarioSelected.id,
          'nombre_categoria' : me.usuarioSelected.nombre_categoria,
          'icono_categoria' : me.usuarioSelected.icono_categoria,
          'estado_categoria' : me.usuarioSelected.estado_categoria
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
      me.usuarioSelected = categoria;

    },
    limpiar(){

        let me = this;
        me.isEditing = false;
        me.usuarioSelected = [];

    }
  }
};
</script>