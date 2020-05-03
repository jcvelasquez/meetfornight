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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/crear_empresa_footer.js":
/*!**********************************************!*\
  !*** ./resources/js/crear_empresa_footer.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//TEST
$(document).ready(function () {
  // validate signup form on keyup and submit
  $("#form-cuenta-empresa").validate({
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
      empresa: {
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
      idcountry: {
        required: true
      },
      idstate: {
        required: true
      },
      idcity: {
        required: true
      },
      celular: {
        required: true
      }
    },
    messages: {
      //PESTAÑA PLAN
      radioPlan: "Selecciona un plan para su cuenta",
      //PESTAÑA PERFIL
      nombre: "El nombre es obligatorio",
      empresa: "El apodo es obligatorio",
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
      idcountry: "Selecciona una opcion",
      idstate: "Selecciona una opcion",
      idcity: "Selecciona una opcion",
      celular: "El celular es obligatorio"
    },
    //errorLabelContainer: ".js-errors",
    errorElement: "label",
    errorPlacement: function errorPlacement(error, element) {
      if (element.is(":radio")) {
        error.insertAfter(element.parents('.section_planes'));
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
      e.preventDefault(); //DESACTIVO LOS BOTONES

      $("#prev-btn").attr('disabled', true);
      $("#next-btn").attr('disabled', true); //$("#btn-enviar").attr('disabled', true);

      axios.post('registrar-empresa', {
        //PLANES
        'radioPlan': $('input[name="radioPlan"]:checked').val(),
        //PERFIL
        'nombre': $('input[name="nombre"]').val(),
        'empresa': $('input[name="empresa"]').val(),
        'password': $('input[name="password"]').val(),
        'email': $('input[name="email"]').val(),
        'idcountry': $('select[name="idcountry"]').val(),
        'idstate': $('select[name="idstate"]').val(),
        'idcity': $('select[name="idcity"]').val(),
        'celular': $('input[name="celular"]').val()
      }, {
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      }).then(function (response) {
        if (response.data.status == "success") {
          $('#idempresa').val(response.data.idempresa);
          DropEmpresa.processQueue();
        } else {
          Swal.fire("ERROR", "Hubo un error en el registro de la cuenta. Comuniquese con el area de soporte.", "error");
        }
      })["catch"](function (error) {
        Swal.fire("ERROR", "Hubo un error en el registro de la cuenta. Comuniquese con el area de soporte.", "error");
      });
    }
  });
  var DropEmpresa = new Dropzone("#dropzone_subir_banner", {
    url: "banners-empresa/subir",
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    clickable: "#dropzone_subir_banner button",
    maxFiles: 1,
    autoProcessQueue: false,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
    },
    params: {
      "idempresa": $("#idempresa").val()
    },
    error: function error(file, response) {
      return false;
    },
    success: function success(file, done) {
      Swal.fire('CONFIRMACIÓN', "Se registró la cuenta de empresa, deberá confirmar el correo electronico registrado para poder iniciar sesión.", 'success').then(function () {
        window.location = "/iniciar-sesion";
      });
      ;
    },
    init: function init() {
      this.on("maxfilesreached", function (file) {
        $('#btn_buscar_banner').attr('disabled', true);
        $('.banner_size_info').hide();
      });
      this.on("sending", function (file, xhr, formData) {
        formData.append("idempresa", $("#idempresa").val());
      });
      this.on("removedfile", function (file) {
        $('#btn_buscar_banner').attr('disabled', false);
        $('.banner_size_info').show();
      });
      this.on("thumbnail", function (file, dataUrl) {
        $("#foto_banner").attr("src", dataUrl);
      });
    }
  }); // Step show event

  $("#smartwizardEmpresa").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
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

  $('#smartwizardEmpresa').smartWizard({
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
  $('#smartwizardEmpresa').smartWizard("reset");
  $("#prev-btn").on("click", function () {
    $('#smartwizardEmpresa').smartWizard("prev");
    return true;
  });
  $("#next-btn").on("click", function () {
    if ($("#form-cuenta-empresa").valid()) {
      $('#smartwizardEmpresa').smartWizard("next");
      return true;
    }
  }); //SLIDERS PERFIL

  $("input[name='radioPlan']").on("change", function () {
    $("#plan_label").html("Empresa " + $(this).parent(".container-radio").find("input[name='plan_seleccionado']").val()); //SI EL PRECIO DEL PLAN SELECCIONADO ES MAS DE CERO MOSTRAR PERIODOS

    /*if(parseFloat($(this).parent(".container-radio").find("input[name='precio_seleccionado']").val()) > 0) {
        $("#periodos_planes").slideDown();
    }else{
      $("#periodos_planes").slideUp();
    }*/
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
  }); //MOSTRAR LOS VALORES EN LA PANTALLA DE ACTIVAR

  $("input[name='nombre']").on("blur", function () {
    $("#nombre_label").html($(this).val());
  });
  $("input[name='empresa']").on("blur", function () {
    $("#empresa_label").html($(this).val());
  });
  $("input[name='email']").on("blur", function () {
    $("#email_label").html($(this).val());
  });
  $("select[name='idcountry']").on("change", function () {
    $("#nacionalidad_label").html($("select[name='idcountry'] option:selected").text());
  });
  $("select[name='idstate']").on("change", function () {
    $("#provincia_label").html($("select[name='idstate'] option:selected").text());
  });
  $("select[name='idcity']").on("change", function () {
    $("#distrito_label").html($("select[name='idcity'] option:selected").text());
  });
  $("input[name='celular']").on("blur", function () {
    $("#celular_label").html($(this).val());
  });
});

/***/ }),

/***/ 2:
/*!****************************************************!*\
  !*** multi ./resources/js/crear_empresa_footer.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\meetfornight\resources\js\crear_empresa_footer.js */"./resources/js/crear_empresa_footer.js");


/***/ })

/******/ });