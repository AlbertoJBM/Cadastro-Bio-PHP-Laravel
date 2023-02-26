<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{

    public function welcome(){
        return view('welcome');
    }
    public function index(){
        //return "bem-vido ao index do cadastro";

        // asi se sacan todos los registros de golpe
         //$cadastros = cadastro::all();
        // asi se acomodan de manera paginado
        $cadastros = cadastro::orderBy('id','desc')->paginate();

        //verificar contenido
        //return $cadastros;

        return view('indexViews', compact('cadastros'));
          //  return view('cadastros.index', compact('cadastros'));

    }
    public function create(){
       // return "bem-vido ao Cadatratrator";
        return view('CadastroViews');

    }

//para conectar el html

public function store(Request $request){
            //return $request->all();
            $cadastro = new cadastro();

    $cadastro->cpf= $request->cpf;//->primary();//intero
            //---------------------------
    //public $foto="url ramdom";//modificar solo ejemplo
    $cadastro->foto= $request->foto;       //------------------------
    //
    $cadastro->nome= $request->nome;
    //
    $cadastro->idade= $request->idade;
    //
    $cadastro->profesao= $request->profesao;
    //------
    $cadastro->resumo= $request->resumo;


    //SALVARLO
        $cadastro->save();
        //no funciona el return
        // ya funciona fuck yea!!
            return redirect()->route('cadastros.index'/*,$cadastro*/);
        //revisar

//revisar qeu guarda
    //return $cadastro;
}
//





    public function show(cadastro $cadastro){


        return view('show', compact('cadastro'));
//return $cadastro;
    }

    public function edit(cadastro $cadastro){
      return View('cadastroEdit', compact('cadastro'));
    }
    public function update(Request $request,cadastro $cadastro){

    $cadastro->cpf= $request->cpf;//->primary();//intero
    //---------------------------
    //public $foto="url ramdom";//modificar solo ejemplo
    $cadastro->foto= $request->foto;       //------------------------
    //
    $cadastro->nome= $request->nome;
    //
    $cadastro->idade= $request->idade;
    //
    $cadastro->profesao= $request->profesao;
    //------
    $cadastro->resumo= $request->resumo;


//SALVARLO
$cadastro->save();
return redirect()->route('cadastros.index');
    }

    public function destroy(cadastro $cadastro){
        //@//se que falta algo
        $cadastro->delete();
       return View('cadastro.idex', compact('cadastro'));
      }
}
