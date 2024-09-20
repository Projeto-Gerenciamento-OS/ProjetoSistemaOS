<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os1;
use App\Models\Os2;
use App\Models\Os3;
use App\Models\Os4;
use App\Http\Requests\Os1Request;
use App\Http\Requests\Os2Request;
use App\Http\Requests\Os3Request;
use App\Http\Requests\Os4Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os1Controller extends Controller
{

    public function index(Request $request) {
        $os1= Os1::when($request->has('id_status'), function ($Query) use ($request){
            $Query->where('id_status', 'like', '%' . $request->id_status . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        return view('os.index', ['os1', 'os1'=> $os1,'id_status'=>$request->id_status]);
    }
    
    
    public function create() {
        return view('os1.create', ['menu' => 'os1']);
    }

    public function store(Os1Request $request){
        $request->validated();

        DB::beginTransaction();

        try {

            $os1 = Os1::create([
                'id_status' => $request->id_status,
                'id_users' => $request->id_users,
                'id_emp2' => $request->id_emp2,
                'datacad' =>$request-> datacad,
                'dhi' => $request->dhi,
                'dhf' => $request->dhf,
                'obs' => $request->obs,
                'vtotal' =>$request-> vtotal,
                'ctotal' => $request->ctotal,
                'cindireto' => $request->cindireto,
                'vresultado' => $request->vresultado,
            ]);

            Log::info('Os1 cadastrado.', ['id' => $os1->id, $os1]);

            DB::commit();

            return redirect()->route('os1.create', ['os1' => $os1->id])->with('success', 'Os1 cadastrado com sucesso!');
        } catch (Exception $e) {

            Log::info('Os1 não cadastrado.', ['error' => $e->getMessage()]);

            DB::rollBack();

            return back()->withInput()->with('error', 'Os1 não cadastrado!');
        }
    }
    
    public function view(Os1 $os1){
        $os1->load(['os2', 'os3', 'os4']);
        return view('os1.edit', compact('os1'));
    }

    public function edit(Os1 $os1){
        $os1->load(['os2', 'os3']);
        return view('os1.edit', compact('os1'));
    }

    public function update(Os1Request $request, Os1 $os1, Os2 $os2, Os3 $os3, Os4 $os4){
        $request->validated();
    
        DB::beginTransaction();
    
        try {
            $os1->update([
                'id_status' => $request->id_status,
                'id_users' => $request->id_users,
                'id_emp2' => $request->id_emp2,
                'datacad' =>$request-> datacad,
                'dhi' => $request->dhi,
                'dhf' => $request->dhf,
                'obs' => $request->obs,
                'vtotal' =>$request-> vtotal,
                'ctotal' => $request->ctotal,
                'cindireto' => $request->cindireto,
                'vresultado' => $request->vresultado,
            ]);
    
            if (is_array($request->os2) || is_object($request->os2)) {
                foreach ($request->os2 as $id => $data) {
                    $os2 = Os2::find($id);
                    if ($os2) { 
                        $os2->update([
                            'qtde' => $request->qtde,
                            'vunit' => $request->vunit,
                            'vtotal' => $request->vtotal,
                            'cunit' => $request->cunit,
                            'ctotal' => $request->ctotal,
                            'id_emp2' => $request->id_emp2,
                            'id_os1' => $request->id_os1,
                            'id_servico' => $request->id_servico,
                            'id_colaborador' => $request->id_colaborador,
                        ]);
                    }
                }
            }
    
            if (is_array($request->os3) || is_object($request->os3)) {
                foreach ($request->os3 as $id => $data) {
                    $os3 = Os3::find($id);
                    if ($os3) {
                        $os3->update([
                            'qtde' => $request->qtde,
                            'vunit' => $request->vunit,
                            'vtotal' => $request->vtotal,
                            'cunit' => $request->cunit,
                            'ctotal' => $request->ctotal,
                            'id_emp2' => $request->id_emp2,
                            'id_os1' => $request->id_os1,
                            'id_materiais' => $request->id_materiais,
                        ]);
                    }
                }
            }
    
            if (is_array($request->os4) || is_object($request->os4)) {
                foreach ($request->os4 as $id => $data) {
                    $os4 = Os4::find($id);
                    if ($os4) {
                        $os4->update([
                            'descricao' => $request->descricao,
                            'percentual' => $request->percentual,
                            'valor' => $request->valor,
                            'ativo' => $request->ativo,
                            'id_emp2' => $request->id_emp2,
                        ]);
                    }
                }
            }

    
            Log::info('Os1 editado.', ['id' => $os1->id]);

            DB::commit();
    
            return redirect()->route('os.index', ['os1' => $os1->id])->with('success', 'Os1 editado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('os1 não cadastrado.', ['error' => $e->getMessage()]);
            return back()->withInput()->with('error', 'Erro ao editar Os1!');
        }
    }

    public function delete(Os1 $os1){
        try {
        
            $os1->delete();

            Log::info('Os1 excluído.', ['id' => $os1->id]);

        
            return redirect()->route('os.index')->with('success', 'Os1 excluído com sucesso!');

        } catch (Exception $e) {

            Log::info('Os1 não excluído.', ['error' => $e->getMessage()]);

            return redirect()->route('os.index')->with('error', 'Os1 não excluído!');
        }
    }
}
