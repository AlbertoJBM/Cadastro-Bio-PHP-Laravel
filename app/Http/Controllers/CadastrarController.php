<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function index(){
        //return "bem-vido ao index do cadastro";
        return view('indexViews');
    }
    public function create(){
       // return "bem-vido ao Cadatratrator";
        return view('CadastroViews');
    }
    public function show(){
        return "bem-vido ao show item";
    }
}
