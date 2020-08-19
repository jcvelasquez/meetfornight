// JavaScript Document


jQuery( document ).ready( function($) {
    
    
    /// AQUI AGREGAR EL CODIGO PARA AGREGAR CAPAS
    $('.elementor-shape-bottom').after('<div class="fixTrianguloB"></div>');
	$('.elementor-shape-top').before('<div class="fixTrianguloT"></div>');    
    
    var timeout;
    
    $('.swiper-pagination').hide();
        
    function showThumbs(){
                
        $arImages = $('.elementor-image-carousel .swiper-slide');
                
        clearTimeout(timeout);

        $.each($arImages, function(i) {
            
            $('.swiper-pagination span').eq(i).css({
                'background': 'url(' + $(this).find('img').attr('src') + ')',
                'background-size': 'cover'
            });

        });
        
        $('.swiper-pagination').show();
        
    }

   timeout = setTimeout(showThumbs, 500);

	$.fn.spinner = function() {
        
		this.each(function() {
            
			var el = $(this);

			el.wrap('<span class="spinner"></span>');     
			el.before('<span class="sub">-</span>');
			el.after('<span class="add">+</span>');

			el.parent().on('click', '.sub', function () {
				if (el.val() > parseInt(el.attr('min')))
					el.val( function(i, oldval) { return --oldval; });
			});

			el.parent().on('click', '.add', function () {
				if (el.val() < parseInt(el.attr('max')))
					el.val( function(i, oldval) { return ++oldval; });
			});
            
	    });
	};
    
    
    
    
    $.fn.iconhelp = function() {
        
        this.each(function() {
            
			var el = $(this);
            
            el.find('.elementor-icon-box-description').hide();
			el.on('click', '.elementor-icon', function () {
                
                el.find('.elementor-icon-box-description').slideToggle();
					
			});
            
            
        });
        
    };
    
    $.fn.spinnerCheck = function() {
        
		this.each(function() {
            
			var el = $(this);

			// add elements
			el.wrap('<span class="spinner"></span>');     
			el.before('<span class="sub">-</span>');
            el.after('<span class="add">+</span>');

			// substract
			el.parent().on('click', '.sub', function () {
				if (el.val() > parseInt(el.attr('min'))){
                    el.val( function(i, oldval) { return --oldval; });
                }
                
                if(el.val() == parseInt(el.attr('min'))){
                    //el.parent().find('.disable_spinner').attr("checked", "");
                    el.parent().find('.disable_spinner').removeAttr("checked");    
                }	
			});

			// increment
			el.parent().on('click', '.add', function () {
				if (el.val() < parseInt(el.attr('max'))){
                    
                    el.val( function(i, oldval) { 
                        return ++oldval; 
                        
                    });
                    
                    el.parent().find('.disable_spinner').attr("checked", true);
                    
                }	  
                
			});
            
            el.parent().addClass('marcado');            
            
            el.parent().on('click', '.disable_spinner', function () {
                if( $(this).is(":checked") ) el.val(0);
                    $(this).toggleClass("marcardo");
			});
			
            
	    });
	};
    
    
    $.fn.carousel = function() {
        
        this.each(function() {
            
			var el = $(this);
            
            el.owlCarousel({
                loop:false,
                margin:30,
                nav:true,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });

            
        });
        
    };
	
	$.fn.changeimage = function() {
        
		this.each(function() {
            var el = $(this);
			el.change(function() {el.parent().parent().parent().parent().toggleClass('nani');}).change();
			
		});};
	
	
	$.fn.habitaciones = function() {
        
        this.each(function() {
            
			var hab = $(this);
			var det = $('#detectores');
            
            var totalHabitaciones = 0;
            var totalDetectores = 0;
            var totalTemp = 0;
            
            $('#pregunta2TabMouvement').hide();
            
            
            //HABITACIONES MAS
			hab.parent().find('.add').on('click', function () {
                
                totalHabitaciones++;
                
                if(totalDetectores>0) totalDetectores--;
                
                if (totalHabitaciones > 0){
                    $('#pregunta2TabMouvement').slideDown();
                }
                
                totalTemp = totalHabitaciones + totalDetectores;
                
                det.val(totalDetectores);
                                        	
			});
            
            //HABITACIONES MENOS
			hab.parent().find('.sub').on('click', function () {
                
                
                if(totalHabitaciones > 0){
                  totalHabitaciones--;  
                  totalTemp = totalHabitaciones;
                } 
                
                if (totalHabitaciones == 0 && totalDetectores == 0){
                    $('#pregunta2TabMouvement').hide(500);
                };

					
			});
            
            
            
            //DETECTORES MAS
            det.parent().find('.add').on('click', function () {
                
                if(totalHabitaciones>0 && totalDetectores <= totalTemp){
                    totalDetectores++;
                    totalHabitaciones--;
                } 
                
                if( parseInt(det.val()) >= totalTemp) det.val(totalTemp - 1);
                

                if(totalTemp >= 0) {
                    hab.val(totalHabitaciones);
                }

					
			});
            
            //DETECTORES MENOS
			det.parent().find('.sub').on('click', function () {

                
                if(totalDetectores > 0){
                  totalDetectores--;
                  totalHabitaciones++;
                } 
                
                totalTemp = totalHabitaciones + totalDetectores;

                hab.val(totalHabitaciones);
                	
			});
	
            
        });
        
    };
    
    
    $.fn.entradas = function() {
        
        this.each(function() {
            
			var ent = $(this);
			var sen = $('#sensorimpacto');
            
            var totalEntradas = 0;
            var totalSensorImpacto = 0;
            var totalTemp = 0;
            
            $('#pregunta2TabPorte').hide();
            
            
            //entITACIONES MAS
			ent.parent().find('.add').on('click', function () {
                
                totalEntradas++;
                
                if(totalSensorImpacto>0) totalSensorImpacto--;
                
                if (totalEntradas > 0){
                    $('#pregunta2TabPorte').slideDown();
                }
                
                totalTemp = totalEntradas + totalSensorImpacto;
                
                sen.val(totalSensorImpacto);
                                        	
			});
            
            //entITACIONES MENOS
			ent.parent().find('.sub').on('click', function () {
                
                
                if(totalEntradas > 0){
                  totalEntradas--;  
                  totalTemp = totalEntradas;
                } 
                
                if (totalEntradas == 0 && totalSensorImpacto == 0){
                    $('#pregunta2TabPorte').hide(500);
                };

					
			});
            
            
            
            //senECTORES MAS
            sen.parent().find('.add').on('click', function () {
                
                if(totalEntradas>0 && totalSensorImpacto <= totalTemp){
                    totalSensorImpacto++;
                    totalEntradas--;
                } 
                
                if( parseInt(sen.val()) >= totalTemp) sen.val(totalTemp - 1);
                

                if(totalTemp >= 0) {
                    ent.val(totalEntradas);
                }

					
			});
            
            //senECTORES MENOS
			sen.parent().find('.sub').on('click', function () {

                
                if(totalSensorImpacto > 0){
                  totalSensorImpacto--;
                  totalEntradas++;
                } 
                
                totalTemp = totalEntradas + totalSensorImpacto;

                ent.val(totalEntradas);
                	
			});
	
            
        });
        
    };
   
	

    
    $('.spinner').spinner();
    
    $('.spinner_check').spinnerCheck();
    
    $('.icon_help').iconhelp();
    
    $('.carousel').carousel();
	
	$('.change_image').changeimage();
    
    
    //TAB MOVEMENT
	$('#habitaciones').habitaciones();
    
    $('#entradas').entradas();
    
    
    
    
    //TAB CONTACT
	

    
    $('#chkMouvement').on('change', function () {
                 
        if( $(this).is(":checked") ){
            
            $('#colContact').fadeOut(500,function(){
                $('#colMouvement').animate({ "width": "60%" }, 800, function() {
                    $('#contentMouvement').slideDown();
                }).css("margin" , "0 auto");
            });

        }else{
            
            $('#contentMouvement').fadeOut();
            $('#colContact').slideDown();
            
        } 
         
    });
    
    $('#chkContact').on('change', function () {
         
        if( $(this).is(":checked") ){
            
            $('#colMouvement').fadeOut(500,function(){
                $('#colContact').animate({ "width": "60%" }, 800, function() {
                    $('#contentContact').slideDown();
                }).css("margin" , "0 auto");
            });
                
        }else{
            
            $('#contentContact').fadeOut();
            $('#colMouvement').slideDown();
            
        } 
            

    });
    
     
    
    
});