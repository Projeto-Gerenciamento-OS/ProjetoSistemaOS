<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

use App\Http\Controllers\Os1Controller;
use App\Models\Os1;

use App\Http\Controllers\Os2Controller;
use App\Models\Os2;

use App\Http\Controllers\Os3Controller;
use App\Models\Os3;

use App\Http\Controllers\Os4Controller;
use App\Models\Os4;


class OSsController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os1= Os1::when($request->has('id_status'), function ($Query) use ($request){
            $Query->where('id_status', 'like', '%' . $request->id_status . '%');
        })
        ->orderBy('created_at')
        ->paginate(5);

        $os2= Os2::when($request->has('id_servico'), function ($Query) use ($request){
            $Query->where('id_servico', 'like', '%' . $request->id_servico . '%');
        })
        ->orderBy('created_at')
        ->paginate(5);

        $os3= Os3::when($request->has('id_os1_os3'), function ($Query) use ($request){
            $Query->where('id_os1_os3', 'like', '%' . $request->id_os1_os3 . '%');
        })
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        $os4= Os4::when($request->has('id_emp1_os4'), function ($Query) use ($request){
            $Query->where('id_emp1_os4', 'like', '%' . $request->id_emp1_os4 . '%');
        })
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os.index', [
            'os1'=> $os1,
            'id_status'=>$request->id_status,
            
            'os2'=> $os2,
            'id_servico'=>$request->id_servico,

            'os3'=> $os3,
            'id_os1_os3'=>$request->id_os1_os3,
            
            'os4'=> $os4,
            'id_emp1_os4'=>$request->id_emp1_os4
        ]);
    }
}
