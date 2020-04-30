<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
    public function index(){
        return view('comentario.index');
    }


    public function store( Request $data){

        $comentario = new Comentario;
        $comentario->is_registered_user = $data->input('is_registered_user');
        $comentario->comentario = $data->input('comentario');
        $comentario->email = $data->input('email');
        $comentario->nombre_completo = $data->input('nombre_completo');
        $comentario->save(); 
        return redirect('/');     
    }
}
