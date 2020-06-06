<?php

//use App\Http\Middleware\Admin;
//use App\Http\Middleware\Profesional;
//use App\Http\Middleware\CheckRol;

use App\Notifications\ReservaRealizada;
use App\Notifications\VerificarEmail;
use App\ReservasProfesional;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function() {
        return redirect()->route('home', app()->getLocale());
       // return redirect(app()->getLocale());     
});


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '(es|pe|pa)'], 'middleware' => 'setlocale'], function ($country) {


        Route::get('email/reenviar', 'Auth\VerificationController@reenviar')->name('verification.reenviar');

        Route::post('email/check', 'CrearCuentaController@checkEmail');

        Route::get('iniciar-sesion', 'Auth\LoginController@showLoginForm')->name('iniciar-sesion');

        Route::get('/',  'HomeController@mostrar')->name('home');

        Route::get('anuncios', function () {  return view('anuncios'); });

        Route::group(['middleware' => ['guest']],function(){
  
                Route::get('crear-cuenta', 'CrearCuentaController@mostrarOpcionesRegistro')->name('crear-cuenta');   
                Route::get('crear-cuenta-profesional', 'CrearCuentaController@mostrarRegistroProfesional')->name('crear-cuenta-profesional');   
                Route::get('crear-cuenta-usuario', 'CrearCuentaController@mostrarRegistroUsuario')->name('crear-cuenta-usuario');         
                Route::get('crear-cuenta-empresa', 'CrearCuentaController@mostrarRegistroEmpresa')->name('crear-cuenta-empresa');      

                Route::post('comprobar-credenciales', 'Auth\LoginController@login')->name('comprobar-credenciales');

                Route::get('iniciar-sesion', 'Auth\LoginController@showLoginForm')->name('iniciar-sesion');

                Route::post('registrar-usuario', 'CrearCuentaController@registrarUsuario')->name('registrar-usuario');
                Route::post('registrar-usuario-fotos', 'CrearCuentaController@subirFotoUsuarioRegistro');   
                Route::post('registrar-profesional', 'CrearCuentaController@registrarProfesional')->name('registrar-profesional');
                Route::post('registrar-profesional-fotos', 'CrearCuentaController@subirFotoProfesionalRegistro');   
                Route::post('registrar-empresa', 'CrearCuentaController@registrarEmpresa')->name('registrar-empresa');
                Route::post('registrar-empresa-banner', 'CrearCuentaController@subirBannerEmpresaRegistro');   
                Route::get('eliminar-profesional', 'AdministradorController@eliminarProfesional');
        
        });


        //VISTA DE PERFIL
        Route::get('perfil/{apodo}',  'PerfilController@mostrar')->name('perfil');
        Route::get('perfil/{apodo}/listar',  'PerfilController@listar');
        Route::get('perfil/{apodo}/disponibilidad/', 'DisponibilidadProfesionalController@listar' );

        Route::post('seleccionar-states', 'CrearCuentaController@seleccionarStates');
        Route::post('seleccionar-cities', 'CrearCuentaController@seleccionarCities');

        Route::get('faq-perfil-usuario', 'HomeController@mostrarFaqUsuario')->name('faq-perfil-usuario');    
        Route::get('faq-perfil-profesional', 'HomeController@mostrarFaqProfesional')->name('faq-perfil-profesional');   
        Route::get('faq-perfil-empresa', 'HomeController@mostrarFaqEmpresa')->name('faq-perfil-empresa');  
        
        Route::get('blog', 'BlogController@mostrar')->name('blog');   
        Route::get('blog/{id}', 'BlogController@leer')->name('blog.leer');   


        //CATEGORIAS
        Route::get('anuncios/{categoria}', function (Request $request) {  return view('categoria')->withTitle($request->categoria);  })->name('anuncios');
        Route::post('anuncios/{categoria}/buscar', 'HomeController@listarEnCategoria');

        //OBTENER LISTADO EN HOME
        Route::post('usuarios-home/buscar', 'HomeController@listarEnHome');

        
        //PARA LAS BUSQUEDAS
        Route::get('categorias/listar', 'CategoriasController@listar');
        Route::get('idiomas/listar', 'IdiomasController@listar');


        Route::group(['middleware'=>['auth','verified']],function(){

                Route::get('cerrar-sesion', 'Auth\LoginController@logout')->name('cerrar-sesion');

                Route::group(['middleware'=>['usuario']],function(){

                        //URLS PARA EL USUARIO
                        Route::get('perfil-usuario', 'UsuarioController@mostrarPerfilUsuarioLogueado')->name('perfil-usuario');
                        Route::get('perfil-usuario/editar', 'UsuarioController@editarDataUsuario');
                        Route::put('perfil-usuario/actualizar', 'UsuarioController@actualizarDataUsuario');
                
                        //MENSAJES
                        Route::get('mensajes-usuario', 'MensajeUsuarioController@mostrar')->name('mensajes-usuario');
                        Route::get('mensajes-usuario/listar', 'MensajeUsuarioController@listar');
                        Route::post('mensajes-usuario/responder', 'MensajeUsuarioController@responder');
                        Route::post('mensajes-usuario/eliminar', 'MensajeUsuarioController@eliminar');
                
                        //RESERVAS
                        Route::get('reservas-usuario', 'ReservasUsuarioController@mostrar' )->name('reservas-usuario');
                        Route::get('reservas-usuario/listar', 'ReservasUsuarioController@listar' );
                        Route::post('reservas-usuario/aceptar', 'ReservasUsuarioController@cancelar'); 
                
                        //FAVORITOS
                        Route::get('favoritos-usuario', 'FavoritoUsuarioController@mostrar')->name('favoritos-usuario');
                        Route::get('favoritos-usuario/listar', 'FavoritoUsuarioController@listar');
                        Route::post('favoritos-usuario/agregar', 'FavoritoUsuarioController@agregar' );    
                
                        Route::get('perfil/{apodo}/sesion', 'UsuarioController@obtenerUsuarioLogueado');
                        Route::get('perfil/{apodo}/tarifas', 'PerfilController@tarifas' );
                        Route::post('perfil/{apodo}/horarios', 'PerfilController@horarios' );     
                        Route::post('perfil/{apodo}/reservas', 'ReservasProfesionalController@registrar' );
                        Route::put('perfil/{apodo}/mensaje', 'MensajeProfesionalController@enviarMensaje' );
                
                        Route::get('seguridad-usuario', 'SeguridadUsuarioController@mostrar')->name('seguridad-usuario');
                        Route::get('seguridad-usuario/listar', 'SeguridadUsuarioController@listar');
                        Route::post('seguridad-usuario/eliminar', 'SeguridadUsuarioController@eliminar');
                        Route::put('seguridad-usuario/actualizar', 'SeguridadUsuarioController@actualizar');
                        Route::post('seguridad-usuario/subir', 'SeguridadUsuarioController@subir');
        
                });


                Route::group(['middleware'=>['empresa']],function(){
                        
                        //URLS PARA EL USUARIO
                        Route::get('perfil-empresa', 'UsuarioController@mostrarPerfilEmpresaLogueado')->name('perfil-empresa');
                        Route::get('perfil-empresa/editar', 'UsuarioController@editarDataEmpresa');
                        Route::put('perfil-empresa/actualizar', 'UsuarioController@actualizarDataEmpresa');
                        Route::get('banners-empresa', 'BannerEmpresaController@mostrar');
                        Route::get('banners-empresa/listar', 'BannerEmpresaController@listar');
                        Route::post('banners-empresa/eliminar', 'BannerEmpresaController@eliminar');
                        Route::post('banners-empresa/subir', 'BannerEmpresaController@subir');
                        Route::get('planes-empresa', 'PlanesEmpresaController@mostrar');
                        Route::get('planes-empresa/listar', 'PlanesEmpresaController@listar');
                        Route::get('estadisticas-empresa', function () {  return view('forms-perfil-empresa.estadisticas-empresa');  });

                });


                Route::group(['middleware'=>['admin']],function(){

                        //ROUTES
                        Route::get('admin/dashboard', 'AdministradorController@mostrarDashboard')->name('admin/dashboard');
                        Route::get('admin/usuarios', 'AdministradorController@mostrarUsuarios');
                        Route::get('admin/alertas', 'AdministradorController@mostrarAlertas');
                        Route::get('admin/idiomas', 'AdministradorController@mostrarIdiomas');
                        Route::get('admin/categorias', 'AdministradorController@mostrarCategorias');
                        Route::get('admin/planes', 'AdministradorController@mostrarPlanes');
                        
                        //API REST
                        Route::post('admin/usuarios/listar', 'AdministradorController@listarProfesionalesAdmin');
                        Route::post('admin/mensajes/listar', 'UsuarioController@listarProfesionalesAdmin');
                        Route::post('admin/alertas/listar', 'AlertaProfesionalController@listarAlertasAdmin');
                        Route::get('admin/idiomas/listar', 'IdiomasController@listar');
                        Route::get('admin/categorias/listar', 'CategoriasController@listar');

                });


                Route::group(['middleware'=>['profesional']],function(){

                        //URLS PARA EL PROFESIONAL
                        Route::get('perfil-profesional', 'UsuarioController@mostrarPerfilProfesionalLogueado')->name('perfil-profesional');
                        Route::get('perfil-profesional/editar', 'UsuarioController@editarDataPerfilProfesional');
                        Route::put('perfil-profesional/actualizar', 'UsuarioController@actualizarDataProfesional');

                        //SERVICIOS
                        Route::get('servicios-profesional', 'ServiciosProfesionalController@mostrar')->name('servicios-profesional');
                        Route::get('servicios-profesional/listar', 'ServiciosProfesionalController@listar' );
                        Route::put('servicios-profesional/registrar', 'ServiciosProfesionalController@registrar' );
                        Route::post('servicios-profesional/actualizar', 'ServiciosProfesionalController@actualizar' );
                        Route::delete('servicios-profesional/eliminar', 'ServiciosProfesionalController@eliminar' );

                        //CONTACTO
                        Route::get('contacto-profesional', 'ContactoProfesionalController@mostrar')->name('contacto-profesional');
                        Route::get('contacto-profesional/listar', 'ContactoProfesionalController@listar');
                        Route::post('contacto-profesional/actualizar', 'ContactoProfesionalController@actualizar' );

                        //DISPONIBILIDAD
                        Route::get('disponibilidad-profesional/listar', 'DisponibilidadProfesionalController@listar');  
                        Route::post('disponibilidad-profesional/registrar', 'DisponibilidadProfesionalController@store');  
                        Route::post('disponibilidad-profesional/actualizar', 'DisponibilidadProfesionalController@actualizar' );

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

                        //FOTOS
                        Route::get('fotos-profesional', 'FotoProfesionalController@mostrar')->name('fotos-profesional');
                        Route::get('fotos-profesional/listar', 'FotoProfesionalController@listar' );
                        Route::post('fotos-profesional/subir', 'FotoProfesionalController@subir')->name('fotos-profesional/subir');
                        Route::post('fotos-profesional/ordenar', 'FotoProfesionalController@ordenar' );
                        Route::post('fotos-profesional/eliminar', 'FotoProfesionalController@eliminar' );

                        //ALERTA
                        Route::get('alerta-profesional', 'AlertaProfesionalController@mostrar')->name('alerta-profesional');
                        Route::get('alerta-profesional/listar', 'AlertaProfesionalController@listar' );
                        Route::post('alerta-profesional/registrar', 'AlertaProfesionalController@registrar');  
                        
                        //AGENDA
                        Route::get('agenda-profesional', 'AgendaProfesionalController@mostrar')->name('agenda-profesional');
                        Route::get('agenda-profesional/listar', 'AgendaProfesionalController@listar');
                        
                        //TARIFAS
                        Route::get('tarifas-profesional', 'TarifaProfesionalController@mostrar')->name('tarifas-profesional');
                        Route::get('tarifas-profesional/listar', 'TarifaProfesionalController@list' );
                        Route::delete('tarifas-profesional/eliminar/{id}', 'TarifaProfesionalController@destroy' );
                        Route::post('tarifas-profesional/registrar', 'TarifaProfesionalController@store');

                        Route::post('tipo-moneda/actualizar', 'TarifaProfesionalController@actualizarTipoMoneda');
                        
                        //CREDITOS
                        Route::get('creditos-profesional', 'CreditoProfesionalController@mostrar' )->name('creditos-profesional');
                        Route::get('creditos-profesional/listar', 'CreditoProfesionalController@listar' );

                        Route::get('codigos-promocionales/listar', 'CodigoPromocionalController@listar' );
                        Route::get('codigos-promocionales/consultar/{codigo}', 'CodigoPromocionalController@consultar' );

                        Route::get('frecuencia-booster/listar', 'FrecuenciaBoosterController@listar' );
                        Route::post('frecuencia-booster/eliminar', 'FrecuenciaBoosterController@eliminar' );
                        Route::post('frecuencia-booster/agregar', 'FrecuenciaBoosterController@agregar' );

                        Route::get('booster-profesional', 'BoosterProfesionalController@mostrar')->name('booster-profesional');
                        Route::get('booster-profesional/listar', 'BoosterProfesionalController@listar' );
                        Route::post('booster-profesional/actualizar', 'BoosterProfesionalController@actualizar' );
                        Route::get('booster-cobrado/listar', 'BoosterCobradoController@listar' );

                        Route::get('categorias-profesional/listar', 'CategoriasProfesionalController@listar' );

                        Route::get('estadisticas-profesional', 'EstadisticaProfesionalController@mostrar')->name('estadisticas-profesional');
                        
                        Route::get('valoracion-profesional', 'ValoracionProfesionalController@mostrar' )->name('valoracion-profesional');
                        Route::get('valoracion-profesional/listar', 'ValoracionProfesionalController@listar' );

                });
        
        
        });


});












