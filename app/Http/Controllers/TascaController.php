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
        // return $tasques;

        // TO VIEW
        return view('tasca.tascaIndex', ['tasques' => $tasques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // TO VIEW
        return view('tasca.tascaCreate', ['projecteId' => $id]);
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
        // return $tasca;

        // TO VIEW
        return redirect()->route('projectes.show', ['projecte' => $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $tascaID)
    {
        $tasca = Tasca::findOrFail($tascaID);

        // TO POSTMAN
        // return $tasca;

        // TO VIEW
        return view('tasca.tascaShow', ['tasca' => $tasca]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasca = Tasca::findOrFail($tascaID);

        // TO VIEW
        return view('tasca.tascaEdit', ['tasca' => $tasca]);
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
        $tascaOld = $tasca; 
        $input = $request->all();
        $tasca->fill($input)->save();

        // TO POSTMAN
        // return $tasca;

        // TO VIEW
        return view('tasca.tascaUpdate', ['tasca' => $tasca, 'tascaOld' => $tascaOld]);
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
        // return true;

        // TO VIEW
        // return view('tasca.tascaDestroy', ['eliminado' => true]);
    }
}
