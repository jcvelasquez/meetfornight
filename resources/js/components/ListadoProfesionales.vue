<template>

<section id="listado-profesionales">
     
    <div class="bg-chicas">
      <div class="container">
        <h1 class="titulo-chicas">¿QUÉ EXPERIENCIA TE GUSTARÍA TENER?</h1>
        <form>
          <div class="row">
            <div class="col-lg-3 col-sm-12 extendido">
              <button type="button" class="form-control filtros-chicas pointer especial-filtros-chicas" data-toggle="modal" data-target="#exampleModal">BÚSQUEDA DETALLADA<i class="icon-search espacio-busqueda"></i></button>
            </div>
          </div>
          <div class="row">
            <ul class="nav nav-pills mb-3 total-100" id="pills-tab" role="tablist">
              <li class="nav-item col-lg-3 col-sm-12">
                <button class="form-control filtros-chicas pointer nav-link" id="pills-privado-tab" data-toggle="pill" href="#pills-privado" role="tab" aria-controls="pills-privado" aria-selected="true"><i class="icon-massage esp-icono-privado-index"></i>ANUNCIOS</button>
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                  <button class="form-control filtros-chicas pointer nav-link" id="pills-edad-tab" data-toggle="pill" href="#pills-edad" role="tab" aria-controls="pills-edad" aria-selected="false"><i class="icon-user-woman esp-icono-privado-index tam-index"></i>EDAD</button>
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                <input type="text" class="form-control filtros-chicas icono-mapa" placeholder="ELIGE PROVINCIA">
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                <input type="text" class="form-control filtros-chicas icono-mapa" placeholder="ELIGE POBLACIÓN">
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="tab-content col-lg-12" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-privado" role="tabpanel" aria-labelledby="pills-privado-tab">
                <div class="contenido-collapse">

                  <p-check class="p-icon p-plain boton-contenido-collapse categoria_buscar" :value="categoria.id" @change="buscarProfesionales()" color="info-o" v-model="categorias" v-for="categoria in arCategorias" :key="categoria.id" toggle>
                        <i slot="extra" :class="categoria.icono_categoria"></i>
                        {{categoria.nombre_categoria}}

                        <i slot="off-extra" :class="categoria.icono_categoria"></i>
                        <label slot="off-label">{{categoria.nombre_categoria}}</label>
                  </p-check>

                </div>
              </div>
              
             <div class="tab-pane fade" id="pills-presupuesto" role="tabpanel" aria-labelledby="pills-presupuesto-tab">
                <div class="contenido-collapse radio-presupuesto">
                  <label class="contenido-white">Presupuesto</label>

                  <div class="busqueda-detallada-range col-lg-5 no-espacio-range">
                    <span class="esp-i contenido-white">100</span>
                    <input class="range-example" type="text" min="100" max="500" value="100,200" name="points" step="1" />
                    <span class="esp-d contenido-white">500</span>
                  </div>
                </div>
              </div> 

              <div class="tab-pane fade" ref="tab_edad" id="pills-edad" role="tabpanel" aria-labelledby="pills-edad-tab">

               <div class="form-row espacio-busqueda-edad">
                    <div class="col-lg-3 col-sm-12 extendido text-right">
                        <label class="contenido-white">Edad</label>
                    </div>
                    <div class="col-lg-3 col-sm-12 extendido text-right">
                        <span class="esp-i contenido-white">18 años</span>
                    </div>
                    <div class="col-lg-3 col-sm-12 extendido">
                       <!--  <vue-range-slider :show="true" ref="slider_edad1" v-model="edad" :min=18 :max=40 @drag-end="buscarProfesionales()"></vue-range-slider> -->
                    </div>
                    <div class="col-lg-3 col-sm-12 extendido">
                        <span class="esp-d contenido-white">40 años</span>
                    </div>
                </div> 
                
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> 

    <!-- MODAL DE BUSQUEDA -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ref="modal_busqueda">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header busqueda-header">
            <h5 class="modal-title titulo-busqueda-detallada" id="exampleModalLabel">BÚSQUEDA DETALLADA</h5>
            <button type="button" class="close x-busqueda-detallada" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <h5 class="formulario-titulos"><strong>ORIENTACIÓN SEXUAL:</strong></h5>
                <div class="form-row linea-morada">
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="ALL" v-model="orientacion">Todos</p-input>
                  </div>  
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="LESBIANA" v-model="orientacion">Lesbiana</p-input>
                  </div>
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="HETEROSEXUAL" v-model="orientacion">Heterosexual</p-input>
                  </div>
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="TRANSEXUAL" v-model="orientacion">Transexual</p-input>
                  </div>
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="HOMOSEXUAL" v-model="orientacion">Homosexual</p-input>
                  </div>
                  <div class="no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                      <p-input type="radio" class="p-default p-curve p-pulse" name="orientacion" color="danger-o" value="BISEXUAL" v-model="orientacion">Bisexual</p-input>
                  </div>
                </div>
                <h5 class="formulario-titulos no-marmar"><strong>CATEGORÍA</strong></h5>
                <span class="aparecer">Selecciona la(s) categoria(s) a filtrar:</span>
                <div class="form-row linea-morada">
                    <div class="col-lg-3 col-sm-12" v-for="categoria in arCategorias" :key="categoria.id">
                          <div class="form-group">
                              <p-check @change="buscarProfesionales()" class="p-default p-curve p-pulse label_categoria" :value="categoria.id" v-model="categorias" color="danger-o">{{categoria.nombre_categoria}}</p-check>
                          </div>
                    </div>
                </div>

                <h5 class="formulario-titulos no-marmar"><strong>IDIOMAS</strong></h5>
                <span class="aparecer">Especifica si deseas comunicarte en diferentes idiomas:</span>
                <div class="form-row linea-morada">
                    <div class="col-lg-3 col-sm-12" v-for="idioma in arIdiomas" :key="idioma.id">
                          <div class="form-group">
                              <p-check class="p-default p-curve p-pulse" :value="idioma.nombre_idioma" v-model="idiomas" color="danger-o">{{idioma.nombre_idioma}}</p-check>
                          </div>
                    </div>
                </div>

                <h5 class="formulario-titulos"><strong>DATOS:</strong></h5>
                <div class="form-row linea-morada">
                <div class="col-lg-6 col-sm-12">
                    <input type="text" v-model="nombre" class="form-control espacio-campos" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="apodo" v-model="apodo" placeholder="Apodo">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="ciudad" v-model="ciudad" placeholder="Ciudad">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="distrito" v-model="distrito" placeholder="Distrito">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <select name="nacionalidad" class="form-control" v-model="nacionalidad">
                        <option value="Peruana">Seleccione nacionalidad</option>
                        <option value="España">España</option>
                        <option value="Peruana">Peruana</option>
                        <option value="Panama">Panama</option>
                    </select>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="pene" v-model="pene" placeholder="Pene">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="pecho" v-model="pecho" placeholder="Pecho">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" class="form-control espacio-campos" name="corte" v-model="corte" placeholder="Corte íntimo">
                </div>
                </div>
                <div class="form-row linea-morada">
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-row busqueda-detallada-range">
                            <div class="col-lg-4 col-sm-12">
                                <label>Estatura (CM)</label>
                            </div>  
                            <div class="col-lg-8 col-sm-12">
                              <!--   <vue-range-slider :show="true" ref="slider_estatura" :min="140" :max="220" v-model="estatura" @drag-end="buscarProfesionales()"></vue-range-slider> -->
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-row busqueda-detallada-range">
                            <div class="col-lg-4 col-sm-12">
                                <label>Peso (KG)</label>
                            </div>  
                            <div class="col-lg-8 col-sm-12">
                               <!--  <vue-range-slider :show="true" ref="slider_peso" :min="45" :max="100" v-model="peso"
                                @drag-end="buscarProfesionales()"></vue-range-slider> -->
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-row busqueda-detallada-range">
                            <div class="col-lg-4 col-sm-12">
                                <label>Edad (AÑOS)</label>
                            </div>  
                            <div class="col-lg-8 col-sm-12">
                               <!--  <vue-range-slider :show="true" ref="slider_edad2" :min="18" :max="40" v-model="edad" @drag-end="buscarProfesionales()"></vue-range-slider> -->
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="perfil-verificado">
                    <div class="form-group checksito-total">
                         <p-check class="p-default p-curve" v-model="seguridad" :true-value=1 :false-value=0 @change="buscarProfesionales()" color="success" off-color="danger" toggle>
                            <span>SOLO PERFILES SEGUROS</span>
                            <label slot="off-label"><span>TODOS LOS PERFILES</span></label>
                        </p-check>
                        <p>Alterna las vistas de los perfiles seguro que han sido confirmados, y los perfiles </p>
                    </div>
                    
                </div>
                </div>
                <div class="form-row">
                <button type="button" @click="buscarProfesionales()" class="btn btn-primary btn-busqueda-detallada">BUSCAR</button>
                </div>
            </div>
        </div>
        </div>
    </div> 
    <!-- FIN DE MODAL DE BUSQUEDA -->


        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" v-for="profesional in arUsuarios" :key="profesional.id">
                    <div class="item-chica">
                        <div class="triangulo">
                            <a href="#"><i class="icon-heart"></i></a>
                        </div>
                        <div class="texto-chica">
                            <h3 v-text="profesional.apodo"></h3>
                            <h4 v-text="profesional.ubicacion_edad"></h4>
                            <h5 v-text="profesional.precio"></h5>
                            <span>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            </span>
                            <a :href="'perfil/' + profesional.apodo">VER PERFIL</a>
                            
                        </div>
                        <img :src="'fotos-profesionales/' + profesional.url_foto" class="img-responsive" />
                    </div>
                </div>
            </div>
            
            <nav>
                <ul class="pagination ir-derecha paginador-meet">
                    <li class="page-item" v-if="pagination.current_page > 1">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1)">Anterior</a>
                    </li>
                    <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(page)" v-text="page"></a>
                    </li>
                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1)">Siguiente</a>
                    </li>
                </ul>
            </nav>

        </div>

    </section>    

</template>

<script>

    export default {
        props: ['categoriaData'],
        mounted() {

            this.listarCategorias();
            this.listarIdiomas();
            this.buscarProfesionales();

/*
            this.observer = new MutationObserver(mutations => {
                for (const m of mutations) {
                const newValue = m.target.getAttribute(m.attributeName);
                this.$nextTick(() => {
                    this.onClassChange(newValue, m.oldValue);
                });
                }
            });

            this.observer.observe(this.$refs.tab_edad, {
                attributes: true,
                attributeOldValue : true,
                attributeFilter: ['class'],
            });

            this.observer.observe(this.$refs.modal_busqueda, {
                attributes: true,
                attributeOldValue : true,
                attributeFilter: ['class'],
            });*/
            

        },
        beforeDestroy() {
            //this.observer.disconnect();
        },
        data() {
            return {
                arUsuarios : [],
                arCategorias: [],
                arIdiomas: [],
                categoria_id: 0,
                modal : 0,
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 32,
                path: '',
                page: 1,
                //FILTROS DE BUSQUEDA
                erroresBusqueda: [],
                edad: [18,40],
                estatura: [140,220],
                peso: [45,100],
                orientacion: '',
                categorias: [],
                idiomas: [],
                nacionalidad: '',
                seguridad: 0,
                nombre : '',
                pecho : '',
                apodo: '',
                ciudad: '',
                distrito: '',
                pene: '',
                corte: ''
            }
            
        },
        computed:{

            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {

            onClassChange(classAttrValue) {
                const classList = classAttrValue.split(' ');
                if (classList.includes('show')) {
                    this.refreshSlide();
                }
            },
            refreshSlide(){

                this.$refs.slider_edad1.refresh();
                this.$refs.slider_edad2.refresh();
                this.$refs.slider_peso.refresh();
                this.$refs.slider_estatura.refresh();
                
            },
            cambiarPagina(pagina){

                let me = this;
                
                //Actualiza la página actual
                me.pagination.current_page = pagina;
                me.page = pagina;

                //Envia la petición para visualizar la data de esa página
                me.buscarProfesionales();

            },
            listarIdiomas(){

                let me = this;

                axios.get('idiomas/listar').then(function (response) {

                    var respuesta= response.data;
                    me.arIdiomas = respuesta.idiomas;

                }).catch(function (error) {  console.log(error);     });
                
            },
            listarCategorias(){

                let me = this;

                axios.get('categorias/listar').then(function (response) {

                    var respuesta= response.data;
                    me.arCategorias = respuesta.categorias;

                }).catch(function (error) {  console.log(error);     });
                
            },
            limpiarCampos(){

                let me = this;

                /*me.nombre = '';
                me.apellido = '';
                me.idalerta = '';
                me.celular = '';
                me.email = '';
                me.razon = '';*/

            },
            validarBusqueda(){

                let me = this;

                me.existeError = 0;
                me.erroresBusqueda = [];

                /*if(!me.nombre) me.erroresAlerta.push("Selecciona el nombre");
                if(!me.apellido) me.erroresAlerta.push("Ingresa el apellidos");
                if(!me.idalerta) me.erroresAlerta.push("Ingresa el ID");
                if(!me.celular) me.erroresAlerta.push("Ingresa el celular");
                if(!me.email) me.erroresAlerta.push("Ingresa el email");
                if(!me.razon) me.erroresAlerta.push("Ingresa la razon"); 
                
                if(me.erroresAlerta.length) me.errorAlerta = 1;*/

                return me.existeError;

            },
            buscarProfesionales(){


                let me = this;

                if(me.validarBusqueda()){
                    Swal.fire('ERROR', me.erroresBusqueda.toString(),'error');
                    return;
                }

                axios.post('usuarios', {
                    'page' : me.page,
                    'idrol' : 4,
                    'categoria' : me.categoriaData,
                    'edad' : me.edad,
                    'estatura' : me.estatura,
                    'peso' : me.peso,
                    'orientacion' : me.orientacion,
                    'categorias' : me.categorias,
                    'idiomas' : me.idiomas,
                    'nacionalidad' : me.nacionalidad,
                    'seguridad' : me.seguridad,
                    'nombre' : me.nombre,
                    'apodo' : me.apodo,
                    'ciudad' : me.ciudad,
                    'distrito' : me.distrito,
                    'pene' : me.pene,
                    'corte' : me.corte,
                    'pecho' : me.pecho
                })
                .then(function (response) { 

                    var respuesta= response.data;
                    
                    me.arUsuarios = respuesta.arUsuarios;
                    me.pagination= respuesta.pagination;
                    me.path= respuesta.path;

                    /*me.limpiarCampos();
                    me.arAlertas.push(_alerta);

                    Swal.fire('CONFIRMACION', 'Alerta agregada correctamente','success');
                    */

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

            }
    
        }


    };
</script>