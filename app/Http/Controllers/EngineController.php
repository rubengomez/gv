<?php

namespace App\Http\Controllers;

use App\Engine;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $engine = Engine::all();
        if ($request->ajax()) {
            return response()->json($engine,200);
        }else{
             return view('setting.engines.index', compact('engine'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $engine = new Engine();
            $engine->name = $request->input('name');
            $engine->save();

            return response()->json([
                "message" => "Motor Creado Correctamente.",
                "Engine" =>$engine
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $engine = Engine::find($id);
        $engine->name = $request->input('name');
        $engine->save();

        return response()->json([
            "message" => "Motor Actualizado Correctamente.",
            "Engine" =>$engine
        ],200);//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $engine = Engine ::find($id);
        $engine->delete();
    }
}
