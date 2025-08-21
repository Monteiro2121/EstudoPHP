<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserTeste;

class FormularioController extends Controller
{
    public function index()
    {
        // dd('Cheguei no método index');

        return view('formulario'); 
    }
 
    public function store(Request $request)
    {
        // dd($request);

        UserTeste::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'password' => bcrypt($request->password) 
        ]);

        // dd('Está salvando');
        return redirect()->route('login.index')->with('success', 'Usuario cadastrado');
    }

}
