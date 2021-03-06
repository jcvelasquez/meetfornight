
require('sticky-sidebar');
require('./bootstrap');

//window.Dropzone = require('./dropzone');
window.Swal = require('sweetalert2');
window.Vue = require('vue');

import PrettyCheckbox from 'pretty-checkbox-vue';
import PrettyRadio from 'pretty-checkbox-vue/radio';
import VCalendar from 'v-calendar';
import Vuelidate from 'vuelidate';
import wysiwyg from "vue-wysiwyg";

Vue.use(VCalendar, { componentPrefix: 'vc' }); 
Vue.use(Vuelidate);
Vue.use(PrettyCheckbox);
Vue.use(PrettyRadio);


Vue.use(wysiwyg, {
    maxHeight: "500px",
    forcePlainTextOnPaste: false,
    locale: 'es'
  }); // config is optional. more below

//PERFIL
Vue.component('reservas-profesional-front', require('./components/ReservasProfesionalFront.vue').default);
Vue.component('mensajes-profesional-front', require('./components/MensajesProfesionalFront.vue').default);
Vue.component('disponibilidad-profesional-front', require('./components/DisponibilidadProfesionalFront.vue').default);

//PROFESIONALES
Vue.component('planes-profesional', require('./components/PlanesProfesional.vue').default);
Vue.component('servicios-profesional', require('./components/ServiciosProfesional.vue').default);
Vue.component('contacto-profesional', require('./components/ContactoProfesional.vue').default);
Vue.component('agenda-profesional', require('./components/AgendaProfesional.vue').default);
Vue.component('tarifas-profesional', require('./components/TarifasProfesional.vue').default);
Vue.component('fotos-profesional', require('./components/FotosProfesional.vue').default);
Vue.component('creditos-profesional', require('./components/CreditosProfesional.vue').default);
Vue.component('mensajes-profesional', require('./components/MensajesProfesional.vue').default);
Vue.component('booster-profesional', require('./components/BoosterProfesional.vue').default);
Vue.component('estadisticas-profesional', require('./components/EstadisticasProfesional.vue').default);
Vue.component('perfil-profesional', require('./components/PerfilProfesional.vue').default);
Vue.component('alerta-profesional', require('./components/AlertaProfesional.vue').default);
Vue.component('valoracion-profesional', require('./components/ValoracionProfesional.vue').default);
Vue.component('listado-home', require('./components/ListadoHome.vue').default);
Vue.component('listado-categoria', require('./components/ListadoCategoria.vue').default);
Vue.component('reservas-profesional', require('./components/ReservasProfesional.vue').default);

//EMPRESA
Vue.component('planes-empresa', require('./components/PlanesEmpresa.vue').default);
Vue.component('banners-empresa', require('./components/BannersEmpresa.vue').default);
Vue.component('estadisticas-empresa', require('./components/EstadisticasEmpresa.vue').default);
Vue.component('perfil-empresa', require('./components/PerfilEmpresa.vue').default);

//USUARIO
Vue.component('perfil-usuario', require('./components/PerfilUsuario.vue').default);
Vue.component('mensajes-usuario', require('./components/MensajesUsuario.vue').default);
Vue.component('favoritos-usuario', require('./components/FavoritosUsuario.vue').default);
Vue.component('reservas-usuario', require('./components/ReservasUsuario.vue').default);
Vue.component('seguridad-usuario', require('./components/SeguridadUsuario.vue').default);

//COMPONENTES HOME
//Vue.component('busqueda-detallada', require('./components/BusquedaDetallada.vue').default);
Vue.component('banner-superior', require('./components/BannerSuperior.vue').default);
Vue.component('banner-inferior', require('./components/BannerInferior.vue').default);
Vue.component('modal-denuncia', require('./components/ModalDenuncia.vue').default);

//COMPONENTES DASHBOARD
Vue.component('usuarios-administrador', require('./components/UsuariosAdministrador.vue').default);
Vue.component('profesionales-administrador', require('./components/ProfesionalesAdministrador.vue').default);
Vue.component('mensajes-administrador', require('./components/MensajesAdministrador.vue').default);
Vue.component('alertas-administrador', require('./components/AlertasAdministrador.vue').default);
Vue.component('idiomas-administrador', require('./components/IdiomasAdministrador.vue').default);
Vue.component('categorias-administrador', require('./components/CategoriasAdministrador.vue').default);
Vue.component('blog-administrador', require('./components/BlogAdministrador.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);

Vue.prototype.$csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute('content');
Vue.prototype.$idprofesional = document.querySelector("meta[name='pid']").getAttribute('content');
Vue.prototype.$idusuario = document.querySelector("meta[name='uid']").getAttribute('content');
Vue.prototype.$idrol = document.querySelector("meta[name='role']").getAttribute('content');
Vue.prototype.$locale = document.querySelector("meta[name='locale']").getAttribute('content');


const app = new Vue({
    el: '#widget',
    data: {
        messages: []
    },
    created() {
         
        //this.fetchMessages();

        Echo.private('chat').listen('MessageSent', (e) => {
            this.messages.push({ message: e.message.message, nombre: e.nombre, id: e.id });
        });

    },
    methods: {

        fetchMessages() {
            axios.get('messages').then(response => {
                this.messages = response.data;
            });
        },

        addMessage(message) {
            this.messages.push(message);

            axios.post('messages', message).then(response => {
              console.log(response.data);
            });
        }

    }
});