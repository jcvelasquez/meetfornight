angular.module('MetronicApp').controller('RegistrarDenunciaPeruController', function($rootScope, $scope, $http, $timeout, $state) {
    $scope.$on('$viewContentLoaded', function() {   
	
        App.initAjax(); 
    
    	$rootScope.settings.layout.pageBodySolid = true;
    	$rootScope.settings.layout.pageSidebarClosed = true;

		$.fn.datepicker.dates['es'] = {
			days: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
			daysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
			daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
			months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"],
			monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
			today: "Hoy",
			clear: "Limpiar",
			format: "dd/mm/yyyy",
			weekStart: 1
		};
		
		$('.bs-select').selectpicker({
			iconBase: 'fa',
			tickIcon: 'fa-check'
		});	
		
		$('.date-picker').datepicker({
			orientation: "left",
			autoclose: true,
			language: 'es'
		});
		
		
		var displayConfirm = function() {
			
			/*$('#tab4 .form-control-static', form).each(function(){
				
				var input = $('[name="'+$(this).attr("data-display")+'"]', form);
								
				if (input.is(":radio")) {
					
				}
				
				if (input.is(":text") || input.is("textarea")) {
					
					$(this).html(input.val());
					
				} else if ($(this).attr("data-display") == 'eres_victima') {
					
					var eres_victima = (input.is(":checked"))? "SI" : "NO";
					
					$(this).html(eres_victima);
				
				} else if ($(this).attr("data-display") == 'idtipo_incidente') {
					
					$(this).html($('#idtipo_incidente').find("option:selected").text())
							
				} else if ($(this).attr("data-display") == 'ididentidad_genero_denunciante') {
					
					$(this).html($('#ididentidad_genero_denunciante').find("option:selected").text())
					
				} else if ($(this).attr("data-display") == 'ididentidad_genero_victima') {
					
					$(this).html($('#ididentidad_genero_victima').find("option:selected").text())
					
				}
				
	
			});*/
		}

		var handleTitle = function(tab, navigation, index) {
						
			var total = navigation.find('li:visible').length;
						
			var current = index + 1;
			// set wizard title
			$('.step-title', $('#form_wizard_1')).text('Paso ' + (index + 1) + ' de ' + total);
			// set done steps
			jQuery('li:visible', $('#form_wizard_1')).removeClass("done");
			
			var li_list = navigation.find('li:visible');
			
			for (var i = 0; i < index; i++) {
				jQuery(li_list[i]).addClass("done");
			}

			if (current == 1) {
				$('#form_wizard_1').find('.button-previous').hide();
			} else {
				$('#form_wizard_1').find('.button-previous').show();
			}

			if (current >= total) {
				$('#form_wizard_1').find('.button-next').hide();
				$('#form_wizard_1').find('.button-submit').show();
				//displayConfirm();
			} else {
				$('#form_wizard_1').find('.button-next').show();
				$('#form_wizard_1').find('.button-submit').hide();
			}
			//App.scrollTo($('.page-title'));
		}

		// default form wizard
		$('#form_wizard_1').bootstrapWizard({
			'nextSelector': '.button-next',
			'previousSelector': '.button-previous',
			//'tabClass': 'nav nav-pills',
			onTabClick: function (tab, navigation, index, clickedIndex) {
				return false;
				
				success.hide();
				error.hide();
				
				if (form.valid() == false) {
					return false;
				}
				
				handleTitle(tab, navigation, clickedIndex);
			},
			onNext: function (tab, navigation, index) {
				success.hide();
				error.hide();

				if (form.valid() == false) {
					return false;
				}

				handleTitle(tab, navigation, index);
			},
			onPrevious: function (tab, navigation, index) {
				success.hide();
				error.hide();

				handleTitle(tab, navigation, index);
			},
			onTabShow: function (tab, navigation, index) {
				var total = navigation.find('li').length;
				var current = index + 1;
				var $percent = (current / total) * 100;
				$('#form_wizard_1').find('.progress-bar').css({
					width: $percent + '%'
				});
			}
		});
		
		$('#form_wizard_1').find('.button-previous').hide();
		
		$('#form_wizard_1 .button-submit').click(function () {
			
				if (form.valid() == false) {
					return false;
				}
				
				success.hide();
				error.hide();
			
				var formdenuncia = $("#submit_form").serialize()+'&action_type=create';
				
				$.ajax({dataType:'JSON',
						type: 'POST',
						url: 'database/DenunciaGet.php',
						data: formdenuncia,
						success:function(data){
							
							
							swal("REGISTRO EXITOSO", "Se registrÃ³ la denuncia satisfactoriamente, nos comunicaremos a la brevedad.", "success");
							
							$rootScope.$state.go('public.bienvenidos');
							
						},
						error: function(xhr) { 
							console.log(xhr.statusText + xhr.responseText);
						}
				});


/*							
				swal({title: "CONFIRMACION",
					  text: "Esta a punto de registrar la denuncia, desea proceder?",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonClass: "btn-success",
					  confirmButtonText: "Si, registrar",
					  cancelButtonText: "Cancelar",
					  closeOnConfirm: false
					},
					function(){
					*/
						/*		
							
					});
							
		*/	
		}).hide();
		
		
		//SELECCIONA QUE SI ERES VICTIMA
		
		
		$('.icheck_eres_victima').find('input[name="eres_victima"]')
            // Init icheck elements
            .iCheck({radioClass: 'iradio_square-red'})

			.on('ifChanged', function(e) {
				
                var eres_victima = $(this).attr('value');
                //$('#icheckForm').formValidation('revalidateField', field);
								
				if(eres_victima == "0"){
					
					//EDAD DEL DENUNCIANTE
					$('#form_wizard_1').bootstrapWizard('hide', 2);
					
					//COMO TE IDENTIFICAS DEL DENUNCIANTE
					$('#form_wizard_1').bootstrapWizard('hide', 3);
					
					$('#form_wizard_1').bootstrapWizard('display', 4);
					$('#form_wizard_1').bootstrapWizard('display', 5);
					$('#form_wizard_1').bootstrapWizard('display', 6);
					
					//COMO SE IDENTIFICA LA VICTIMA
					$('#form_wizard_1').bootstrapWizard('display', 7);

				}else{
					
					//EDAD
					$('#form_wizard_1').bootstrapWizard('display', 2);
					
					//COMO TE IDENTIFICAS
					$('#form_wizard_1').bootstrapWizard('display', 3);
					
					$('#form_wizard_1').bootstrapWizard('hide', 4);
					$('#form_wizard_1').bootstrapWizard('hide', 5);
					$('#form_wizard_1').bootstrapWizard('hide', 6);
					
					//COMO SE IDENTIFICA LA VICTIMA
					$('#form_wizard_1').bootstrapWizard('hide', 7);

					
				}
				
            })
			
			
		$('#raVictimaSi').iCheck('check');		
							
		$("#edad_victima, #edad_denunciante").TouchSpin({
			min: 18,
			max: 100,
			step: 1,
			postfix: 'aÃ±os'
		});
		

		/***************************************/
		/*       	CARGAR IDENTIDAD GENERO    */
		/***************************************/		
		function initIdentidadGenero(SelectedIndex){
				
				$.ajax({
					dataType:'JSON',
					type: 'POST',
					url: 'database/IdentidadGeneroGet.php?action_type=list',
					success:function(response){
																			
						//CARGA DE REGISTROS EN EL SELECT
						var len = response.data.length;

						for( var i = 0; i<len; i++){
							
							var ididentidad_genero = response.data[i]['ididentidad_genero'];
							var nombre_identidad_genero = response.data[i]['nombre_identidad_genero'];
							
							$('<label><input type="radio" name="ididentidad_genero_denunciante" data-radio="iradio_square-red" value="' + ididentidad_genero + '" class="icheck">' + nombre_identidad_genero + '</label>').appendTo($(".icheck_identificacion_denunciante"));

							$('<label><input type="radio" name="ididentidad_genero_victima" data-radio="iradio_square-red" value="' + ididentidad_genero + '" class="icheck">' + nombre_identidad_genero + '</label>').appendTo($(".icheck_identificacion_victima"));
							
						}
						
						$('input[name="ididentidad_genero_denunciante"]').iCheck({radioClass: 'iradio_square-red'}).on('ifChanged', function(e) {
           
							var value = $(this).attr('value');
							
							if(value == "8"){
								$('#campo_otros_denunciante').removeClass('hide');
							}else{
								$('#campo_otros_denunciante').addClass('hide');
							}
						   
						}).end();
		
						$('input[name="ididentidad_genero_victima"]').iCheck({radioClass: 'iradio_square-red'}).on('ifChanged', function(e) {
           
							var value = $(this).attr('value');
							
							if(value == "8"){
								$('#campo_otros_victima').removeClass('hide');
							}else{
								$('#campo_otros_victima').addClass('hide');
							}
						   
						}).end();
						
		
					},
					error: function(xhr) { 
						console.log(xhr.statusText + xhr.responseText);
					}
				});
			
		}	
		
		
		
		
		
		
		/***************************************/
		/*      CARGAR TIPO INCIDENTE    	   */
		/***************************************/		
		function initTipoIncidente(SelectedIndex){
				
				$.ajax({
					dataType:'JSON',
					type: 'POST',
					url: 'database/TipoIncidenteGet.php?action_type=list',
					success:function(response){
																			
						//CARGA DE REGISTROS EN EL SELECT
						var len = response.data.length;
												
						for( var i = 0; i<len; i++){
							var idtipo_incidente = response.data[i]['idtipo_incidente'];
							var nombre_tipo_incidente = response.data[i]['nombre_tipo_incidente'];
							
							$('<label><input type="radio" id="idtipo_incidente' + idtipo_incidente + '" name="idtipo_incidente" data-radio="iradio_square-red" value="' + idtipo_incidente + '" class="icheck">' + nombre_tipo_incidente + '</label>').appendTo($(".icheck_incidente"));
							
						}
						
						
						$('#idtipo_incidente1').closest('label').before('<h5 class="block bold">DiscriminaciÃ³n en servicios pÃºblicos</h5>');
						$('#idtipo_incidente16').closest('label').before('<h5 class="block bold">DiscriminaciÃ³n en servicios privados</h5>');
						
						$('#idtipo_incidente7').closest('label').addClass('bold');
						$('#idtipo_incidente10').closest('label').addClass('bold');
						$('#idtipo_incidente15').closest('label').addClass('bold');
	
						$('#idtipo_incidente6').closest('label').after('<div id="campo_otros_incidentes" class="hide"><div class="form-group"><input id="otro_tipo_incidente" type="text" value="" class="form-control input-lg" name="otro_tipo_incidente" placeholder="Por favor completa este campo"></div></div>');
						
						
						$('input[name="idtipo_incidente"]').iCheck({radioClass: 'iradio_square-red'}).on('ifChanged', function(e) {
           
							var value = $(this).attr('value');
														
							if(value == "6"){
								$('#campo_otros_incidentes').removeClass('hide');
							}else{
								$('#campo_otros_incidentes').addClass('hide');
							}
						   
						}).end();

		
					},
					error: function(xhr) { 
						console.log(xhr.statusText + xhr.responseText);
					}
				});
			
		}	
		
		//initTipoIncidente("");
		initIdentidadGenero("");	
	
		
		/*
		$('#testValidate').on( "click", function() {
			var chckValue = $('input[name="eres_victima"]').iCheck('update')[0].checked;
		});
		*/
	
		var form = $('#submit_form');
		var error = $('.alert-danger', form);
		var success = $('.alert-success', form);

		form.validate({
			doNotHideMessage: false, //this option enables to show the error/success messages on tab switch.
			errorElement: 'span', //default input error message container
			errorClass: 'help-block help-block-error', // default input error message class
			focusInvalid: true, // do not focus the last invalid input
			rules: {
				//paso 1
				nombre_denunciante: {
					required: true
				},					
				edad_denunciante: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return true;
						else
							return false;
					}
				},
				ididentidad_genero_denunciante: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return true;
						else
							return false;
					}
				},
				ididentidad_genero_victima: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return false;
						else
							return true;
					}
				},
				otra_identidad_denunciante: {
					
					required: function(element) {
						if( $('input[name="ididentidad_genero_denunciante"]').iCheck('update')[4].checked )
							return true;
						else
							return false;
					}
					
				},
				otra_identidad_victima: {
					
					required: function(element) {
						if( $('input[name="ididentidad_genero_victima"]').iCheck('update')[4].checked )
							return true;
						else
							return false;
					}
					
				},
				nombre_victima: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return false;
						else
							return true;
					}
				},
				otro_tipo_incidente: {
					required: function(element) {
						if( $('input[name="idtipo_incidente"]').iCheck('update')[5].checked )
							return true;
						else
							return false;
					}
				},
				edad_victima: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return false;
						else
							return true;
					}
				},
				relacion_victima: {
					required: function(element) {
						if( $('input[name="eres_victima"]').iCheck('update')[0].checked )
							return false;
						else
							return true;
					}
				},
				fecha_denuncia: {
					required: true
				},
				ubicacion_denuncia: {
					required: true
				},
				descripcion_denuncia: {
					required: true
				},
				celular_denunciante: {
					required: function(element) {
						if( $('input[name="email_denunciante"]').val() != "" )
							return false;
						else
							return true;
					},
					digits: true,
				},
				email_denunciante: {
					required: function(element) {
						if( $('input[name="celular_denunciante"]').val() != "" )
							return false;
						else
							return true;
					},
					email: true
				}
			},

			messages: { // custom messages for radio buttons and checkboxes
				'nombre_denunciante': {
					required: "Por favor ingresa tu nombre"
				},
				'edad_denunciante': {
					required: "Este campo es obligatorio"
				},
				'ididentidad_genero_denunciante': {
					required: "Por favor selecciona una opciÃ³n"
				},
				'ididentidad_genero_victima': {
					required: "Por favor selecciona la identificaciÃ³n de la vÃ­ctima"
				},
				'nombre_victima': {
					required: "Por favor ingresa el nombre de la vÃ­ctima"
				},
				'edad_victima': {
					required: "Por favor ingresa la edad de la vÃ­ctima"
				},
				'relacion_victima': {
					required: "Por favor ingresa tu relacion con la vÃ­ctima"
				},
				'email_denunciante': {
					required: "Por favor ingresa tu correo electrÃ³nico",
					minlength: "Por favor ingresa un correo electrÃ³nico vÃ¡lido",
					email: "Por favor ingresa un correo electrÃ³nico vÃ¡lido",
				},
				'celular_denunciante': {
					required: "Por favor ingresa un telÃ©fono de contacto",
					digits: "Solo se permiten nÃºmeros en este campo"
				},
				/*'idtipo_incidente': {
					required: "Por favor califica el tipo de incidente"
				},
				'ubicacion_denuncia': {
					required: "Por favor completa la informaciÃ³n"
				},*/
				'descripcion_denuncia': {
					required: "Por favor completa la informaciÃ³n"
				},
				'fecha_denuncia': {
					required: "Indica una fecha"
				},
				'ubicacion_denuncia': {
					required: "Indica la ubicaciÃ³n"
				},
				'otra_identidad_denunciante': {
					required: "Este campo es requerido si marco la opciÃ³n 'Otros'."
				},
				'otra_identidad_victima': {
					required: "Este campo es requerido si marco la opciÃ³n 'Otros'."
				},
				'otro_tipo_incidente': {
					required: "Este campo es requerido si marco la opciÃ³n 'Otros'."
				}

			},

			errorPlacement: function (error, element) { // render error placement for each input type
			
				if (element.attr("name") == "ididentidad_genero_denunciante") { 
				
					error.insertAfter(".icheck_identificacion_denunciante");
					
				} else if (element.attr("name") == "ididentidad_genero_victima") { 
					
					error.insertAfter(".icheck_identificacion_victima");
					
				} else if (element.attr("name") == "idtipo_incidente") {
					
					error.insertAfter(".icheck_incidente");
				
				} else if (element.attr("name") == "fecha_denuncia") {
										
				} else {
					error.insertAfter(element); 
				}
				
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   
				success.hide();	
				error.show();
				App.scrollTo(error, -200);
			},

			highlight: function (element) { // hightlight error inputs
				$(element).closest('.form-group').addClass('has-error'); 
			},
			unhighlight: function (element) { // revert the change done by hightlight
				$(element).closest('.form-group').removeClass('has-error'); 
			},
			success: function (label) {
				/*
				if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { 
					
					label
						.closest('.form-group').removeClass('has-error').addClass('has-success');
					label.remove(); 
				
					
				} else { 
				
					label
						.addClass('valid') 
					.closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
				}*/
				
				label.closest('.form-group').removeClass('has-error'); 
				
			},

			submitHandler: function (form) {
				success.show();
				error.hide();
				//form[0].submit();
				//add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
			}

		})
		

	
	});

   
}); 