<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
use App\Asignatura;
use App\User;
use Illuminate\Support\Facades\Auth;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
       // $this->middleware('auth');
       
    }

    public function index()
    {  
        $tareas = Tarea::all();
        $asignaturas = Asignatura::all();
        $profesores = User::all();
        return view('tarea.index', compact(['tareas', 'asignaturas','profesores']));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()){
            if(Auth::user()->is_profesor){
                return view('tarea.create');
            }
            else{
               return view('forbidden');
            }
         }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tarea $tarea)
    {  
        $tarea->archivo = $request->input('archivo');
        $tarea->curso = $request->input('curso');
        $tarea->asignatura_id = $request->input('asignatura_id');
        $tarea->user_id = $request->input('user_id');
        $tarea->save();
        return redirect('/tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        $asignaturas = Asignatura::all();
        return view('tarea.show', compact(['tarea', 'asignaturas']));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return view('tarea.delete');
    }
}
