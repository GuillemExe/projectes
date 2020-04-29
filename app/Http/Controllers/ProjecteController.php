<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projecte;
use App\Tasca;

class ProjecteController extends Controller
{
    // 200 OK (Accepted)
    // 201 CREATE (Accepted)
    // 202 ACCEPTED (Accepted)
    // 203 NON-AUTHORITATIVE (Accepted)
    // 204 NO CONTENT (Accepted)

    public function tokenReturn()
    {
        return csrf_token();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectes = Projecte::all();

        // TO POSTMAN
        return $projectes;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TO VIEW
        // return view('coche.cocheCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projecte = Projecte::create($request->all());

        // TO POSTMAN
        return $projecte;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projecte = Projecte::find($id);

        // TO POSTMAN
        return $projecte;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projecte = Projecte::findOrFail($id);
        $input = $request->all();
        $projecte->fill($input)->save();
        
        // TO POSTMAN
        return $projecte;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasca = Tasca::where('projecte_id', 'LIKE', $id)->get();
        if($tasca == "[]") {
            // TO POSTMAN
            return "Se puede eliminar";
            // TO VIEW
            // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
        } else {
            // TO POSTMAN
            return "No se puede eliminar";
            // TO VIEW
            // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
        }
    }
}
