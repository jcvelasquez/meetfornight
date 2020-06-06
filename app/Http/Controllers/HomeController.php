<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\CategoriasProfesional;
use App\FotoProfesional;
use App\BoosterCobrado;
use App\FavoritoUsuario;
use App\Usuario;
use App\Rol;
use App\Planes;
use App\PlanesProfesional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{

    private $fotos_profesional_path;
    //FILTROS BUSQUEDA
    private $orientacion;
    private $nacionalidad;
    private $seguridad;
    private $nombre;
    private $apodo;
    private $ciudad;
    private $pecho;
    private $distrito;
    private $pene;
    private $corte;
    //FILTROS DE BUSQUEDA ARRAY
    private $idcategoria;
    private $idiomas;
    private $edad;
    private $estatura;
    private $peso;

    private $idcountry;
    private $idstate;
    private $idcity;
    private $favoritos;


    private $boosterstop;

    /*public function __construct(string $locale = app()->getLocale(), $favoritos = array()) 
    {
        $this->fotos_profesional_path = public_path('fotos_profesionales');
        $this->favoritos = $favoritos;

        switch( $locale ){

            case "es" : $this->idcountry = 205; break;
            case "pe" : $this->idcountry = 172; break;
            case "pa" : $this->idcountry = 169; break;
            default : $this->idcountry = 172;

        }

        //parent::construct($this->favoritos);



    }*/

    public function mostrar(Request $request)
    {
        return view('home');
    }

    public function mostrarFaqUsuario(Request $request)
    {
        return view('faq-perfil-usuario');
    }

    public function mostrarFaqProfesional(Request $request)
    {
        return view('faq-perfil-profesional');
    }

    public function mostrarFaqEmpresa(Request $request)
    {
        return view('faq-perfil-empresa');
    }


    public function listarEnHome(Request $request)
    {

        switch( app()->getLocale() ){

            case "es" : $this->idcountry = 205; break;
            case "pe" : $this->idcountry = 172; break;
            case "pa" : $this->idcountry = 169; break;
            default : $this->idcountry = 172;

        }


        $this->favoritos = [];
       
        //FILTROS DE BUSQUEDA
        $this->orientacion = $request->orientacion;
        $this->seguridad = $request->seguridad;
        $this->pecho = $request->pecho;
        //$this->idstate = $request->idstate;
        //$this->idcity = $request->idcity;
        $this->pene = $request->pene;
        $this->corte = $request->corte;

        //FILTROS DE BUSQUEDA ARRAY
        $this->idcategoria = $request->idcategoria;
        $this->edad = $request->edad;

        if(is_null($this->edad)){
            $this->edad = [18,40];
        }

        if(is_null($this->idcategoria)){
            $this->idcategoria = 1;
        }

        $this->boosterstop = 3;

        
        $query = " (select TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) as edad, usuarios.id, UNIX_TIMESTAMP(usuarios.created_at) as uid, 0 as es_favorito, 0 as 'es_booster', categorias.nombre_categoria, usuarios.apodo, usuarios.fecha_nacimiento, foto_profesional.url_foto, usuarios.created_at from usuarios INNER JOIN foto_profesional ON usuarios.id = foto_profesional.idusuario INNER JOIN categorias_profesional ON usuarios.id = categorias_profesional.idprofesional INNER JOIN categorias on categorias_profesional.idcategoria = categorias.id where usuarios.idrol = 4 and categorias.id = ".$this->idcategoria." and foto_profesional.orden = 0 and usuarios.idcountry = ".$this->idcountry. " and TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) between ".$this->edad[0]." and ".$this->edad[1]; 
        
        $query .= " union all ";
        
        $query .= " select TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) as edad, usuarios.id, UNIX_TIMESTAMP(booster_cobrados_profesional.created_at) as uid, 0 as es_favorito, 1 as 'es_booster', categorias.nombre_categoria, usuarios.apodo, usuarios.fecha_nacimiento, foto_profesional.url_foto, booster_cobrados_profesional.created_at from booster_cobrados_profesional INNER JOIN usuarios on usuarios.id = booster_cobrados_profesional.idprofesional INNER JOIN foto_profesional ON booster_cobrados_profesional.idprofesional = foto_profesional.idusuario INNER JOIN categorias ON booster_cobrados_profesional.idcategoria = categorias.id where usuarios.idrol = 4 and categorias.id = ".$this->idcategoria." and foto_profesional.orden = 0 and booster_cobrados_profesional.created_at >= '".Carbon::now()->subDays($this->boosterstop)->format("Y-m-d H:i:s")."' and usuarios.idcountry = ".$this->idcountry." and TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) between ".$this->edad[0]." and ".$this->edad[1]." ) AS VIEW_RESULT ORDER BY created_at DESC";

        $resultados = DB::table( DB::raw($query) )->paginate(32);

        
        if(Auth::user()){

            $idusuario = Auth::user()->id;
            
            $this->favoritos = FavoritoUsuario::where('idusuario', '=',$idusuario)->pluck('idprofesional')->toArray();

            foreach($resultados as $result){

                if($result->es_booster == 0 && in_array($result->id, $this->favoritos) ){
                    $result->es_favorito = 1;
                }
            }

        }

  

        return [
            'pagination' => [
                'total'        => $resultados->total(),
                'current_page' => $resultados->currentPage(),
                'per_page'     => $resultados->perPage(),
                'last_page'    => $resultados->lastPage(),
                'from'         => $resultados->firstItem(),
                'to'           => $resultados->lastItem(),
            ],
            'arUsuarios' => $resultados->values()
        ];

    }

    

    public function listarEnCategoria(Request $request)
    {

        switch( app()->getLocale() ){

            case "es" : $this->idcountry = 205; break;
            case "pe" : $this->idcountry = 172; break;
            case "pa" : $this->idcountry = 169; break;
            default : $this->idcountry = 172;

        }


        $this->favoritos = [];
            
        if(isset($request->categoria) && $request->categoria != 'all') { //CONSULTA PARA LAS CATEGORIAS

                $categoria = Categorias::select('id')->where('nombre_categoria', '=', $request->categoria)->firstOrFail();       

                //FILTROS DE BUSQUEDA ARRAY
                $this->idcategoria = $categoria->id;

                if(is_null($this->edad)){
                    $this->edad = [18,40];
                }

                if(is_null($this->idcategoria)){
                    $this->idcategoria = 1;
                }

                $this->boosterstop = 3;

                $query = " (select TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) as edad, usuarios.id, UNIX_TIMESTAMP(usuarios.created_at) as uid, 0 as es_favorito, 0 as 'es_booster', categorias.nombre_categoria, usuarios.apodo, usuarios.fecha_nacimiento, foto_profesional.url_foto, usuarios.created_at from usuarios INNER JOIN foto_profesional ON usuarios.id = foto_profesional.idusuario INNER JOIN categorias_profesional ON usuarios.id = categorias_profesional.idprofesional INNER JOIN categorias on categorias_profesional.idcategoria = categorias.id where usuarios.idrol = 4 and categorias.id = ".$this->idcategoria." and foto_profesional.orden = 0 and usuarios.idcountry = ".$this->idcountry. " and TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) between ".$this->edad[0]." and ".$this->edad[1]; 
                
                $query .= " union all ";
                
                $query .= " select TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) as edad, usuarios.id, UNIX_TIMESTAMP(booster_cobrados_profesional.created_at) as uid, 0 as es_favorito, 1 as 'es_booster', categorias.nombre_categoria, usuarios.apodo, usuarios.fecha_nacimiento, foto_profesional.url_foto, booster_cobrados_profesional.created_at from booster_cobrados_profesional INNER JOIN usuarios on usuarios.id = booster_cobrados_profesional.idprofesional INNER JOIN foto_profesional ON booster_cobrados_profesional.idprofesional = foto_profesional.idusuario INNER JOIN categorias ON booster_cobrados_profesional.idcategoria = categorias.id where usuarios.idrol = 4 and categorias.id = ".$this->idcategoria." and foto_profesional.orden = 0 and booster_cobrados_profesional.created_at >= '".Carbon::now()->subDays($this->boosterstop)->format("Y-m-d H:i:s")."' and usuarios.idcountry = ".$this->idcountry." and TIMESTAMPDIFF( YEAR, usuarios.fecha_nacimiento, CURDATE()) between ".$this->edad[0]." and ".$this->edad[1]." ) AS VIEW_RESULT ORDER BY created_at DESC";

                $resultados = DB::table( DB::raw($query) )->paginate(32);

            
                if(Auth::user()){

                    $idusuario = Auth::user()->id;
                    
                    $this->favoritos = FavoritoUsuario::where('idusuario', '=',$idusuario)->pluck('idprofesional')->toArray();

                    foreach($resultados as $result){

                        if($result->es_booster == 0 && in_array($result->id, $this->favoritos) ){
                            $result->es_favorito = 1;
                        }
                    }

                }

                

            return [
                'pagination' => [
                    'total'        => $resultados->total(),
                    'current_page' => $resultados->currentPage(),
                    'per_page'     => $resultados->perPage(),
                    'last_page'    => $resultados->lastPage(),
                    'from'         => $resultados->firstItem(),
                    'to'           => $resultados->lastItem(),
                ],
                'arUsuarios' => $resultados->values()
            ];

        }
        //FIN DEL IF

    }



}
