<?php

namespace App\Http\Controllers\Admin\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\Opcion;
use App\Models\Tip;
use Illuminate\Support\Str;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::orderBy('id', 'DESC')->get();

        return $encuestas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encuesta = new Encuesta();
        $encuesta->name = $request->name;
        $encuesta->description = $request->description;
        $encuesta->state = $request->state;
        $encuesta->slug = Str::slug($request->name);

        $encuesta->respuesta_1 = $request->respuesta_1;
        $encuesta->respuesta_2 = $request->respuesta_2;
        $encuesta->respuesta_3 = $request->respuesta_3;
        $encuesta->respuesta_4 = $request->respuesta_4;

        if(!$encuesta->save()){
            return 'error';
        }

        $preguntas              = $request->preguntas;
        if($preguntas){
            foreach ($preguntas as $p) {
                $pregunta = new Pregunta;
                $pregunta->pregunta = $p['pregunta'];
                $pregunta->encuesta_id = $encuesta->id;

                if(!$pregunta->save()){
                    return 'error';
                }

                $opciones   = $p['opciones'];
                if($opciones){
                    foreach ($opciones as $o) {
                        $opcion = new Opcion;
                        $opcion->pregunta_id = $pregunta->id;
                        $opcion->opcion = $o['opcion'];
                        $opcion->valor = $o['valor'];

                        if(!$opcion->save()){
                            return 'error';
                        }
                    }
                }
            }
        }

        $tips              = $request->tips;
        if($tips){
            foreach ($tips as $t) {
                $tip = new Tip;
                $tip->tip = $t['tip'];
                $tip->encuesta_id = $encuesta->id;

                if(!$tip->save()){
                    return 'error';
                }
            }
        }
        return response()->json(['OK'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuesta = Encuesta::find($id);
        $preguntas = Encuesta::find($id)->preguntas;
        $tips = Encuesta::find($id)->tips;

        foreach($preguntas as $p){
            $p->options = Pregunta::find($p->id)->opciones;
        }

        return compact('encuesta','preguntas', 'tips');
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
        $encuesta               = Encuesta::find($id);
        $encuesta->name         = $request->name;
        $encuesta->description  = $request->description;
        $encuesta->state        = $request->state;

        $encuesta->respuesta_1 = $request->respuesta_1;
        $encuesta->respuesta_2 = $request->respuesta_2;
        $encuesta->respuesta_3 = $request->respuesta_3;
        $encuesta->respuesta_4 = $request->respuesta_4;

        if(!$encuesta->save()){
            return 'error';
        }

        $preguntas_bd           = Encuesta::find($id)->preguntas;
        if($preguntas_bd){
            foreach ($preguntas_bd as $p) {
                $p->delete();
            }
        }

        $preguntas              = $request->preguntas;
        if($preguntas){
            foreach ($preguntas as $p) {
                $pregunta = new Pregunta;
                $pregunta->pregunta = $p['pregunta'];
                $pregunta->encuesta_id = $id;

                if(!$pregunta->save()){
                    return 'error';
                }

                $opciones   = $p['opciones'];
                if($opciones){
                    foreach ($opciones as $o) {
                        $opcion = new Opcion;
                        $opcion->pregunta_id = $pregunta->id;
                        $opcion->opcion = $o['opcion'];
                        $opcion->valor = $o['valor'];

                        if(!$opcion->save()){
                            return 'error';
                        }
                    }
                }
            }
        }

        $tips_bd           = Encuesta::find($id)->tips;
        if($tips_bd){
            foreach ($tips_bd as $tip) {
                $tip->delete();
            }
        }
        $tips              = $request->tips;
        if($tips){
            foreach ($tips as $t) {
                $tip = new Tip;
                $tip->tip = $t['tip'];
                $tip->encuesta_id = $id;

                if(!$tip->save()){
                    return 'error';
                }
            }
        }

        return response()->json([$encuesta ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encuesta = Encuesta::find($id);
        if(!$encuesta->delete()){
            return 'error desde delete';
        }
    }
}
