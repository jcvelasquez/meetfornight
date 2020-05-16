<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\CategoriasProfesional;
use App\FotoProfesional;
use App\BoosterCobrado;
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
    private $categorias;
    private $idiomas;
    private $edad;
    private $estatura;
    private $peso;

    public function __construct() 
    {
        $this->fotos_profesional_path = public_path('fotos_profesionales');
    }

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


    public function listarProfesionales(Request $request)
    {
       
        
       if(isset($request->categoria) && $request->categoria != 'all') { //CONSULTA PARA LAS CATEGORIAS

            $categoria = Categorias::select('id')->where('nombre_categoria', '=', $request->categoria)->firstOrFail();       
            
            //CONSULTA DE LOS REGISTRADOS
            $usuarios = CategoriasProfesional::join('usuarios','usuarios.id','=','categorias_profesional.idprofesional')
                                ->join('foto_profesional','categorias_profesional.idprofesional','=','foto_profesional.idusuario')
                                ->select('usuarios.apodo','usuarios.fecha_nacimiento','foto_profesional.url_foto','usuarios.created_at')
                                ->where('categorias_profesional.idcategoria', '=', $categoria->id)
                                ->where('usuarios.idrol', '=', 4 )
                                ->where('foto_profesional.orden', '=', 0)
                                ->orderBy('usuarios.created_at','desc')
                                ->paginate(32);                                          

            $usuarios->makeHidden(['es_marcado']);


            //CONSULTA DE LOS BOOSTER
            $boosters = BoosterCobrado::join('usuarios','usuarios.id','=','booster_cobrados_profesional.idprofesional')
                                ->join('foto_profesional','booster_cobrados_profesional.idprofesional','=','foto_profesional.idusuario')
                                ->select('usuarios.apodo','usuarios.fecha_nacimiento','foto_profesional.url_foto','booster_cobrados_profesional.created_at')
                                ->where('booster_cobrados_profesional.idcategoria', '=', $categoria->id)
                                ->where('usuarios.idrol', '=', 4 )
                                ->where('foto_profesional.orden', '=', 0)
                                ->orderBy('booster_cobrados_profesional.created_at','desc')
                                ->get();     

            $boosters->makeHidden(['fecha','hora']);


            //UNION DE CONSULTAS
            $todos = $usuarios->concat($boosters);

            $ordenados = $todos->values()->sortByDesc('created_at');

            $ordenados = $ordenados->values()->all(); 


       }else{ //CONSULTA PARA EL HOME PAGE

            //FILTROS DE BUSQUEDA
            $this->orientacion = $request->orientacion;
            $this->nacionalidad = $request->nacionalidad;
            $this->seguridad = $request->seguridad;
            $this->nombre = $request->nombre;
            $this->apodo = $request->apodo;
            $this->ciudad = $request->ciudad;
            $this->pecho = $request->pecho;
            $this->distrito = $request->distrito;
            $this->pene = $request->pene;
            $this->corte = $request->corte;

            //FILTROS DE BUSQUEDA ARRAY
            $this->categorias = $request->categorias;
            $this->idiomas = $request->idiomas;
            $this->edad = $request->edad;
            $this->estatura = $request->estatura;
            $this->peso = $request->peso;

            //$request->categorias

            //CONSULTA DE LOS BOOSTER
            $boosters = BoosterCobrado::join('usuarios','usuarios.id','=','booster_cobrados_profesional.idprofesional')
                                ->join('foto_profesional','booster_cobrados_profesional.idprofesional','=','foto_profesional.idusuario')
                                ->join('categorias','booster_cobrados_profesional.idcategoria','=','categorias.id')
                                ->select('categorias.nombre_categoria','usuarios.apodo','usuarios.fecha_nacimiento','foto_profesional.url_foto','booster_cobrados_profesional.created_at')
                                ->where('usuarios.idrol', '=', 4 )
                                ->where('foto_profesional.orden', '=', 0)
                                ->when((isset($this->categorias) && count($this->categorias) > 0),
                                    function($q){
                                        return $q->whereIn('booster_cobrados_profesional.idcategoria', $this->categorias);
                                    }
                                )
                                ->when((isset($this->edad) && count($this->edad) > 0),
                                    function($q){
                                        
                                        $desde = date('Y', strtotime('-'.$this->edad[1].'years'));
                                        $hasta = date('Y', strtotime('-'.$this->edad[0].'years'));

                                        return $q->whereYear('usuarios.fecha_nacimiento','>=',$desde)
                                                  ->whereYear('usuarios.fecha_nacimiento','<=',$hasta);

                                    }
                                )
                                ->orderBy('booster_cobrados_profesional.created_at','desc');


            //CONSULTA DE LOS REGISTRADOS
            $usuarios = CategoriasProfesional::join('usuarios','usuarios.id','=','categorias_profesional.idprofesional')
                                ->join('foto_profesional','categorias_profesional.idprofesional','=','foto_profesional.idusuario')
                                ->join('categorias','categorias.id','=','categorias_profesional.idcategoria')
                                ->select('categorias.nombre_categoria','usuarios.apodo','usuarios.fecha_nacimiento','foto_profesional.url_foto','usuarios.created_at')
                                ->where('usuarios.idrol', '=', 4 )
                                ->where('foto_profesional.orden', '=', 0)
                                ->when((isset($this->categorias) && count($this->categorias) > 0),
                                    function($q){
                                        return $q->whereIn('categorias_profesional.idcategoria', $this->categorias);
                                    }
                                )
                                ->when((isset($this->edad) && count($this->edad) > 0),
                                    function($q){


                                        $desde = date('Y', strtotime('-'.$this->edad[1].'years'));
                                        $hasta = date('Y', strtotime('-'.$this->edad[0].'years'));


                                        return $q->whereYear('usuarios.fecha_nacimiento','>=',$desde)
                                                  ->whereYear('usuarios.fecha_nacimiento','<=',$hasta);

                                    }
                                )
                                ->orderBy('usuarios.created_at','desc')
                                ->union($boosters)
                                ->paginate(32);                                          

            $usuarios->makeHidden(['es_marcado']);

            $ordenados = $usuarios->values()->sortByDesc('created_at');

            $ordenados = $ordenados->values()->all();

       }       

        return [
            'pagination' => [
                'total'        => $usuarios->total(),
                'current_page' => $usuarios->currentPage(),
                'per_page'     => $usuarios->perPage(),
                'last_page'    => $usuarios->lastPage(),
                'from'         => $usuarios->firstItem(),
                'to'           => $usuarios->lastItem(),
            ],
            'arUsuarios' => $ordenados,
            'path' => $this->fotos_profesional_path
        ];

    }


}
