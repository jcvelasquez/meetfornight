<?php

namespace App\Http\Controllers;

use App\PerfilUsuario;
use Illuminate\Http\Request;

class PerfilUsuarioController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }


    //public function index(Request $request)
    public function index()
    {

        //$perfilesUsuarios = PerfilUsuario::all();
        //return $perfilesUsuarios;

        return view('forms-perfil-usuario.perfil-usuario');

    }

    //public function index(Request $request)
    public function show(Request $request)
    {

        return PerfilUsuario::findOrFail($request->id);

        //$usuario = PerfilUsuario::all();
        //return view('forms-perfil-usuario.perfil-usuario', compact('books'));
        //$request->user()->authorizeRoles(['usuario', 'profesional', 'empresa']);
        //return view('forms-perfil-usuario.perfil-usuario', compact('books'));
       // return view('forms-perfil-usuario.perfil-usuario', compact('usuario'));

       //$usuario = PerfilUsuario::all();
      // return $usuario;

       //return PerfilUsuario::findOrFail($id);

    }


    public function create()
    {
        //
        return view('create');
    }


    public function store(Request $request)
    {
        
        /*

         $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = new PerfilUsuario([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);
        $contact->save();

        */

        $validatedData = $request->validate([
            'nombre'=>'required',
            'apodo'=>'required',
            'email'=>'required',
            'clave'=>'required',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'nacionalidad'=>'required',
            'idioma'=>'required',
            'idrol'=>'required',
            'estado'=>'required'
        ]);

        $perfilUsuario = PerfilUsuario::create($validatedData);

        return redirect('/crear-cuenta-usuario')->with('success', 'Contact saved!');


    }


    public function edit($id)
    {
        //
        $book = Book::findOrFail($id);

        return view('edit', compact('book'));
    }


    public function update(Request $request)
    {
        //

        /*
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->first_name =  $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->job_title = $request->get('job_title');
        $contact->city = $request->get('city');
        $contact->country = $request->get('country');
        $contact->save();

         $validatedData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no' => 'required|alpha_num',
            'book_price' => 'required|numeric',
        ]);

        */

        $validatedData = $request->validate([
            'nombre'=>'required',
            'apodo'=>'required',
            'email'=>'required',
            'clave'=>'required',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'nacionalidad'=>'required',
            'idioma'=>'required',
            'celular'=>'required',
            'estado'=>'required'
        ]);  

        return PerfilUsuario::whereId($request->id)->update($validatedData);

        //return redirect('/perfil-usuario')->with('success', 'Book is successfully updated');

    }


    public function destroy($id)
    {
        //

        /*
        $contact = Contact::find($id);
        $contact->delete();

        */
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book is successfully deleted');

    }
    
}
