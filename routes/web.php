<?php

//CONTROLLERS
/*
Route::resource('agenda_profesional', 'AgendaProfesionalController');
Route::resource('alerta_profesional', 'AlertaProfesionalController');
Route::resource('booster_profesional', 'BoosterProfesionalController');
Route::resource('contacto_profesional', 'ContactoProfesionalController');
Route::resource('credito_profesional', 'CreditoProfesionalController');
Route::resource('disponibilidad_profesional', 'DisponibilidadProfesionalController');
Route::resource('estadistica_profesional', 'EstadisticaProfesionalController');
Route::resource('favorito_usuario', 'FavoritoUsuarioController');
Route::resource('foto_profesional', 'FotoProfesionalController');
Route::resource('mensaje_profesional', 'MensajeProfesionalController');
Route::resource('mensaje_usuario', 'MensajeUsuarioController');
Route::resource('perfil_usuario', 'PerfilUsuarioController');
Route::resource('perfil_profesional', 'PerfilProfesionalController');
Route::resource('reserva_usuario', 'ReservaUsuarioController');
Route::resource('seguridad_usuario', 'SeguridadUsuarioController');
Route::resource('servicios', 'ServiciosController');
Route::resource('servicio_profesional', 'ServicioProfesionalController');
Route::resource('tarifa_profesional', 'TarifaProfesionalController');
Route::resource('valoracion_profesional', 'ValoracionProfesionalController');
Route::resource('categorias', 'CategoriasController');
*/

//URLS DEL SISTEMA


Route::get('/', function () {
    return view('home');
});

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

//VISTA DE PERFIL
Route::get('perfil', function () {
    return view('perfil');
});





//URLS PARA EL USUARIO
Route::get('perfil-usuario', 'UsuarioController@mostrarPerfilUsuarioLogueado')->name('perfil-usuario');
Route::post('perfil-usuario/registrar', 'UsuarioController@registrarDataUsuario');
Route::get('perfil-usuario/editar', 'UsuarioController@editarDataUsuario');
Route::put('perfil-usuario/actualizar', 'UsuarioController@actualizarDataUsuario');




//URLS PARA EL PROFESIONAL
Route::get('perfil-profesional', 'UsuarioController@mostrarPerfilProfesionalLogueado')->name('perfil-profesional');
Route::post('perfil-profesional/registrar', 'UsuarioController@registrarDataProfesional');
Route::get('perfil-profesional/editar', 'UsuarioController@editarDataPerfilProfesional');
Route::put('perfil-profesional/actualizar', 'UsuarioController@actualizarDataProfesional');




//Route::get('perfil-profesional/editar', 'UsuarioController@obtenerDataProfesional');
//Route::get('obtenerUsuario/{id}', 'UsuarioController@obtenerUsuario');

Route::get('usuarios', 'UsuarioController@index');
//Route::post('usuarios/registrar-usuario', 'UsuarioController@registrarUsuario')->name('registrar-usuario');
//Route::post('usuarios/registrar-profesional', 'UsuarioController@registrarProfesional')->name('registrar-profesional');




/*Route::get('perfil-profesional', function () {
    return view('forms-perfil-profesional.perfil-profesional');
});*/

Route::get('planes-profesional', function () {
    return view('forms-perfil-profesional.planes-profesional');
});



Route::get('servicios-profesional', function () {
    return view('forms-perfil-profesional.servicios-profesional');
});

Route::get('contacto-profesional', function () {
    return view('forms-perfil-profesional.contacto-profesional');
});

Route::get('agenda-profesional', function () {
    return view('forms-perfil-profesional.agenda-profesional');
});

Route::get('reservas-profesional', function () {
    return view('forms-perfil-profesional.reservas-profesional');
});

Route::get('tarifas-profesional', function () {
    return view('forms-perfil-profesional.tarifas-profesional');
});

Route::get('fotos-videos-profesional', function () {
    return view('forms-perfil-profesional.fotos-videos-profesional');
});

Route::get('creditos-profesional', function () {
    return view('forms-perfil-profesional.creditos-profesional');
});

Route::get('booster-profesional', function () {
    return view('forms-perfil-profesional.booster-profesional');
});

Route::get('estadisticas-profesional', function () {
    return view('forms-perfil-profesional.estadisticas-profesional');
});

Route::get('mensajes-profesional', function () {
    return view('forms-perfil-profesional.mensajes-profesional');
});

Route::get('alerta-profesional', function () {
    return view('forms-perfil-profesional.alerta-profesional');
});

Route::get('valoracion-profesional', function () {
    return view('forms-perfil-profesional.valoracion-profesional');
});






Route::get('seguridad-usuario', function () {
    return view('forms-perfil-usuario.seguridad-usuario');
});


//Auth::routes();
// Authentication Routes...
Route::get('iniciar-sesion', 'Auth\LoginController@showLoginForm');
Route::post('iniciar-sesion', 'Auth\LoginController@login')->name('iniciar-sesion');
Route::post('cerrar-sesion', 'Auth\LoginController@logout')->name('cerrar-sesion');


   
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










