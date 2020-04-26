/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');
window.Dropzone = require('./dropzone');
window.Swal = require('sweetalert2');
window.Vue = require('vue');

require('sticky-sidebar');


/*import {Calendar} from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';*/

import PrettyCheckbox from 'pretty-checkbox-vue';
import PrettyRadio from 'pretty-checkbox-vue/radio';
import VCalendar from 'v-calendar';
import Vuelidate from 'vuelidate';
//import DatePicker from 'v-calendar/lib/components/date-picker.umd'

//
// Use v-calendar & v-date-picker components
/* Vue.use(VCalendar, { componentPrefix: 'vc' }); */

/*
Vue.use(VCalendar, {
    componentPrefix: 'vc',
    locales: {
      'es-ES': {
        firstDayOfWeek: 1,
        masks: {
          L: 'DD/MM/YYYY',
          input : ["DD/MM/YYYY"],
          data: ["DD/MM/YYYY"]
          // ...optional `title`, `weekdays`, `navMonths`, etc
        }
      }
    }
  });
*/



Vue.use(Vuelidate);

Vue.use(PrettyCheckbox);
Vue.use(PrettyRadio);

//Vue.use(VueRangeSlider);


Vue.component('perfil-usuario', require('./components/PerfilUsuario.vue').default);
Vue.component('planes-profesional', require('./components/PlanesProfesional.vue').default);
Vue.component('perfil-profesional', require('./components/PerfilProfesional.vue').default);
Vue.component('servicios-profesional', require('./components/ServiciosProfesional.vue').default);
Vue.component('contacto-profesional', require('./components/ContactoProfesional.vue').default);
Vue.component('agenda-profesional', require('./components/AgendaProfesional.vue').default);
Vue.component('tarifas-profesional', require('./components/TarifasProfesional.vue').default);
Vue.component('fotos-profesional', require('./components/FotosProfesional.vue').default);
Vue.component('creditos-profesional', require('./components/CreditosProfesional.vue').default);
Vue.component('booster-profesional', require('./components/BoosterProfesional.vue').default);
Vue.component('estadisticas-profesional', require('./components/EstadisticasProfesional.vue').default);
Vue.component('mensajes-profesional', require('./components/MensajesProfesional.vue').default);
Vue.component('mensajes-profesional-front', require('./components/MensajesProfesionalFront.vue').default);
Vue.component('alerta-profesional', require('./components/AlertaProfesional.vue').default);
Vue.component('valoracion-profesional', require('./components/ValoracionProfesional.vue').default);
Vue.component('listado-profesionales', require('./components/ListadoProfesionales.vue').default);
Vue.component('reservas-profesional', require('./components/ReservasProfesional.vue').default);
Vue.component('reservas-profesional-front', require('./components/ReservasProfesionalFront.vue').default);

//COMPONENTES HOME
Vue.component('disponibilidad-profesional-front', require('./components/DisponibilidadProfesionalFront.vue').default);
//Vue.component('busqueda-detallada', require('./components/BusquedaDetallada.vue').default);
Vue.component('banner-superior', require('./components/BannerSuperior.vue').default);
Vue.component('banner-inferior', require('./components/BannerInferior.vue').default);
//Vue.component('modal-busqueda', require('./components/ModalBusqueda.vue').default);
Vue.component('modal-denuncia', require('./components/ModalDenuncia.vue').default);

//COMPONENTES DASHBOARD
Vue.component('usuarios-administrador', require('./components/UsuariosAdministrador.vue').default);
Vue.component('mensajes-administrador', require('./components/MensajesAdministrador.vue').default);
Vue.component('alertas-administrador', require('./components/AlertasAdministrador.vue').default);
Vue.component('idiomas-administrador', require('./components/IdiomasAdministrador.vue').default);
Vue.component('categorias-administrador', require('./components/CategoriasAdministrador.vue').default);




Vue.prototype.$csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute('content');
Vue.prototype.$idprofesional = document.querySelector("meta[name='profesional-id']").getAttribute('content');
Vue.prototype.$idusuario = document.querySelector("meta[name='usuario-id']").getAttribute('content');

const app = new Vue({
    el: '#widget'
});