/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');
window.Dropzone = require('./dropzone');
window.Swal = require('sweetalert2');
window.Vue = require('vue');

require('pretty-checkbox-vue');

import PrettyCheckbox from 'pretty-checkbox-vue';

Vue.use(PrettyCheckbox);
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
