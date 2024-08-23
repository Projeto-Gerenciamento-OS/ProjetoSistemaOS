<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
 

     // timeline
     public function index()
     {
         // Carregar a VIEW
         return view('timeline.index', ['menu' => 'timeline']);
     }
}
