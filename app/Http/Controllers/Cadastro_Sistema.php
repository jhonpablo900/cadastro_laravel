<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_sistema;
class Cadastro_Sistema extends Controller
{
    public function pagina_inicial(){
        return view('formulario');
    }
    public function cadastro_inserido(Request $request){
        $add_db = $request->only('nome','usuario');
        model_sistema::create($add_db);

        print "cadastrado";
    }
}
