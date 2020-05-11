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
        // return $projectes;

        // TO VIEW
        return view('projecte.projecteIndex', ['projectes' => $projectes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TO VIEW
        return view('projecte.projecteCreate');
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
        // return $projecte;

        // TO VIEW
        // return view('projecte.projecteStore', ['projecte' => $projecte]);
        return view('projecte.projecteIndex', ['projectes' => Projecte::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projecte = Projecte::findOrFail($id);
        // Search for tasks ("tascas") by id.
        $tascas = Tasca::where('projecte_id', 'LIKE', $id)->get();

        // TO POSTMAN
        // return $projecte;

        // TO VIEW
        return view('projecte.projecteShow', ['projecte' => $projecte, 'tascas' => $tascas, ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projecte = Projecte::findOrFail($id);

        // TO VIEW
        return view('projecte.projecteEdit', ['projecte' => $projecte]);
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
        $projecteOld = $projecte; 
        $input = $request->all();
        $projecte->fill($input)->save();
        
        // TO POSTMAN
        // return $projecte;

        // TO VIEW
        return view('projecte.projecteUpdate', ['projecte' => $projecte, 'projecteOld' => $projecteOld]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Invalid function 
        // $tasca = Tasca::where('projecte_id', 'LIKE', $id)->get();

        // Using the model function
        $projecte = Projecte::find($id);
        if(isset($projecte->tasques) && "[]" == $projecte->tasques) {
            $projecte->delete();
            return redirect()->route('projectes.index');
        } else {
            return redirect()->route('projectes.index');
        }
    }
}
