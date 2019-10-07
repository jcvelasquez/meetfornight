/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');
window.Dropzone = require('./dropzone');
window.Swal = require('sweetalert2');
window.Vue = require('vue');
//Calendar = require('@fullcalendar/core');
//dayGridPlugin = require('@fullcalendar/daygrid');
//window.StickySidebar = require('sticky-sidebar');
//window.PrettyCheckbox = require('pretty-checkbox-vue');
/*
window.Calendar = require('@fullcalendar/core');
window.dayGridPlugin = require('@fullcalendar/daygrid');
window.timeGridPlugin = require('@fullcalendar/timegrid');
window.listPlugin = require('@fullcalendar/list');*/


require('sticky-sidebar');
/*
require('@fullcalendar/core');
require('@fullcalendar/daygrid');
require('@fullcalendar/timegrid');
require('@fullcalendar/list');
/*
require('@fullcalendar/core');
require('@fullcalendar/daygrid');
require('@fullcalendar/timegrid');
require('@fullcalendar/list');*/
/*
import {Calendar} from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';*/
import PrettyCheckbox from 'pretty-checkbox-vue';
import PrettyRadio from 'pretty-checkbox-vue/radio';
/*
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new Calendar(calendarEl, {
      plugins: [ dayGridPlugin ]
    });
  
    calendar.render();

  });

  let calendar = new Calendar({
    plugins: [ dayGridPlugin, timeGridPlugin, listPlugin ]
  });*/
/*
let calendar = new Calendar(calendarEl, {
    plugins: [ dayGridPlugin, timeGridPlugin, listPlugin ]
  });*/



//Vue.use(Calendar);
//Vue.use(dayGridPlugin);
//Vue.use(StickySidebar);
//Vue.use(Calendar);
Vue.use(PrettyCheckbox);
Vue.use(PrettyRadio);



Vue.component('perfil-usuario', require('./components/PerfilUsuario.vue').default);
Vue.component('planes-profesional', require('./components/PlanesProfesional.vue').default);
Vue.component('perfil-profesional', require('./components/PerfilProfesional.vue').default);
Vue.component('servicios-profesional', require('./components/ServiciosProfesional.vue').default);
Vue.component('contacto-profesional', require('./components/ContactoProfesional.vue').default);
Vue.component('agenda-profesional', require('./components/AgendaProfesional.vue').default);
Vue.component('reservas-profesional', require('./components/ReservasProfesional.vue').default);
Vue.component('tarifas-profesional', require('./components/TarifasProfesional.vue').default);
Vue.component('fotos-profesional', require('./components/FotosProfesional.vue').default);
Vue.component('creditos-profesional', require('./components/CreditosProfesional.vue').default);
Vue.component('booster-profesional', require('./components/BoosterProfesional.vue').default);
Vue.component('estadisticas-profesional', require('./components/EstadisticasProfesional.vue').default);
Vue.component('mensajes-profesional', require('./components/MensajesProfesional.vue').default);
Vue.component('alerta-profesional', require('./components/AlertaProfesional.vue').default);
Vue.component('valoracion-profesional', require('./components/ValoracionProfesional.vue').default);
Vue.component('listado-profesionales', require('./components/ListadoProfesionales.vue').default);
Vue.component('reserva-perfil', require('./components/ReservaPerfil.vue').default);



Vue.prototype.$idusuario = document.querySelector("meta[name='user-id']").getAttribute('content');
Vue.prototype.$csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute('content');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#widget'
});



