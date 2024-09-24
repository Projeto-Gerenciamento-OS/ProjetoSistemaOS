<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadGeralController extends Controller
{
    public function index(Request $request )
    {
        return view('cadGeral.index');    
    }
}
