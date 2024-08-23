<?php

namespace App\Http\Controllers;

use App\Models\Materiais;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\MateriaisRequest;

class MateriaisController extends Controller
{
    
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $materiais= Materiais::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('materiais.index', ['materiais', 'materiais'=> $materiais,'nome'=>$request->nome]);
    }


     public function create() {
        return view('materiais.create', ['menu' => 'materiais']);
     }

     public function store(MateriaisRequest $request) {

        $request->validated();

        DB::beginTransaction();

        try {

          
            $materiais = Materiais::create([
                'nome' => $request->nome,
                'custo' => $request->custo,
                'unidade' => $request->unidade,
                'valor' => $request->valor,
                'descricao' => $request->descricao,
            ]);

           
            Log::info('Material cadastrado', ['id' => $materiais->id, $materiais]);

          
            DB::commit();

         
            return redirect()->route('materiais.index', ['materiais' => $materiais->id])->with('success', 'Material cadastrado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Material não cadastrado.', ['error' => $e->getMessage()]);

          
            DB::rollBack();

         
            return back()->withInput()->with('error', 'Material não cadastrado!');
        }

     }

     public function view(Materiais $materiais){
      
        return view( 'materiais.view', ['menu'=>'materiais', 'materiais' => $materiais]);
    }
    
    public function edit(Materiais $materiais){
        return view('materiais.edit', ['menu' => 'materiais', 'materiais' => $materiais]);
    }

    public function update(MateriaisRequest $request, Materiais $materiais){
   
        $request->validated();

  
        DB::beginTransaction();

        try {
            $materiais->update([

                'nome' => $request->nome,
                'custo' => $request->custo,
                'unidade' => $request->unidade,
                'valor' => $request->valor,
                'descricao' => $request->descricao, 

            ]);

        
            Log::info('Material editado.', ['id' => $materiais->id]);


            DB::commit();

         
            return redirect()->route('materiais.view', ['materiais' => $materiais->id])->with('success', 'Material editado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Material não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

     
            return back()->withInput()->with('error', 'Material não editado!');
        }
    }

    public function delete(Materiais $materiais){
        try {
        
            $materiais->delete();

            // Salvar log
            Log::info('Material excluído.', ['id' => $materiais->id]);

        
            return redirect()->route('materiais.index')->with('success', 'Material excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Material não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }
}
