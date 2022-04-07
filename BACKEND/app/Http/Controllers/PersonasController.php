<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use App\Models\Distritos;
use App\Models\Personas;
use Exception;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        try{
            $personas = Personas::with('relCiudades')->get();
            $distritos = Personas::with('relDistritos')->get();
            $ciudades = Ciudades::all();
            return view('personas', compact('personas', 'distritos', 'ciudades'));
        }catch(Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try{
            Personas::create(['nombre' => $request->nombre, 'email' => $request->email, 'ciudad' => $request->ciudad, 'distrito' => $request->distrito]);
        }catch(Exception $ex ){
            echo $ex->getMessage();
        }
    }

    public function show(Personas $personas)
    {
        //
    }

    public function edit(Personas $personas)
    {
        //
    }

    public function update(Request $request, Personas $personas)
    {
        //
    }

    public function destroy(Personas $personas)
    {
        //
    }
}
