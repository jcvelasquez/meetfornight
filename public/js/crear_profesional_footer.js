/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/crear_profesional_footer.js":
/*!**************************************************!*\
  !*** ./resources/js/crear_profesional_footer.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//TEST
$(document).ready(function () {
  dtTarifas = $('#tarifaxhoras').DataTable({
    "paging": false,
    "ordering": false,
    "searching": false,
    "info": false,
    "language": {
      "emptyTable": "No hay tarifas registradas"
    },
    columns: [{
      title: "#",
      data: "id"
    }, {
      title: "Tipo",
      data: "opcion_tarifa"
    }, {
      title: "Tarifa",
      data: "costo_tarifa"
    }, {
      "mData": null,
      "bSortable": false,
      "mRender": function mRender(data, type, full) {
        return '<a class="btn x-circulo2 mt-sweetalert deleteTarifa" href="javascript:;" data-id="' + data['id'] + '" role="button"  aria-expanded="false"><i class="icon-trash"></i></a>';
      }
    }]
  });
  dtEscort = $('#escort').DataTable({
    "paging": false,
    "ordering": false,
    "searching": false,
    "info": false,
    "language": {
      "emptyTable": "No hay tarifas registradas"
    },
    columns: [{
      title: "#",
      data: "id"
    }, {
      title: "Tipo",
      data: "opcion_tarifa"
    }, {
      title: "Tarifa",
      data: "costo_tarifa"
    }, {
      "mData": null,
      "bSortable": false,
      "mRender": function mRender(data, type, full) {
        return '<a class="btn x-circulo2 mt-sweetalert deleteEscort" href="javascript:;" data-id="' + data['id'] + '" role="button"  aria-expanded="false"><i class="icon-trash"></i></a>';
      }
    }]
  });
  dtExtras = $('#extras').DataTable({
    "paging": false,
    "ordering": false,
    "searching": false,
    "info": false,
    "language": {
      "emptyTable": "No hay tarifas registradas"
    },
    columns: [{
      title: "#",
      data: "id"
    }, {
      title: "Tipo",
      data: "opcion_tarifa"
    }, {
      title: "Tarifa",
      data: "costo_tarifa"
    }, {
      "mData": null,
      "bSortable": false,
      "mRender": function mRender(data, type, full) {
        return '<a class="btn x-circulo2 mt-sweetalert deleteExtras" href="javascript:;" data-id="' + data['id'] + '" role="button"  aria-expanded="false"><i class="icon-trash"></i></a>';
      }
    }]
  });
  $('#tarifaxhoras tbody').on('click', 'a.deleteTarifa', function () {
    dtTarifas.row($(this).parents('tr')).remove().draw(false);
    llenarTarifas();
  });
  $('#escort tbody').on('click', 'a.deleteEscort', function () {
    dtEscort.row($(this).parents('tr')).remove().draw(false);
    llenarTarifasEscort();
  });
  $('#extras tbody').on('click', 'a.deleteExtras', function () {
    dtExtras.row($(this).parents('tr')).remove().draw(false);
    llenarTarifasExtras();
  }); // validate signup form on keyup and submit

  $("#form-cuenta-profesional").validate({
    ignore: ":hidden :not('inp-cbx.always-validate') ",
    debug: false,
    rules: {
      //PESTAÑA PLANES
      radioPlan: {
        required: true
      },
      //PESTAÑA PERFIL
      nombre: {
        required: true
      },
      apodo: {
        required: true
      },
      password: {
        required: true
      },
      confirmar_clave: {
        required: true,
        equalTo: '#password'
      },
      email: {
        email: true,
        required: true,
        remote: {
          url: "email/check",
          type: "POST",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        }
      },
      confirmar_email: {
        email: true,
        required: true,
        equalTo: '#email'
      },
      fecha_nacimiento: {
        required: true
      },
      sexo: {
        required: true
      },
      nacionalidad: {
        required: true
      },
      idioma: {
        required: true
      },
      idcountry: {
        required: true
      },
      idstate: {
        required: true
      },
      idcity: {
        required: true
      },
      tatuaje: {
        required: true
      },
      piercing: {
        required: true
      },
      fumador: {
        required: true
      },
      "categorias[]": {
        required: true,
        minlength: 1
      },
      "idiomas[]": {
        required: true,
        minlength: 1
      },
      pene: {
        required: {
          depends: function depends(elem) {
            return $("#sexo").val() === "M" || $("#sexo").val() === "T";
          }
        }
      },
      pecho: {
        required: {
          depends: function depends(elem) {
            return $("#sexo").val() === "F" || $("#sexo").val() === "T";
          }
        }
      },
      color_cabello: {
        required: true
      },
      corte_intimo: {
        required: true
      },
      //PESTAÑA SERVICIOS
      "masajes[]": {
        required: true,
        minlength: 1
      },
      "preliminares[]": {
        required: true,
        minlength: 1
      },
      "intimos[]": {
        required: true,
        minlength: 1
      },
      "otros[]": {
        required: true,
        minlength: 1
      },
      "fetiches[]": {
        required: true,
        minlength: 1
      },
      "discapacitados[]": {
        required: true,
        minlength: 1
      },
      //PESTAÑA CONTACTO
      celular: {
        required: true
      },
      tipo_contacto: {
        required: true
      }
    },
    messages: {
      //PESTAÑA PLAN
      radioPlan: "Selecciona un plan para su cuenta",
      //PESTAÑA PERFIL
      nombre: "El nombre es obligatorio",
      apodo: "El apodo es obligatorio",
      email: {
        email: "Ingrese un email válido",
        required: "El email es obligatorio",
        remote: jQuery.validator.format("El correo {0} ya está en uso.")
      },
      confirmar_email: {
        required: "Ingrese un email",
        equalTo: "Debe confirmar su email"
      },
      confirmar_clave: {
        required: "Ingrese una clave",
        equalTo: "Debe confirmar su contraseña"
      },
      password: "La clave es obligatoria",
      fecha_nacimiento: "La fecha de nacimiento es obligatoria",
      sexo: "El sexo es obligatorio",
      nacionalidad: "La nacionalidad es obligatoria",
      idioma: "El idioma es obligatorio",
      tatuaje: "Selecciona una opcion",
      piercing: "Selecciona una opcion",
      fumador: "Selecciona una opcion",
      "categorias[]": {
        required: "Selecciona una categoria al menos"
      },
      "idiomas[]": {
        required: "Selecciona un idioma al menos"
      },
      pene: "Selecciona una opcion",
      pecho: "Selecciona una opcion",
      idcountry: "Selecciona una opcion",
      idstate: "Selecciona una opcion",
      idcity: "Selecciona una opcion",
      color_cabello: "Selecciona una opcion",
      corte_intimo: "Selecciona una opcion",
      //PESTAÑA SERVICIOS
      "masajes[]": {
        required: "Selecciona una opcion al menos"
      },
      "preliminares[]": {
        required: "Selecciona una opcion al menos"
      },
      "intimos[]": {
        required: "Selecciona una opcion al menos"
      },
      "otros[]": {
        required: "Selecciona una opcion al menos"
      },
      "fetiches[]": {
        required: "Selecciona una opcion al menos"
      },
      "discapacitados[]": {
        required: "Selecciona una opcion al menos"
      },
      //PESTAÑA CONTACTO
      celular: {
        required: "Ingrese un telefono de contacto"
      },
      tipo_contacto: {
        required: "Seleccione el tipo de contacto preferido"
      }
    },
    //errorLabelContainer: ".js-errors",
    errorElement: "label",
    errorPlacement: function errorPlacement(error, element) {
      if (element.is(":radio")) {
        error.insertAfter(element.parents('.section_planes'));
        error.insertAfter(element.parents('.campo_tipo_contacto'));
        error.insertAfter(element.parents('.obligando-columna'));
        error.insertAfter(element.parents('.radio-tatuaje'));
        error.insertAfter(element.parents('.radio-piercing'));
        error.insertAfter(element.parents('.radio-fumador'));
      } else if (element.is(":checkbox")) {
        error.insertAfter(element.parents('.form-row'));
      } else {
        // This is the default behavior 
        error.insertAfter(element);
      }
    },
    doNotHideMessage: false,
    errorClass: "error",
    submitHandler: function submitHandler(form, e) {
      var _axios$post;

      e.preventDefault(); //DESACTIVO LOS BOTONES

      $("#prev-btn").attr('disabled', true);
      $("#next-btn").attr('disabled', true); //$("#btn-enviar").attr('disabled', true);

      var arCategorias = [];
      var arIdiomas = [];
      var arTarifas = [];
      var arServicios = [];
      $('input[name="masajes[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "MASAJES"
        });
      });
      $('input[name="preliminares[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "PRELIMINARES"
        });
      });
      $('input[name="intimos[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "INTIMO"
        });
      });
      $('input[name="otros[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "OTROS"
        });
      });
      $('input[name="fetiches[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "FETICHE"
        });
      });
      $('input[name="discapacitados[]"]:checked').each(function () {
        arServicios.push({
          "idservicio": $(this).val(),
          "nombre_servicio": "",
          "categoria_servicio": "DISCAPACITADOS"
        });
      });
      $('input[name="categorias[]"]:checked').each(function () {
        arCategorias.push($(this).val());
      });
      $('input[name="idiomas[]"]:checked').each(function () {
        arIdiomas.push($(this).val());
      });
      $.each(dtTarifas.rows().data().toArray(), function () {
        arTarifas.push({
          "opcion_tarifa": this.opcion_tarifa,
          "costo_tarifa": this.costo_tarifa,
          "categoria_tarifa": this.categoria_tarifa
        });
      });
      $.each(dtEscort.rows().data().toArray(), function () {
        arTarifas.push({
          "opcion_tarifa": this.opcion_tarifa,
          "costo_tarifa": this.costo_tarifa,
          "categoria_tarifa": this.categoria_tarifa
        });
      });
      $.each(dtExtras.rows().data().toArray(), function () {
        arTarifas.push({
          "opcion_tarifa": this.opcion_tarifa,
          "costo_tarifa": this.costo_tarifa,
          "categoria_tarifa": this.categoria_tarifa
        });
      });
      axios.post('registrar-profesional', (_axios$post = {
        //PLANES
        'radioPlan': $('input[name="radioPlan"]:checked').val(),
        //PERFIL
        'nombre': $('input[name="nombre"]').val(),
        'apodo': $('input[name="apodo"]').val(),
        'password': $('input[name="password"]').val(),
        'email': $('input[name="email"]').val(),
        'fecha_nacimiento': $('input[name="fecha_nacimiento"]').val()
      }, _defineProperty(_axios$post, "apodo", $("input[name='apodo']").val()), _defineProperty(_axios$post, 'orientacion', $("input[name='orientacion']:checked").val()), _defineProperty(_axios$post, 'sexo', $('select[name="sexo"]').val()), _defineProperty(_axios$post, 'categorias', JSON.stringify(arCategorias)), _defineProperty(_axios$post, 'idiomas', JSON.stringify(arIdiomas)), _defineProperty(_axios$post, 'idcountry', $('select[name="idcountry"]').val()), _defineProperty(_axios$post, 'idstate', $('select[name="idstate"]').val()), _defineProperty(_axios$post, 'idcity', $('select[name="idcity"]').val()), _defineProperty(_axios$post, 'tatuaje', $('input[name="tatuaje"]').is(":checked") ? "1" : "0"), _defineProperty(_axios$post, 'piercing', $('input[name="piercing"]').is(":checked") ? "1" : "0"), _defineProperty(_axios$post, 'fumador', $('input[name="fumador"]').is(":checked") ? "1" : "0"), _defineProperty(_axios$post, 'pene', $('select[name="pene"]').val()), _defineProperty(_axios$post, 'pecho', $('select[name="pecho"]').val()), _defineProperty(_axios$post, 'color_cabello', $('select[name="color_cabello"]').val()), _defineProperty(_axios$post, 'corte_intimo', $('select[name="corte_intimo"]').val()), _defineProperty(_axios$post, 'color_ojos', $('select[name="color_ojos"]').val()), _defineProperty(_axios$post, 'estatura', $('input[name="estatura"]').val()), _defineProperty(_axios$post, 'peso', $('input[name="peso"]').val()), _defineProperty(_axios$post, 'descripcion', $("textarea[name='descripcion']").val()), _defineProperty(_axios$post, 'frase', $("input[name='frase']").val()), _defineProperty(_axios$post, 'seguridad', $('input[name="seguridad"]').is(":checked") ? "1" : "0"), _defineProperty(_axios$post, 'servicios', JSON.stringify(arServicios)), _defineProperty(_axios$post, 'celular', $('input[name="celular"]').val()), _defineProperty(_axios$post, 'tipo_celular', $("input[name='tipo_celular']").is(":checked") ? "WHATSAPP" : "CELULAR"), _defineProperty(_axios$post, 'tipo_contacto', $('input[name="tipo_contacto"]:checked').val()), _defineProperty(_axios$post, 'pagina_web', $("input[name='pagina_web']").val()), _defineProperty(_axios$post, 'disponibilidad', JSON.stringify(JSON.parse('[{ "desde" : "' + obtenerDisponibilidad($('input[name="slider_lunes"]').jRange('getValue').split(',')[0]) + '" , "hasta": "' + obtenerDisponibilidad($('input[name="slider_lunes"]').jRange('getValue').split(',')[1]) + '" , "dia": "LUNES" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_martes"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_martes"]').jRange('getValue').split(',')[1]) + '", "dia" : "MARTES" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_miercoles"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_miercoles"]').jRange('getValue').split(',')[1]) + '", "dia" : "MIERCOLES" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_jueves"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_jueves"]').jRange('getValue').split(',')[1]) + '", "dia" : "JUEVES" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_viernes"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_viernes"]').jRange('getValue').split(',')[1]) + '", "dia" : "VIERNES" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_sabado"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_sabado"]').jRange('getValue').split(',')[1]) + '", "dia" : "SABADO" }, { "desde" : "' + obtenerDisponibilidad($('input[name="slider_domingo"]').jRange('getValue').split(',')[0]) + '", "hasta" : "' + obtenerDisponibilidad($('input[name="slider_domingo"]').jRange('getValue').split(',')[1]) + '", "dia" : "DOMINGO" } ]'))), _defineProperty(_axios$post, 'agenda', $("input[name='agenda']").is(":checked") ? "1" : "0"), _defineProperty(_axios$post, 'tarifas', JSON.stringify(arTarifas)), _axios$post), {
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      }).then(function (response) {
        Swal.fire('CONFIRMACIÓN', response.data.mensaje, response.data.status);
      })["catch"](function (error) {
        // handle error
        console.log(error);
      });
    }
  });
  $("#fecha_nacimiento").datepicker({
    dateFormat: "dd/mm/yyyy",
    clearBtn: true,
    language: "es"
  }); // Step show event

  $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
    //alert("You are on step "+stepNumber+" now");
    if (stepPosition === 'first') {
      $("#prev-btn").addClass('disabled');
    } else if (stepPosition === 'final') {
      $("#next-btn").addClass('disabled');
    } else {
      $("#prev-btn").removeClass('disabled');
      $("#next-btn").removeClass('disabled');
    }
  }); // Smart Wizard

  $('#smartwizard').smartWizard({
    selected: 0,
    theme: 'circles',
    transitionEffect: 'fade',
    autoAdjustHeight: false,
    keyNavigation: false,
    showStepURLhash: true,
    toolbarSettings: {
      toolbarPosition: 'bottom',
      toolbarButtonPosition: 'end',
      showNextButton: false,
      showPreviousButton: false
    }
  });
  $('#smartwizard').smartWizard("reset");
  $("#prev-btn").on("click", function () {
    $('#smartwizard').smartWizard("prev");
    return true;
  });
  $("#next-btn").on("click", function () {
    if ($("#form-cuenta-profesional").valid()) {
      $('#smartwizard').smartWizard("next");
      return true;
    }
  }); //SLIDERS PERFIL

  $('#estatura').jRange({
    from: 140,
    to: 210,
    step: 1,
    scale: [140, 150, 160, 170, 180, 190, 200, 210],
    format: '%s CM',
    showLabels: true,
    snap: true,
    onstatechange: function onstatechange() {
      $("#estatura_label").html($('#estatura').jRange('getValue') + "cm");
    }
  });
  $('#peso').jRange({
    from: 40,
    to: 110,
    step: 1,
    scale: [40, 50, 60, 70, 80, 90, 100, 110],
    format: '%s KG',
    showLabels: true,
    snap: true,
    onstatechange: function onstatechange() {
      $("#peso_label").html($('#peso').jRange('getValue') + "Kg");
    }
  }); //SLIDERS CONTACTO

  $('.slider-horario').jRange({
    from: 0,
    to: 24,
    step: 1,
    scale: [0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24],
    width: 220,
    format: '%s',
    showLabels: true,
    snap: true,
    isRange: true,
    onstatechange: function onstatechange(value) {
      var input = $($(this).get(0).inputNode);
      var horas = JSON.parse("[" + value + "]");
      var desde = horas[0] < 10 ? "0" + horas[0] + ":00" : horas[0] + ":00";
      var hasta = horas[1] < 10 ? "0" + horas[1] + ":00" : horas[1] + ":00";

      switch (input.data("horas")) {
        case "horas_lunes":
          $('.fecha.lunes p.desde').html(desde);
          $('.fecha.lunes p.hasta').html(hasta);
          break;

        case "horas_martes":
          $('.fecha.martes p.desde').html(desde);
          $('.fecha.martes p.hasta').html(hasta);
          break;

        case "horas_miercoles":
          $('.fecha.miercoles p.desde').html(desde);
          $('.fecha.miercoles p.hasta').html(hasta);
          break;

        case "horas_jueves":
          $('.fecha.jueves p.desde').html(desde);
          $('.fecha.jueves p.hasta').html(hasta);
          break;

        case "horas_viernes":
          $('.fecha.viernes p.desde').html(desde);
          $('.fecha.viernes p.hasta').html(hasta);
          break;

        case "horas_sabado":
          $('.fecha.sabado p.desde').html(desde);
          $('.fecha.sabado p.hasta').html(hasta);
          break;

        case "horas_domingo":
          $('.fecha.domingo p.desde').html(desde);
          $('.fecha.domingo p.hasta').html(hasta);
          break;
      }
    }
  });
  $('input[name="horas_lunes"], input[name="horas_martes"], input[name="horas_miercoles"], input[name="horas_jueves"], input[name="horas_viernes"], input[name="horas_sabado"], input[name="horas_domingo"]').click(function () {
    var horas = "";
    var desde = "";
    var hasta = "";

    if ($(this).is(":checked")) {
      horas = "0,0";
      desde = "00:00";
      hasta = "00:00";
    } else {
      horas = "0,24";
      desde = "00:00";
      hasta = "24:00";
    }

    switch ($(this).data("dia")) {
      case "lunes":
        $('input[name="slider_lunes"]').jRange('setValue', horas);
        $('input[name="slider_lunes"]').jRange('toggleDisable');
        $('.fecha.lunes').toggleClass("nodisponible");
        $('.fecha.lunes p.desde').html(desde);
        $('.fecha.lunes p.hasta').html(hasta);
        break;

      case "martes":
        $('input[name="slider_martes"]').jRange('setValue', horas);
        $('input[name="slider_martes"]').jRange('toggleDisable');
        $('.fecha.martes').toggleClass("nodisponible");
        $('.fecha.martes p.desde').html(desde);
        $('.fecha.martes p.hasta').html(hasta);
        break;

      case "miercoles":
        $('input[name="slider_miercoles"]').jRange('setValue', horas);
        $('input[name="slider_miercoles"]').jRange('toggleDisable');
        $('.fecha.miercoles').toggleClass("nodisponible");
        $('.fecha.miercoles p.desde').html(desde);
        $('.fecha.miercoles p.hasta').html(hasta);
        break;

      case "jueves":
        $('input[name="slider_jueves"]').jRange('setValue', horas);
        $('input[name="slider_jueves"]').jRange('toggleDisable');
        $('.fecha.jueves').toggleClass("nodisponible");
        $('.fecha.jueves p.desde').html(desde);
        $('.fecha.jueves p.hasta').html(hasta);
        break;

      case "viernes":
        $('input[name="slider_viernes"]').jRange('setValue', horas);
        $('input[name="slider_viernes"]').jRange('toggleDisable');
        $('.fecha.viernes').toggleClass("nodisponible");
        $('.fecha.viernes p.desde').html(desde);
        $('.fecha.viernes p.hasta').html(hasta);
        break;

      case "sabado":
        $('input[name="slider_sabado"]').jRange('setValue', horas);
        $('input[name="slider_sabado"]').jRange('toggleDisable');
        $('.fecha.sabado').toggleClass("nodisponible");
        $('.fecha.sabado p.desde').html(desde);
        $('.fecha.sabado p.hasta').html(hasta);
        break;

      case "domingo":
        $('input[name="slider_domingo"]').jRange('setValue', horas);
        $('input[name="slider_domingo"]').jRange('toggleDisable');
        $('.fecha.domingo').toggleClass("nodisponible");
        $('.fecha.domingo p.desde').html(desde);
        $('.fecha.domingo p.hasta').html(hasta);
        break;
    }
  }); //INICIALIZO CATEGORIAS

  $("#catMUJERES").show();
  $("#catMASAJES").show();
  $("#catPAREJAS").show();
  $("#campo_pecho").hide();
  $("#campo_pene").hide(); //INICIALIZAR ORIENTACION LESBIANA

  $("#raLESBIANA").prop('checked', true);
  $("#label_orientacion").html("LESBIANA"); //INICIALIZAR DISPONIBILIDAD

  $("#disponibilidad_lunes_24").prop('checked', true);
  $("#disponibilidad_martes_24").prop('checked', true);
  $("#disponibilidad_miercoles_24").prop('checked', true);
  $("#disponibilidad_jueves_24").prop('checked', true);
  $("#disponibilidad_viernes_24").prop('checked', true);
  $("#disponibilidad_sabado_24").prop('checked', true);
  $("#disponibilidad_domingo_24").prop('checked', true);
  $("#sexo").on("change", function () {
    var sexo = $(this).val();

    if (sexo == "M") {
      $("#campo_pene").show(); //OCULTAR

      $("#campo_pecho").hide();
    } else if (sexo == "F") {
      $("#campo_pecho").show(); //OCULTAR

      $("#campo_pene").hide();
    } else if (sexo == "T") {
      $("#campo_pecho").show(); //OCULTAR

      $("#campo_pene").show();
    } else {
      //OCULTAR
      $("#campo_pecho").hide();
      $("#campo_pene").hide(); //LIMPIAR

      $("#pene").val("");
      $("#pecho").val("");
    }
  }); //$("#raLESBIANA").prop('checked', true);

  function limpiarRadiosOrientacion() {
    $("#catMUJERES input").prop('checked', false);
    $("#catGIGOLOS input").prop('checked', false);
    $("#catGAYS input").prop('checked', false);
    $("#catTRANS input").prop('checked', false);
    $("#catTRAVESTIS input").prop('checked', false);
    $("#catFETICHES input").prop('checked', false);
    $("#catMASAJES input").prop('checked', false);
    $("#catPAREJAS input").prop('checked', false);
  }

  $("input[name='orientacion']").on("change", function () {
    var orientacion = $(this).val();
    limpiarRadiosOrientacion();

    if (orientacion == "LESBIANA") {
      $("#catMUJERES").show();
      $("#catMASAJES").show();
      $("#catPAREJAS").show(); //OCULTAR

      $("#catGIGOLOS").hide();
      $("#catGAYS").hide();
      $("#catTRANS").hide();
      $("#catTRAVESTIS").hide();
      $("#catFETICHES").hide();
    } else if (orientacion == "HETEROSEXUAL") {
      $("#catMASAJES").show();
      $("#catPAREJAS").show();
      $("#catTRANS").show(); //OCULTAR

      $("#catGIGOLOS").hide();
      $("#catGAYS").hide();
      $("#catMUJERES").hide();
      $("#catTRAVESTIS").hide();
      $("#catFETICHES").hide();
    } else if (orientacion == "BISEXUAL") {
      $("#catMASAJES").show();
      $("#catPAREJAS").show();
      $("#catTRANS").show();
      $("#catMUJERES").show();
      $("#catGIGOLOS").show();
      $("#catGAYS").show(); //OCULTAR

      $("#catTRAVESTIS").hide();
      $("#catFETICHES").hide();
    } else if (orientacion == "HOMOSEXUAL") {
      $("#catPAREJAS").show();
      $("#catGIGOLOS").show();
      $("#catGAYS").show(); //OCULTAR

      $("#catTRAVESTIS").hide();
      $("#catFETICHES").hide();
      $("#catMASAJES").hide();
      $("#catTRANS").hide();
      $("#catMUJERES").hide();
    } else if (orientacion == "TRANSEXUAL") {
      $("#catPAREJAS").show();
      $("#catGIGOLOS").show();
      $("#catGAYS").show(); //OCULTAR

      $("#catTRAVESTIS").hide();
      $("#catFETICHES").hide();
      $("#catMASAJES").hide();
      $("#catTRANS").hide();
      $("#catMUJERES").hide();
    }
  });
  $("input[name='radioPlan']").on("change", function () {
    $("#plan_label").html("Cuenta: " + $(this).parent(".container-radio").find("input[name='plan_seleccionado']").val()); //SI EL PRECIO DEL PLAN SELECCIONADO ES MAS DE CERO MOSTRAR PERIODOS

    if (parseFloat($(this).parent(".container-radio").find("input[name='precio_seleccionado']").val()) > 0) {
      $("#periodos_planes").slideDown();
    } else {
      $("#periodos_planes").slideUp();
    }
  });
  $("#idcountry").on("change", function () {
    var idcountry = $(this).val();
    $('#idstate').find('option').remove().end().append(new Option("Seleccione un departamento", ""));
    axios.post('seleccionar-states', {
      'idcountry': idcountry
    }, {
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }).then(function (response) {
      var states = [];
      states = response.data.states;
      $.each(states, function (key, value) {
        $('#idstate').append(new Option(value.name, value.id));
      });
    })["catch"](function (error) {
      console.log(error);
    });
  });
  $("#idstate").on("change", function () {
    var idstate = $(this).val();
    $('#idcity').find('option').remove().end().append(new Option("Seleccione un distrito", ""));
    axios.post('seleccionar-cities', {
      'idstate': idstate
    }, {
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }).then(function (response) {
      var cities = [];
      cities = response.data.cities;
      $.each(cities, function (key, value) {
        $('#idcity').append(new Option(value.name, value.id));
      });
    })["catch"](function (error) {
      console.log(error);
    });
  });
  var DropPerfil = new Dropzone("#dropzone_subir_perfil", {
    url: "/fotos-profesional/subir",
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    clickable: "#dropzone_subir_perfil button",
    maxFiles: 1,
    autoProcessQueue: false,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
    },
    //data: {idusuario: me.$idprofesional },
    error: function error(file, response) {
      return false;
    },
    success: function success(file, done) {}
  });
  var DropAdicionales = new Dropzone("#dropzone_subir_adicionales", {
    url: "/fotos-profesional/subir",
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    clickable: "#dropzone_subir_adicionales button",
    maxFiles: 4,
    autoProcessQueue: false,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
    },
    //data: {idusuario: me.$idprofesional },
    error: function error(file, response) {
      return false;
    },
    success: function success(file, done) {}
  }); //MOSTRAR LOS VALORES EN LA PANTALLA DE ACTIVAR

  $("input[name='nombre']").on("blur", function () {
    $("#label_nombre").html($(this).val());
  });
  $("input[name='apodo']").on("blur", function () {
    $("#label_apodo").html($(this).val());
  });
  $("input[name='email']").on("blur", function () {
    $("#label_email").html($(this).val());
  });
  $("input[name='fecha_nacimiento']").on("blur", function () {
    $("#label_nacimiento").html($(this).val());
  });
  $("select[name='sexo']").on("change", function () {
    if ($(this).val() == "M") {
      $("#label_sexo").html("MASCULINO");
    } else if ($(this).val() == "F") {
      $("#label_sexo").html("FEMENINO");
    } else {
      $("#label_sexo").html("TRANSEXUAL");
    }
  });
  $("input[name='orientacion']").on("change", function () {
    $("#label_orientacion").html($(this).val());
  });
  $("select[name='idcountry']").on("change", function () {
    $("#label_nacionalidad").html($("select[name='idcountry'] option:selected").text());
  });
  $("select[name='idstate']").on("change", function () {
    $("#label_provincia").html($("select[name='idstate'] option:selected").text());
  });
  $("select[name='idcity']").on("change", function () {
    $("#label_distrito").html($("select[name='idcity'] option:selected").text());
  });
  $("select[name='idcity']").on("change", function () {
    $("#label_distrito").html($("select[name='idcity'] option:selected").text());
  });
  $('input[name="categorias[]"]').click(function () {
    $("#lista-categorias").empty();
    $('input[name="categorias[]"]:checked').each(function (index, elem) {
      $("#lista-categorias").append('<li>' + $(this).data("dia") + '</li>');
    });
  });
  $('input[name="idiomas[]"]').click(function () {
    $("#lista-idiomas").empty();
    $('input[name="idiomas[]"]:checked').each(function (index, elem) {
      $("#lista-idiomas").append('<li>' + $(this).data("idioma") + '</li>');
    });
  });
  $("input[name='tatuaje']").on("change", function () {
    $("#tatuaje_label").html($("input[name='tatuaje']:checked").val() == 1 ? "SI" : "NO");
  });
  $("input[name='piercing']").on("change", function () {
    $("#piercing_label").html($("input[name='piercing']:checked").val() == 1 ? "SI" : "NO");
  });
  $("input[name='fumador']").on("change", function () {
    $("#fumador_label").html($("input[name='fumador']:checked").val() == 1 ? "SI" : "NO");
  });
  $("select[name='pecho']").on("change", function () {
    $("#pecho_label").html($("select[name='pecho'] option:selected").text());
  });
  $("select[name='pene']").on("change", function () {
    $("#pene_label").html($("select[name='pene'] option:selected").text());
  });
  $("select[name='corte_intimo']").on("change", function () {
    $("#corte_label").html($("select[name='corte_intimo'] option:selected").text());
  });
  $("select[name='color_ojos']").on("change", function () {
    $("#ojos_label").html($("select[name='color_ojos'] option:selected").text());
  });
  $("select[name='color_cabello']").on("change", function () {
    $("#cabello_label").html($("select[name='color_cabello'] option:selected").text());
  });
  $("textarea[name='descripcion']").on("blur", function () {
    $("#label_descripcion").html($(this).val());
  });
  $('input[name="seguridad"]').click(function () {
    $("#seguridad_label").html($("input[name='seguridad']").is(":checked") ? "SI" : "NO");
  });
  $("input[name='frase']").on("blur", function () {
    $("#label_frase").html($(this).val());
  });
  $("input[name='pagina_web']").on("blur", function () {
    $("#label_web").html($(this).val());
  });
  $("input[name='celular']").on("blur", function () {
    $("#label_celular").html($(this).val());
  });
  $("input[name='tipo_contacto']").on("change", function () {
    $("#label_tipo_contacto").html("(Contacto vía <strong>" + $(this).val() + "</strong>)");
  });
  $("input[name='agenda']").click(function () {
    $("#agenda_label").html($(this).is(":checked") ? "SI" : "NO");
  });
  $("input[name='tipo_celular']").click(function () {
    if ($(this).is(":checked")) {
      $("#icon_celular").removeClass().addClass("icon-whatsapp-green esp-icono-bio");
    } else {
      $("#icon_celular").removeClass().addClass("fa fa-mobile esp-icono-bio");
    }
  }); //CAMPOS DE SERVICIOS

  $('input[name="masajes[]"]').click(function () {
    $("#lista-masajes").empty();
    $('input[name="masajes[]"]:checked').each(function (index, elem) {
      $("#lista-masajes").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
  $('input[name="preliminares[]"]').click(function () {
    $("#lista-preliminares").empty();
    $('input[name="preliminares[]"]:checked').each(function (index, elem) {
      $("#lista-preliminares").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
  $('input[name="intimos[]"]').click(function () {
    $("#lista-intimos").empty();
    $('input[name="intimos[]"]:checked').each(function (index, elem) {
      $("#lista-intimos").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
  $('input[name="otros[]"]').click(function () {
    $("#lista-otros").empty();
    $('input[name="otros[]"]:checked').each(function (index, elem) {
      $("#lista-otros").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
  $('input[name="fetiches[]"]').click(function () {
    $("#lista-fetiches").empty();
    $('input[name="fetiches[]"]:checked').each(function (index, elem) {
      $("#lista-fetiches").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
  $('input[name="discapacitados[]"]').click(function () {
    $("#lista-discapacitados").empty();
    $('input[name="discapacitados[]"]:checked').each(function (index, elem) {
      $("#lista-discapacitados").append('<li>' + $(this).data("servicio") + '</li>');
    });
  });
});

/***/ }),

/***/ 1:
/*!********************************************************!*\
  !*** multi ./resources/js/crear_profesional_footer.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\meetfornight\resources\js\crear_profesional_footer.js */"./resources/js/crear_profesional_footer.js");


/***/ })

/******/ });