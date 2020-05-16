<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planes;
use App\Usuario;
use App\UsuarioExtras;
use App\Countries;
use App\Idiomas;
use App\IdiomasProfesional;
use App\Categorias;
use App\States;
use App\Cities;
use App\PlanesProfesional;
use App\ServiciosProfesional;
use App\CategoriasProfesional;
use App\ServiciosXProfesional;
use App\DisponibilidadProfesional;
use App\FotoProfesional;
use App\TarifaProfesional;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Notifications\VerificarEmail;

class CrearCuentaController extends Controller
{
    //

    private $usuario_id;
    private $fotos_profesional_path;

    public function __construct()
    {
        $this->usuario_id = 0;
        
        $this->fotos_profesional_path = public_path('fotos_profesionales');
    }


    public function mostrarRegistroEmpresa(Request $request){


        $planes = Planes::where('estado_plan','=',1)->where('tipo_usuario','=','PROFESIONAL')->get();    
        $countries = Countries::where('sortname','=','ES')->orWhere('sortname','=','PE')->orWhere('sortname','=','PA')->get();   

        return view('crear-cuenta-empresa',compact('planes','countries'));

    }


    public function mostrarRegistroUsuario(Request $request)
    {

        $planes = Planes::where('estado_plan','=',1)->where('tipo_usuario','=','USUARIO')->get();    
        $countries = Countries::where('sortname','=','ES')->orWhere('sortname','=','PE')->orWhere('sortname','=','PA')->get();   

        return view('crear-cuenta-usuario',compact('planes','countries'));

    }

    public function mostrarRegistroProfesional(Request $request){

        $planes = Planes::where('estado_plan','=',1)->where('tipo_usuario','=','PROFESIONAL')->get();    
        $countries = Countries::where('sortname','=','ES')->orWhere('sortname','=','PE')->orWhere('sortname','=','PA')->get();   
        $categorias = Categorias::where('estado_categoria', 1)->get();
        $idiomas = Idiomas::where('estado_idioma', 1)->get();
        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();

        return view('crear-cuenta-profesional',compact('planes','countries','categorias','idiomas','servicios'));

    }

    public function mostrarOpcionesRegistro(Request $request){

        return view('crear-cuenta');

    }

    
    public function checkEmail(Request $request)
    {

        if(Usuario::where('email', '=', $request->email)->exists()) {
            return "false";
        }else{
            return "true";
        }
  
    }


    public function registrarUsuario(Request $request)
    {

        $usuario = new Usuario();
        $usuario->idrol = 3;
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->email = $request->email;
        $usuario->password = Hash::make( $request->password );
        $usuario->fecha_nacimiento = Carbon::createFromFormat('d/m/Y', $request->fecha_nacimiento );
        $usuario->sexo = $request->sexo;
        $usuario->idcountry = $request->idcountry;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->tipo_celular = "CELULAR";
        $usuario->idioma = "ES";
        $usuario->celular = $request->celular;
        $usuario->estado = 1;
        $usuario->save();      

        //$usuario->notify(new VerificarEmail($usuario));
        

        if($usuario){ 

            //------------------------------
            //CREAR PLANES
            //------------------------------
            $plan = new PlanesProfesional();
            $plan->idprofesional = $usuario->id;
            $plan->idplan = $request->idplan;
            $plan->meses_suscripcion = 3;
            $plan->inicio_suscripcion = Carbon::now()->format('Y-m-d H:i:s');
            $plan->estado_suscripcion = 1;
            $plan->save();


            return ['status' => 'success', "idusuario" => $usuario->id ];
        }else{
            return ['status' => 'error' ];
        }
    }

    public function registrarEmpresa(Request $request)
    {

        $usuario = new Usuario();
        $usuario->idrol = 2;
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->empresa;
        $usuario->email = $request->email;
        $usuario->password = Hash::make( $request->password );
        $usuario->fecha_nacimiento = NULL;
        $usuario->sexo = NULL;
        $usuario->idcountry = $request->idcountry;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->tipo_celular = "CELULAR";
        $usuario->idioma = "ES";        
        $usuario->celular = $request->celular;
        $usuario->estado = 1;
        $usuario->save();      

        $usuario->notify(new VerificarEmail($usuario));

        if($usuario){ 

            //------------------------------
            //CREAR PLANES
            //------------------------------
            $plan = new PlanesProfesional();
            $plan->idprofesional = $usuario->id;
            $plan->idplan = $request->idplan;
            $plan->meses_suscripcion = 3;
            $plan->inicio_suscripcion = Carbon::now()->format('Y-m-d H:i:s');
            $plan->estado_suscripcion = 1;
            $plan->save();


            return ['status' => 'success', "idempresa" => $usuario->id ];
        }else{
            return ['status' => 'error' ];
        }
        
        

    }

    public function registrarProfesional(Request $request)
    {
        

        //------------------------------
        //CREAR EXTRAS DE USUARIO
        //------------------------------
        $usuario = new Usuario();
        $usuario->idrol = 4;
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->email = $request->email;
        $usuario->password = Hash::make( $request->password );
        $usuario->fecha_nacimiento = Carbon::createFromFormat('d/m/Y', $request->fecha_nacimiento );
        $usuario->sexo = $request->sexo;
        $usuario->idcountry = $request->idcountry;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->tipo_celular = $request->tipo_celular;
        $usuario->idioma = "ES";        
        $usuario->celular = $request->celular;
        $usuario->estado = 1;
        $usuario->save();

        if($usuario){

            $this->usuario_id = $usuario->id;

            //------------------------------
            //CREAR EXTRAS DE USUARIO
            //------------------------------
            $usuarioExtra = new UsuarioExtras();
            $usuarioExtra->idusuario = $this->usuario_id;
            $usuarioExtra->frase = $request->frase;
            $usuarioExtra->descripcion = $request->descripcion;
            $usuarioExtra->web = $request->pagina_web;
            $usuarioExtra->pecho = $request->pecho;
            $usuarioExtra->pene = $request->pene;
            $usuarioExtra->color_ojos = $request->color_ojos;
            $usuarioExtra->color_cabello = $request->color_cabello;
            $usuarioExtra->corte_intimo = $request->corte_intimo;
            $usuarioExtra->estatura = $request->estatura;
            $usuarioExtra->peso = $request->peso;
            $usuarioExtra->orientacion = $request->orientacion;
            $usuarioExtra->tipo_contacto = $request->tipo_contacto;
            $usuarioExtra->tipo_moneda = $request->tipo_moneda;
            $usuarioExtra->tatuaje = $request->tatuaje;
            $usuarioExtra->piercing = $request->piercing;
            $usuarioExtra->fumador = $request->fumador;
            $usuarioExtra->seguridad = $request->seguridad;
            $usuarioExtra->agenda = $request->agenda;
            $usuarioExtra->save();

            //------------------------------
            //CREAR PLANES
            //------------------------------
            $plan = new PlanesProfesional();
            $plan->idprofesional = $this->usuario_id;
            $plan->idplan = $request->idplan;
            $plan->meses_suscripcion = 3;
            $plan->inicio_suscripcion = Carbon::now()->format('Y-m-d H:i:s');
            $plan->estado_suscripcion = 1;
            $plan->save();
            
        
            //------------------------------
            //CATEGORIAS
            //------------------------------
            $categorias = json_decode($request['categorias']);

            if(!empty($categorias)){
                foreach ($categorias as $idcat) {

                    $categoria = new CategoriasProfesional();
                    $categoria->idprofesional = $this->usuario_id;
                    $categoria->idcategoria = $idcat;
                    $categoria->save();
        
                }
            }


            //------------------------------
            //IDIOMAS
            //------------------------------
            $idiomas = json_decode($request['idiomas']);

            if(!empty($idiomas)){
                foreach ($idiomas as $ididio) {

                    $idiomas = new IdiomasProfesional();
                    $idiomas->idprofesional = $this->usuario_id;
                    $idiomas->ididioma = $ididio;
                    $idiomas->save();

                }
            }

    
            //------------------------------
            //DISPONIBILIDAD
            //------------------------------
            $disponibilidades = json_decode($request->disponibilidad);

            if(!empty($disponibilidades)){
                foreach ($disponibilidades as $dispo) {

                    $disponibilidad = new DisponibilidadProfesional();
                    $disponibilidad->idusuario = $this->usuario_id;
                    $disponibilidad->desde = $dispo->desde;
                    $disponibilidad->hasta = $dispo->hasta;
                    $disponibilidad->dia = $dispo->dia;
                    $disponibilidad->save();
        
                }
            }

        
            //------------------------------
            //TARIFAS
            //------------------------------
            $tarifas = json_decode($request->tarifas);

            if(!empty($tarifas)){
                foreach ($tarifas as $tari) {

                    $tarifa = new TarifaProfesional();
                    $tarifa->idusuario = $this->usuario_id;
                    $tarifa->opcion_tarifa = $tari->opcion_tarifa;
                    $tarifa->tiempo_tarifa = NULL;
                    $tarifa->costo_tarifa = $tari->costo_tarifa;
                    $tarifa->categoria_tarifa = $tari->categoria_tarifa;
                    $tarifa->save();
        
                }
            }

            //------------------------------
            //SERVICIOS
            //------------------------------
            $servicios = json_decode($request->servicios);

            if(!empty($servicios)){
                foreach ($servicios as $serv) {

                    $servicios = new ServiciosXProfesional();
                    $servicios->idservicio = $serv->idservicio;
                    $servicios->idusuario = $this->usuario_id;
                    $servicios->nombre_servicio = $serv->nombre_servicio;
                    $servicios->categoria_servicio = $serv->categoria_servicio;
                    $servicios->save();
        
                }
            }

            return ['mensaje' => 'Cuenta creada correctamente, se envio un correo de confirmación. Pulse aceptar para iniciar sesión en nuestra plataforma', 'status' => 'success', 'idprofesional' => $this->usuario_id];

        }else{

            return ['mensaje' => 'Hubo un error al momento de crear una cuenta', 'status' => 'error'];

        }
        

    }

    

    //FUNCION PARA SUBIR LAS FOTOS DEL PROFESIONAL DESDE EL FORMULARIO DE CREAR CUENTA
    public function subirFotoUsuarioRegistro(Request $request)
    {

        $idusuario = $request->idusuario;

        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
            
        if ( $image->move( $this->fotos_profesional_path ,$save_name) ) {

            $foto = new FotoProfesional();
            $foto->idusuario =  $idusuario;
            $foto->url_foto = $save_name;
            $foto->orden = 0;
            $foto->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }

    }


    //FUNCION PARA SUBIR LAS FOTOS DEL PROFESIONAL DESDE EL FORMULARIO DE CREAR CUENTA
    public function subirFotoProfesionalRegistro(Request $request)
    {

        $idprofesional = $request->idprofesional;

        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
            
        if ( $image->move( $this->fotos_profesional_path ,$save_name) ) {

            $totalFotos = FotoProfesional::where('idusuario', '=', $idprofesional)->count();

            $foto = new FotoProfesional();
            $foto->idusuario =  $idprofesional;
            $foto->url_foto = $save_name;
            $foto->orden = $totalFotos;
            $foto->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }

    }

    

    public function seleccionarStates(Request $request){

        $states = States::where('country_id', '=', $request->idcountry)->get(); 

        return ['states' => $states];

    }

    public function seleccionarCities(Request $request){

        $cities = Cities::where('state_id', '=', $request->idstate)->get(); 

        return ['cities' => $cities];

    }

    

}
