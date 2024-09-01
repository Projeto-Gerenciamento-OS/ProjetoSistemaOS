<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\TurnoRequest;

class TurnoController extends Controller
{
    
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $turno= Turno::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('turno.index', ['turno', 'turno'=> $turno,'nome'=>$request->nome]);
    }


     public function create() {
        return view('turno.create', ['menu' => 'turno']);
     }

     public function store(TurnoRequest $request) {

        $request->validated();

        DB::beginTransaction();

        try {

          
            $turno = Turno::create([
                'nome' => $request->nome,
                'custo' => $request->custo,
                'unidade' => $request->unidade,
                'valor' => $request->valor,
                'descricao' => $request->descricao,
            ]);

           
            Log::info('Turno cadastrado', ['id' => $turno->id, $turno]);

          
            DB::commit();

         
            return redirect()->route('turno.index', ['turno' => $turno->id])->with('success', 'Turno cadastrado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Turno não cadastrado.', ['error' => $e->getMessage()]);

          
            DB::rollBack();

         
            return back()->withInput()->with('error', 'Turno não cadastrado!');
        }

     }

     public function view(Turno $turno){
      
        return view( 'turno.view', ['menu'=>'turno', 'turno' => $turno]);
    }
    
    public function edit(Turno $turno){
        return view('turno.edit', ['menu' => 'turno', 'turno' => $turno]);
    }

    public function update(TurnoRequest $request, Turno $turno){
   
        $request->validated();

  
        DB::beginTransaction();

        try {
            $turno->update([

                'nome' => $request->nome,
                'custo' => $request->custo,
                'unidade' => $request->unidade,
                'valor' => $request->valor,
                'descricao' => $request->descricao, 

            ]);

        
            Log::info('Turno editado.', ['id' => $turno->id]);


            DB::commit();

         
            return redirect()->route('turno.view', ['turno' => $turno->id])->with('success', 'Turno editado com sucesso!');

        } catch (Exception $e) {

        
            Log::info('Turno não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

     
            return back()->withInput()->with('error', 'Turno não editado!');
        }
    }

    public function delete(Turno $turno){
        try {
        
            $turno->delete();

            // Salvar log
            Log::info('Turno excluído.', ['id' => $turno->id]);

        
            return redirect()->route('turno.index')->with('success', 'Turno excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Turno não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }
}
