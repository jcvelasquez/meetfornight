<?php

//use App\Http\Middleware\Usuario;
//use App\Http\Middleware\Profesional;
use App\Http\Middleware\CheckRol;



Route::get('usuarios', 'UsuarioController@listarProfesionales');



   
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/', function () {
    return view('home');
});


//VISTA DE PERFIL
Route::get('perfil/{apodo}',  'PerfilController@mostrar');
Route::get('perfil/tarifas/{apodo}', 'PerfilController@tarifas' );
Route::get('perfil/disponibilidad/{apodo}', 'PerfilController@disponibilidad' );
Route::post('perfil/horarios/{apodo}', 'PerfilController@horarios' );
//Route::post('perfil/reservas/{apodo}', 'PerfilController@registrarReserva' );
Route::post('perfil/reservas/{apodo}', 'ReservasProfesionalController@registrar' );




Route::group(['middleware'=>['guest']],function(){
  

        Route::get('crear-cuenta', function () {
            return view('crear-cuenta');
        });

        Route::get('crear-cuenta-profesional', function () {
            return view('crear-cuenta-profesional');
        });

        Route::get('crear-cuenta-usuario', function () {
            return view('crear-cuenta-usuario');
        });

        //CATEGORIAS
        Route::get('anuncios', function () {
            return view('anuncios');
        });

        Route::get('mujeres', function () {
            return view('categoria');
        });

        Route::get('gigolos', function () {
            return view('categoria');
        });

        Route::get('gays', function () {
            return view('categoria');
        });

        Route::get('habitaciones', function () {
            return view('categoria');
        });

        Route::get('trans', function () {
            return view('categoria');
        });

        Route::get('travestis', function () {
            return view('categoria');
        });

        Route::get('fetiches', function () {
            return view('categoria');
        });

        Route::get('masajes', function () {
            return view('categoria');
        });

        Route::get('parejas', function () {
            return view('categoria');
        });

        Route::get('faq-perfil-usuario', function () {
            return view('faq-perfil-usuario');
        });

        Route::get('faq-perfil-profesional', function () {
            return view('faq-perfil-profesional');
        });

        Route::get('faq-perfil-empresa', function () {
            return view('faq-perfil-empresa');
        });

        Route::get('iniciar-sesion', 'Auth\LoginController@showLoginForm');
        Route::post('iniciar-sesion', 'Auth\LoginController@login')->name('iniciar-sesion');


});



Route::group(['middleware'=>['auth']],function(){


    Route::get('cerrar-sesion', 'Auth\LoginController@logout')->name('cerrar-sesion');


    Route::group(['middleware'=>['usuario']],function(){

            //URLS PARA EL USUARIO
            Route::get('perfil-usuario', 'UsuarioController@mostrarPerfilUsuarioLogueado');

            Route::post('perfil-usuario/registrar', 'UsuarioController@registrarDataUsuario')->name('registrar-usuario');  
            Route::get('perfil-usuario/editar', 'UsuarioController@editarDataUsuario');
            Route::put('perfil-usuario/actualizar', 'UsuarioController@actualizarDataUsuario');
            Route::get('seguridad-usuario', function () {
                return view('forms-perfil-usuario.seguridad-usuario');
            });

    });

    Route::group(['middleware'=>['profesional']],function(){

            //URLS PARA EL PROFESIONAL
            Route::get('perfil-profesional', 'UsuarioController@mostrarPerfilProfesionalLogueado')->name('perfil-profesional');
            Route::post('perfil-profesional/registrar', 'UsuarioController@registrarDataProfesional')->name('registrar-profesional');  
            Route::get('perfil-profesional/editar', 'UsuarioController@editarDataPerfilProfesional');
            Route::put('perfil-profesional/actualizar', 'UsuarioController@actualizarDataProfesional');


            //CONTACTO
            Route::get('contacto-profesional', 'ContactoProfesionalController@mostrar' );
            Route::get('contacto-profesional/listar', 'ContactoProfesionalController@list' );
            Route::post('contacto-profesional/registrar', 'ContactoProfesionalController@store');  


            Route::get('disponibilidad-profesional/listar', 'DisponibilidadProfesionalController@list');  
            Route::post('disponibilidad-profesional/registrar', 'DisponibilidadProfesionalController@store');  



            //URLS PARA EL PROFESIONAL
            Route::get('planes-profesional', function () {
                return view('forms-perfil-profesional.planes-profesional');
            });


            //SERVICIOS
            Route::get('servicios-profesional', function () {
                return view('forms-perfil-profesional.servicios-profesional');
            });
            Route::get('servicios-profesional/listar', 'ServiciosProfesionalController@listar' );

            
            
            
            //AGENDA
            Route::get('agenda-profesional', function () {
                return view('forms-perfil-profesional.agenda-profesional');
            });
            
            //RESERVAS
            Route::get('reservas-profesional', function () {
                return view('forms-perfil-profesional.reservas-profesional');
            });
            
            //TARIFAS
            Route::get('tarifas-profesional', function () {
                return view('forms-perfil-profesional.tarifas-profesional');
            });

            Route::get('tarifas-profesional/listar', 'TarifaProfesionalController@list' );
            Route::delete('tarifas-profesional/eliminar/{id}', 'TarifaProfesionalController@destroy' );
            Route::post('tarifas-profesional/registrar', 'TarifaProfesionalController@store');
            



            
            Route::get('fotos-profesional', function () {   return view('forms-perfil-profesional.fotos-videos-profesional');  });
            Route::get('fotos-profesional/listar', 'FotoProfesionalController@list' );
            Route::post('fotos-profesional/subir', 'FotoProfesionalController@fileStore')->name('fotos-profesional/subir');


            
            Route::get('creditos-profesional', function () {   return view('forms-perfil-profesional.creditos-profesional');   });
            
            Route::get('booster-profesional', function () {  return view('forms-perfil-profesional.booster-profesional');  });
            
            Route::get('estadisticas-profesional', function () {  return view('forms-perfil-profesional.estadisticas-profesional');  });
            
            Route::get('mensajes-profesional', function () {  return view('forms-perfil-profesional.mensajes-profesional');  });
            
            Route::get('alerta-profesional', function () {  return view('forms-perfil-profesional.alerta-profesional');  });
            Route::get('alerta-profesional/listar', 'AlertaProfesionalController@list' );
            Route::post('alerta-profesional/registrar', 'AlertaProfesionalController@store');  
            
            
            Route::get('valoracion-profesional', function () {  return view('forms-perfil-profesional.valoracion-profesional');  });

    });



});








