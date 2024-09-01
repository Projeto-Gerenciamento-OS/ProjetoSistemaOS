<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\SetorRequest;

class SetorController extends Controller
{
    
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $setor= Setor::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('setor.index', ['setor', 'setor'=> $setor,'nome'=>$request->nome]);
    }


     public function create() {
        return view('setor.create', ['menu' => 'setor']);
     }

     public function store(SetorRequest $request) {

        $request->validated();

        DB::beginTransaction();

        try {

          
            $setor =Setor::create([
                'descricao' => $request->descricao,
                'id_emp2' => $request->id_emp2,
                'id_users_setor' => $request->id_users_setor,
            ]);

           
            Log::info('Setor cadastrado', ['id' => $setor->id, $setor]);

          
            DB::commit();

         
            return redirect()->route('setor.index', ['setor' => $setor->id])->with('success', 'Setor cadastrado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Setor não cadastrado.', ['error' => $e->getMessage()]);

          
            DB::rollBack();

         
            return back()->withInput()->with('error', 'Setor não cadastrado!');
        }

     }

     public function view(Setor $setor){
      
        return view( 'setor.view', ['menu'=>'setor', 'setor' => $setor]);
    }
    
    public function edit(Setor $setor){
        return view('setor.edit', ['menu' => 'setor', 'setor' => $setor]);
    }

    public function update(SetorRequest $request, Setor $setor){
   
        $request->validated();

  
        DB::beginTransaction();

        try {
            $setor->update([

                'descricao' => $request->descricao,
                'id_emp2' => $request->id_emp2,
                'id_users_setor' => $request->id_users_setor,

            ]);

        
            Log::info('Setor editado.', ['id' => $setor->id]);


            DB::commit();

         
            return redirect()->route('setor.view', ['setor' => $setor->id])->with('success', 'Setor editado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Setor não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

     
            return back()->withInput()->with('error', 'Setor não editado!');
        }
    }

    public function delete(Setor $setor){
        try {
        
            $setor->delete();

            // Salvar log
            Log::info('Setor excluído.', ['id' => $setor->id]);

        
            return redirect()->route('setor.index')->with('success', 'Setor excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Setor não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }
}
