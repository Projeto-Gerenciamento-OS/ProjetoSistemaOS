<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

use App\Models\Os1;
use App\Models\Os2;
use App\Models\Os3;
use App\Models\Os4;

class OSsController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os1 = Os1::when($request->has('id_status'), function ($query) use ($request) {
            $query->where('id_status', 'like', '%' . $request->id_status . '%');
        })
        ->orderBy('created_at')
        ->paginate(5);
        $os1->load(['os2', 'os3']);
        
        $os2 = Os2::when($request->has('id_servico'), function ($query) use ($request) {
            $query->where('id_servico', 'like', '%' . $request->id_servico . '%');
        })
        ->orderBy('created_at')
        ->paginate(5);

        $os3 = Os3::when($request->has('id_os1_os3'), function ($query) use ($request) {
            $query->where('id_os1_os3', 'like', '%' . $request->id_os1_os3 . '%');
        })
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        $os4 = Os4::when($request->has('id_emp1_os4'), function ($query) use ($request) {
            $query->where('id_emp1_os4', 'like', '%' . $request->id_emp1_os4 . '%');
        })
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os.index', ([
            'os1' => $os1,
            'id_status' => $request->id_status,
            
            'os2' => $os2,
            'id_servico' => $request->id_servico,

            'os3' => $os3,
            'id_os1_os3' => $request->id_os1_os3,
            
            'os4' => $os4,
            'id_emp1_os4' => $request->id_emp1_os4
        ]));
    }
}