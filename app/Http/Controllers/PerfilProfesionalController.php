<?php

namespace App\Http\Controllers;

use App\PerfilProfesional;
use Illuminate\Http\Request;

class PerfilProfesionalController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        
        return view('forms-perfil-profesional.perfil-profesional');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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

        $perfilUsuario = PerfilUsuario::create($validatedData);

        return redirect('/crear-cuenta-usuario')->with('success', 'Contact saved!');


    }


    public function show(Request $request)
    {
        //
        return PerfilProfesional::findOrFail($request->id);
    }


    public function edit($id)
    {
        //
        $book = Book::findOrFail($id);

        return view('edit', compact('book'));
    }


    public function update(Request $request, $id)
    {


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
