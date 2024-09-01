<?php

namespace App\Http\Controllers;

use App\Models\CustoGeral;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\CustosRequest;

class CustosController extends Controller
{

    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $custos= CustoGeral::when($request->has('id_emp2'), function ($Query) use ($request){
            $Query->where('id_emp2', 'like', '%' . $request->id_emp2 . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('custos.index', ['custos', 'custos'=> $custos,'id_emp2'=>$request->id_emp2]);
    }

     public function create() {
        return view('custos.create', ['menu' => 'custos']);
     }

     public function store(CustosRequest $request) {

        $request->validated();

        DB::beginTransaction();

        try {

          
            $custos = CustoGeral::create([
                'id_emp1' => $request->id_emp1,
                'id_emp2' => $request->id_emp2,
                'percentual' => $request->percentual,
                'descricao' => $request->descricao,
            ]);

           
            Log::info('Custo cadastrado', ['id' => $custos->id, $custos]);

          
            DB::commit();

         
            return redirect()->route('custos.index', ['custos' => $custos->id])->with('success', 'Custo cadastrado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Custo não cadastrado.', ['error' => $e->getMessage()]);

          
            DB::rollBack();

         
            return back()->withInput()->with('error', 'Custo não cadastrado!');
        }

     }

     public function view(CustoGeral $custos){
      
        return view( 'custos.view', ['menu'=>'custos', 'custos' => $custos]);
    }
    
    public function edit(CustoGeral $custos){
        return view('custos.edit', ['menu' => 'custos', 'custos' => $custos]);
    }

    public function update(CustosRequest $request, CustoGeral $custos){
   
        $request->validated();

  
        DB::beginTransaction();

        try {
            $custos->update([
                'id_emp1' => $request->id_emp1,
                'id_emp2' => $request->id_emp2,
                'percentual' => $request->percentual,
                'descricao' => $request->descricao,
            ]);

        
            Log::info('Custo editado.', ['id' => $custos->id]);


            DB::commit();

         
            return redirect()->route('custos.view', ['custos' => $custos->id])->with('success', 'Custo editado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Custo não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

     
            return back()->withInput()->with('error', 'Custo não editado!');
        }
    }

    public function delete(CustoGeral $custos){
        try {
        
            $custos->delete();

            // Salvar log
            Log::info('Custo excluído.', ['id' => $custos->id]);

        
            return redirect()->route('custos.index')->with('success', 'Custo excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Custo não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Custo não excluído!');
        }
    }
}
