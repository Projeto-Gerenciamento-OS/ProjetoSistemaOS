<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index(Request $request )
    {
        return view('empresas.index');    
    }
}
