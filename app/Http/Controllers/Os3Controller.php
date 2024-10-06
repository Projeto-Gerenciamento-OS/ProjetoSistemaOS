<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os3;
use App\Http\Requests\Os3Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os3Controller extends Controller{


    public function index(Request $request){
    
        $os3= Os3::when($request->has('id_os1_os3'), function ($Query) use ($request){
            $Query->where('id_os1_os3', 'like', '%' . $request->id_os1_os3 . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();
        return view('os.index', ['os3', 'os3'=> $os3,'id_os1_os3'=>$request->id_os1_os3]);
    }

    public function create(){
    
        return view('os1.os3.create', ['menu' => 'os3']);
    }
    public function store(Os3Request $request)
    {
        $request->validated();
        DB::beginTransaction();

        try {
            $os3 = Os3::create([
                'qtde' => $request->qtde,
                'vunit' => $request->vunit,
                'vtotal' => $request->vtotal,
                'cunit' => $request->cunit,
                'ctotal' => $request->ctotal,
                'id_emp2' => $request->id_emp2,
                'id_os1' => $request->id_os1,
                'id_materiais' => $request->id_materiais,
            ]);
            Log::info('Os3 cadastrado.', ['id' => $os3->id, $os3]);
            DB::commit();
            return redirect()->route('os3.create', $os3)->with('success', 'Os3 criada com sucesso!');
            // return redirect()->route('os3.create', ['os3' => $os3->id])->with('success', 'Os3 cadastrado com sucesso!');
        } catch (Exception $e) {
            Log::info('Os3 não cadastrado.', ['error' => $e->getMessage()]);
            DB::rollBack();
            return back()->withInput()->with('error', 'Os3 não cadastrado!');
        }
    }
    
    public function view(Os3 $os3)
    {
        return view( 'os1.os3.view', ['menu'=>'os3', 'os3' => $os3]);
    }

    public function edit(Os3 $os3)
    {
        return view('os1.os3.edit', ['menu' => 'os3', 'os3' => $os3]);
    }
    public function update(Os3Request $request, Os3  $os3)
    {
        $request->validated();
        DB::beginTransaction();

        try {
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
            Log::info('Os3 editado.', ['id' => $os3->id]);
            DB::commit();
            return redirect()->route('os1.os3.view', ['os3' => $os3->id])->with('success', 'Os3 editado com sucesso!');
            
        } catch (Exception $e) {
            Log::info('Os3 não editado.', ['error' => $e->getMessage()]);
            DB::rollBack();
            return back()->withInput()->with('error', 'Os3 não editado!');
        }
    }

    public function delete(Os3 $os3){
        try {
        
            $os3->delete();
            Log::info('Os3 excluído.', ['id' => $os3->id]);

        
            return redirect()->route('os.index')->with('success', 'Os3 excluído com sucesso!');

        } catch (Exception $e) {
            Log::info('Os3 não excluído.', ['error' => $e->getMessage()]);
            return redirect()->route('os.index')->with('error', 'Os2 não excluído!');
        }
    }
}
