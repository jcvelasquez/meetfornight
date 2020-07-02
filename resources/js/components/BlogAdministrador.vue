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
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th class=" text-right">
                       Acciones
                    </th>
                  </thead>
                  <tbody>

                    <tr v-for="(art, index) in arArticulos" :key="art.id">
                      <td>{{art.id}}</td>
                      <td><img width="80" :src=" basepath + '/fotos_profesionales/' + art.imagen " /> </td>
                      <td>{{art.titulo}}</td>
                      <td>{{art.created_at}}</td>
                      <td class="td-actions text-right">
                          
                          <button type="button" rel="tooltip" class="btn btn-success" @click="editar(art)">
                              <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger" @click="eliminar(art, index)">
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
        <div class="content animated fadeIn" v-show="isEditing">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Blog</h4>
                    <p class="card-category">Completa todos los campos</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">Texto Alternativo (Imagen)</label>
                              <select class="form-control" v-model="blogSelected.idcountry">
                                <option value="">Selecciona</option>
                                <option value="205">España</option>
                                <option value="169">Panama</option>
                                <option value="172">Peru</option>
                              </select>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">Titulo del artículo</label>
                              <input class="form-control" maxlength="190" type="text" v-model="blogSelected.titulo" />
                          </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Slug del artículo</label>
                            <input class="form-control" type="text" :value="slug" readonly />
                            <input class="form-control" type="hidden" v-model="blogSelected.slug" readonly />
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">Subtitulo del artículo</label>
                              <input class="form-control" maxlength="190" type="text" v-model="blogSelected.subtitulo" />
                          </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-12" style="margin-bottom:20px;">
                              <label class="bmd-label-floating">Imagen</label>
                              <input type="file" id="myfile" name="myfile" class="form-control">
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">Texto Alternativo (Imagen)</label>
                              <input type="text" class="form-control" maxlength="190" v-model="blogSelected.imagen_alt"/>
                          </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">Contenido del artículo</label>
                              <vue-editor v-model="blogSelected.contenido"></vue-editor>
<!--                               <wysiwyg v-model="blogSelected.contenido"  />
 -->                          </div>
                        </div>
                    </div>   

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">Meta Keywords SEO</label>
                              <textarea class="form-control" rows="3" v-model="blogSelected.keywords_seo"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">Meta Descripcion SEO</label>
                              <textarea class="form-control" rows="3" v-model="blogSelected.descripcion_seo"></textarea>
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

  //import "vue-wysiwyg/dist/vueWysiwyg.css";

  import { VueEditor } from "vue2-editor";


    export default {
        components: {
          VueEditor
        },
        props: ['basepath'],
        mounted() {

            this.listar();

        },
        data(){
            return {
                arArticulos: [],
                id: 0,
                isEditing: false,
                blogSelected : []
            }
        },
        computed: {
          slug: function () {
            let slug = this.slugify(this.blogSelected.titulo);
            this.blogSelected.slug = slug;
            return slug;
          }
        },
        methods:{

            slugify(text, ampersand = 'and') {
              const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ'
              const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh'
              const p = new RegExp(a.split('').join('|'), 'g')

              return text.toString().toLowerCase()
                .replace(/[\s_]+/g, '-')
                .replace(p, c =>
                  b.charAt(a.indexOf(c)))
                .replace(/&/g, `-${ampersand}-`)
                .replace(/[^\w-]+/g, '')
                .replace(/--+/g, '-')
                .replace(/^-+|-+$/g, '')

            },  
            listar(){

                  let me = this;

                  axios.get(  me.basepath + "/" +  me.$locale +  "/admin/blog/listar").then(function (response) {

                      var respuesta= response.data;
                      me.arArticulos = respuesta.arArticulos;

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

                      axios.post( me.basepath + "/" +  me.$locale +  "/admin/blog/eliminar", {
                          'id' : categoria.id,

                      }).then(function (response) {

                          if(response.data.code == 0) me.$delete(me.arArticulos, index);

                          Swal.fire('CONFIRMACIÓN', response.data.mensaje , response.data.status );

                      });

                  } 
              
              });
   
          },
          agregar() {

              let me = this;

              me.isEditing = true;
              me.blogSelected = [];

          },
          grabar() {

              let me = this;
              
              axios.post( me.basepath + '/' +  me.$locale + '/admin/blog/grabar', {
                'id' : me.blogSelected.id,
                'titulo' : me.blogSelected.titulo,
                'subtitulo' : me.blogSelected.subtitulo,
                'slug' : me.blogSelected.slug,
                'imagen' : me.blogSelected.imagen,
                'imagen_alt' : me.blogSelected.imagen_alt,
                'descripcion_seo' : me.blogSelected.descripcion_seo,
                'keywords_seo' : me.blogSelected.keywords_seo,
                'contenido' : me.blogSelected.contenido
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
            me.blogSelected = categoria;

          },
          limpiar(){

              let me = this;
              me.isEditing = false;
              me.blogSelected = [];

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


