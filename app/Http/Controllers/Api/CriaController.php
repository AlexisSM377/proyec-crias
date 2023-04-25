<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClasificacionCarne;
use App\Models\Cria;
use Illuminate\Http\Request;

class CriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta de todas las crias del modelo crias con sus relaciones
        $crias = Cria::with(['clasificacionCarne','proveedor','corral','dieta'])->get();
        //responder la consulta de las crias en un json
        return response()->json([
            'crias' => $crias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cria = Cria::create($request->all());
        return response()->json([
            'mensaje' => 'La cria se ha registrado con exito',
            'cria' => $cria
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cria = Cria::with(['clasificacionCarne','proveedor','corral','dieta'])->find($id);
        return response()->json([
            'cria' => $cria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //$cria = Cria::find($id);
        //$cria->update($request->all());

        return response()->json([
                            'mensaje' => $request->all()
                        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cria::find($id)->delete();
        return response()->json([
            'mensaje' => 'La cria se ha borrado con exito'
        ]);
    }
}

