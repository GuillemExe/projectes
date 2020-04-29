<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projecte;
use App\Tasca;

class TascaController extends Controller
{
    // 200 OK (Accepted)
    // 201 CREATE (Accepted)
    // 202 ACCEPTED (Accepted)
    // 203 NON-AUTHORITATIVE (Accepted)
    // 204 NO CONTENT (Accepted)

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tasques = Tasca::where('projecte_id', 'LIKE', $id)->get();

        // TO POSTMAN
        return $tasques;

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
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $request->request->add(['projecte_id' => $id]);
        $tasca = Tasca::create($request->all());
        
        // TO POSTMAN
        return $tasca;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $tascaID)
    {
        $tasca = Tasca::find($tascaID);

        // TO POSTMAN
        return $tasca;

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
    public function update($id, Request $request, $tascaID)
    {
        $tasca = Tasca::findOrFail($tascaID);
        $input = $request->all();
        $tasca->fill($input)->save();

        // TO POSTMAN
        return $tasca;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $tascaID)
    {
        Tasca::find($tascaID)->delete();

        // TO POSTMAN
        return true;

        // TO VIEW
        // return view('carpeta.nombreDelDocumento', ['identificadorEnVista' => $variable]);
    }
}
