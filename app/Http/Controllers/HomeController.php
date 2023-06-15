<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\RespuestasEncuestas;
use App\Models\Carrera;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $encuestas = Encuesta::where('state',1)->get();

        return view('index.index', compact('encuestas'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        if(\Auth::user()) 
        {
            return view('admin.encuestas.index');
        }

        return redirect()->route('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function testSimulator()
    {
        $encuestas = Encuesta::where('state',1)->get();

        return view('index.simulator', compact('encuestas'));
    }

    public function makeCV()
    {
        return view('index.makeCV');
    }

    public function makeBlindCV()
    {
        return view('index.makeBlindCV');
    }

    public function makeTest($slug)
    {

        $encuesta = Encuesta::where('state',1)->where('slug',$slug)->get();

        $datos_requeridos = Encuesta::find($encuesta[0]->id)->datos_requeridos;
        $preguntas = Encuesta::find($encuesta[0]->id)->preguntas;
        $tips = Encuesta::find($encuesta[0]->id)->tips;

        foreach($preguntas as $p){
            $p->options = Pregunta::find($p->id)->opciones;
        }

        $carreras = Carrera::all();

        //return compact('encuesta', 'datos_requeridos', 'preguntas', 'tips');
        return view('index.makeTest',compact('encuesta', 'datos_requeridos', 'preguntas', 'tips', 'carreras'));
    }

    public function storeTest($slug, Request $request)
    {
        $encuesta = Encuesta::where('state',1)->where('slug',$slug)->get();

        try{
            $respuesta =  new RespuestasEncuestas();
            $respuesta->name            = $request->data['name'];
            $respuesta->lastname        = $request->data['lastname'];
            $respuesta->dni             = $request->data['dni'];
            $respuesta->email           = $request->data['email'];
            $respuesta->phone           = $request->data['phone'];
            $respuesta->institution     = $request->data['institution'];
            $respuesta->university      = $request->data['university'];
            $respuesta->career          = $request->data['career'];
            $respuesta->student         = $request->data['student'];
            $respuesta->result          = $request->data['result'];
            $respuesta->encuesta_id     = $encuesta[0]->id;

            $respuesta->save();
        }
        catch(\Exception $e){
           return $e->getMessage();
        }
        return response()->json([$encuesta], 201);
    }
}
