<?php

//use App\Http\Middleware\Admin;
//use App\Http\Middleware\Profesional;
//use App\Http\Middleware\CheckRol;
use Illuminate\Http\Request;

Auth::routes(['verify' => true]);

// Registration Routes...


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::post('email/check', 'CrearCuentaController@checkEmail');  


Route::get('/',  'HomeController@mostrar')->name('home');


//CATEGORIAS
Route::get('anuncios', function () {  return view('anuncios'); });

Route::get('anuncios/{categoria}', function (Request $request) {  
    return view('categoria')->withTitle($request->categoria);
});

Route::post('usuarios', 'HomeController@listarProfesionales');
Route::get('usuarios', 'HomeController@listarProfesionales');
Route::get('categorias/listar', 'CategoriasController@listar');
Route::get('idiomas/listar', 'IdiomasController@listar');


//VISTA DE PERFIL
Route::get('perfil/{apodo}',  'PerfilController@mostrar');
Route::get('perfil/disponibilidad/{apodo}', 'PerfilController@disponibilidad' );

Route::group(['middleware'=>['guest']],function(){
  
        Route::get('crear-cuenta', 'CrearCuentaController@mostrarOpcionesRegistro');   
        Route::get('crear-cuenta-profesional', 'CrearCuentaController@mostrarRegistroProfesional');   
        Route::get('crear-cuenta-usuario', 'CrearCuentaController@mostrarRegistroUsuario');      
        Route::get('faq-perfil-usuario', 'HomeController@mostrarFaqUsuario');   
        Route::get('faq-perfil-profesional', 'HomeController@mostrarFaqProfesional');   
        Route::get('faq-perfil-empresa', 'HomeController@mostrarFaqEmpresa');   

        Route::post('comprobar-credenciales', 'Auth\LoginController@login')->name('comprobar-credenciales');
        Route::get('iniciar-sesion', 'Auth\LoginController@showLoginForm')->name('iniciar-sesion');

        Route::post('registrar-usuario', 'CrearCuentaController@registrarUsuario')->name('registrar-usuario');
        Route::post('registrar-profesional', 'CrearCuentaController@registrarProfesional')->name('registrar-profesional');

});



Route::group(['middleware'=>['auth','verified']],function(){

    Route::get('cerrar-sesion', 'Auth\LoginController@logout')->name('cerrar-sesion');

    Route::group(['middleware'=>['usuario']],function(){

            Route::post('perfil/reservas/{apodo}', 'ReservasProfesionalController@registrar' );
            Route::post('perfil/mensaje/{apodo}', 'MensajeProfesionalController@enviarMensaje' );
            
            //URLS PARA EL USUARIO
            Route::get('perfil-usuario', 'UsuarioController@mostrarPerfilUsuarioLogueado')->name('perfil-usuario');
            Route::post('perfil-usuario/editar', 'UsuarioController@editarDataUsuario');
            Route::put('perfil-usuario/actualizar', 'UsuarioController@actualizarDataUsuario');
            Route::put('seguridad-usuario', 'SeguridadUsuarioController@mostrar')->name('seguridad-usuario');

            Route::get('perfil/usuario/sesion', 'UsuarioController@obtenerUsuarioLogueado');

            Route::get('perfil/tarifas/{apodo}', 'PerfilController@tarifas' );
            Route::post('perfil/horarios/{apodo}', 'PerfilController@horarios' );


            

    });


    Route::group(['middleware'=>['admin']],function(){

            //ROUTES
            Route::get('admin/dashboard', 'AdministradorController@mostrarDashboard')->name('dashboard');
            Route::get('admin/usuarios', 'AdministradorController@mostrarUsuarios');
            Route::get('admin/alertas', 'AdministradorController@mostrarAlertas');
            Route::get('admin/idiomas', 'AdministradorController@mostrarIdiomas');
            Route::get('admin/categorias', 'AdministradorController@mostrarCategorias');
            Route::get('admin/planes', 'AdministradorController@mostrarPlanes');
            
            //API REST
            Route::post('admin/usuarios/listar', 'UsuarioController@listarProfesionalesAdmin');
            Route::post('admin/mensajes/listar', 'UsuarioController@listarProfesionalesAdmin');
            Route::post('admin/alertas/listar', 'AlertaProfesionalController@listarAlertasAdmin');
            Route::get('admin/idiomas/listar', 'IdiomasController@listar');
            Route::get('admin/categorias/listar', 'CategoriasController@listar');


    });


    Route::group(['middleware'=>['profesional']],function(){

            //URLS PARA EL PROFESIONAL
            Route::get('perfil-profesional', 'UsuarioController@mostrarPerfilProfesionalLogueado')->name('perfil-profesional');
            //Route::post('perfil-profesional/registrar', 'UsuarioController@registrarDataProfesional')->name('registrar-profesional');  
            Route::get('perfil-profesional/editar', 'UsuarioController@editarDataPerfilProfesional');
            Route::put('perfil-profesional/actualizar', 'UsuarioController@actualizarDataProfesional');


            //CONTACTO
            Route::get('contacto-profesional', 'ContactoProfesionalController@mostrar')->name('contacto-profesional');
            Route::get('contacto-profesional/listar', 'ContactoProfesionalController@listar');

            Route::get('disponibilidad-profesional/listar', 'DisponibilidadProfesionalController@list');  
            Route::post('disponibilidad-profesional/registrar', 'DisponibilidadProfesionalController@store');  

            //RESERVAS            
            Route::get('reservas-profesional', 'ReservasProfesionalController@mostrar' )->name('reservas-profesional');
            Route::get('reservas-profesional/listar', 'ReservasProfesionalController@listar' );
            Route::post('reservas-profesional/aceptar', 'ReservasProfesionalController@aceptar'); 
            Route::post('reservas-profesional/rechazar', 'ReservasProfesionalController@rechazar'); 


            //URLS PARA EL PROFESIONAL
            Route::get('planes-profesional', 'PlanesProfesionalController@mostrar')->name('planes-profesional');

            //MENSAJES
            Route::get('mensajes-profesional', 'MensajeProfesionalController@mostrar')->name('mensajes-profesional');
            Route::get('mensajes-profesional/listar', 'MensajeProfesionalController@listar');
            Route::post('mensajes-profesional/responder', 'MensajeProfesionalController@responder');
            Route::post('mensajes-profesional/eliminar', 'MensajeProfesionalController@eliminar');

            //SERVICIOS
            Route::get('servicios-profesional', function () {
                return view('forms-perfil-profesional.servicios-profesional');
            });
            Route::get('servicios-profesional/listar', 'ServiciosProfesionalController@listar' );
            
            //AGENDA
            Route::get('agenda-profesional', function () {
                return view('forms-perfil-profesional.agenda-profesional');
            });
            
            //TARIFAS
            Route::get('tarifas-profesional', function () {
                return view('forms-perfil-profesional.tarifas-profesional');
            });

            Route::get('tarifas-profesional/listar', 'TarifaProfesionalController@list' );
            Route::delete('tarifas-profesional/eliminar/{id}', 'TarifaProfesionalController@destroy' );
            Route::post('tarifas-profesional/registrar', 'TarifaProfesionalController@store');
            


            Route::get('fotos-profesional', function () {   return view('forms-perfil-profesional.fotos-videos-profesional');  });
            Route::get('fotos-profesional/listar', 'FotoProfesionalController@listar' );
            Route::post('fotos-profesional/subir', 'FotoProfesionalController@subir')->name('fotos-profesional/subir');
            Route::post('fotos-profesional/ordenar', 'FotoProfesionalController@ordenar' );
            Route::post('fotos-profesional/eliminar', 'FotoProfesionalController@eliminar' );


            
            Route::get('creditos-profesional', 'CreditoProfesionalController@mostrar' );
            Route::get('creditos-profesional/listar', 'CreditoProfesionalController@listar' );

            Route::get('codigos-promocionales/listar', 'CodigoPromocionalController@listar' );
            Route::get('codigos-promocionales/consultar/{codigo}', 'CodigoPromocionalController@consultar' );

            Route::get('frecuencia-booster/listar', 'FrecuenciaBoosterController@listar' );
            Route::post('frecuencia-booster/eliminar', 'FrecuenciaBoosterController@eliminar' );
            Route::post('frecuencia-booster/agregar', 'FrecuenciaBoosterController@agregar' );
            

            Route::get('booster-profesional', function () {  return view('forms-perfil-profesional.booster-profesional');  });
            Route::get('booster-profesional/listar', 'BoosterProfesionalController@listar' );
            Route::post('booster-profesional/actualizar', 'BoosterProfesionalController@actualizar' );

            Route::get('booster-cobrado/listar', 'BoosterCobradoController@listar' );

            Route::get('categorias-profesional/listar', 'CategoriasProfesionalController@listar' );
            Route::get('estadisticas-profesional', function () {  return view('forms-perfil-profesional.estadisticas-profesional');  });
            
            
            
            Route::get('alerta-profesional', function () {  return view('forms-perfil-profesional.alerta-profesional');  });
            Route::get('alerta-profesional/listar', 'AlertaProfesionalController@list' );
            Route::post('alerta-profesional/registrar', 'AlertaProfesionalController@store');  
            
            
            Route::get('valoracion-profesional', function () {  return view('forms-perfil-profesional.valoracion-profesional');  });

    });



});








