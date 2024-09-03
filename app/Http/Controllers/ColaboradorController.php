<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColaboradorRequest;
use App\Models\Colaborador;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ColaboradorController extends Controller
{
     // Colaborador
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $colaborador= Colaborador::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('colaborador.index', ['colaborador', 'colaborador'=> $colaborador,'nome'=>$request->nome]);
    }


    // Detalhes do colaborador
    public function view(Colaborador $colaborador)
    {
    
        //SALVAR LOG

        Log::info('Visualizar Colaborador',['colaborador'=>$colaborador->id]);

        // Carregar a VIEW

        return view('colaborador.view', ['menu' => 'colaborador', 'colaborador' => $colaborador]);
    }

    // Carregar o formulário cadastrar novo colaborador
    public function create(Colaborador $colaborador)
    {
    
    // Carregar a VIEW
        return view('colaborador.create', ['colaborador'=> $colaborador]);
    }



    // Cadastrar no banco de dados o novo colaborador
    public function store(ColaboradorRequest $request)
    {
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela colaborador
            $colaborador = Colaborador::create([
                'nome' => $request->nome,
                'fone' => $request->fone,
                'id_emp2' => $request->id_emp2,
                'id_users' => $request->id_users,
                'id_turno' => $request->id_turno,
                'id_setor' => $request->id_setor,           
            ]);

            // Operação é concluída com êxito
            DB::commit();
            // Salvar log
            Log::info('Colaborador cadastrado.', [ 'id' => $colaborador->id]);

            // Redirecionar para colaborador, enviar a mensagem de sucesso
            return redirect()->route('colaborador.index', ['colaborador'=>$colaborador->id])->with("success","Colaborador cadastrado com sucesso");

        } catch (Exception $e) {

            // Salvar log
            Log::info('Colaborador não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar para Colaborador , enviar a mensagem de erro
            return back()->withInput()->with('error', 'Colaborador não cadastrado!');

        }
    
    }

    // Carregar o formulário editar Colaborador
    public function edit(Colaborador $colaborador)
    {
        // Carregar a VIEW
        
        return view('colaborador.edit', ['menu' => 'colaborador', 'colaborador' => $colaborador]);
    }


       //Realizar a alteração no banco de dados da Colaborador
    public function update(ColaboradorRequest $request, Colaborador $colaborador)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

              // Editar as informações do registro no banco de dados
            $colaborador->update([
                'nome' => $request->nome,
                'fone' => $request->fone,
                'id_emp2' => $request->id_emp2,
                'id_users' => $request->id_users,
                'id_turno' => $request->id_turno,
                'id_setor' => $request->id_setor,        
            ]);
        // Salvar log
        Log::info('Colaborador editado.', ['id' => $colaborador->id]);
            

        // Operação é concluída com êxito
        DB::commit();

        // Salvar log
        Log::info('Colaborador editada.', [ 'colaborador' => $colaborador->id]);


        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('colaborador.index', ['colaborador'=>$request->id])->with('success', 'Colaborador editado com sucesso!');

        } catch (Exception $e) {

        // Salvar log
        Log::info('Colaborador não editado.', ['error' => $e->getMessage()]);

        // Operação não é concluída com êxito
        DB::rollBack();

        // Redirecionar o usuário, enviar a mensagem de erro
        return back()->withInput()->with('error', 'Colaborador não editado!');
        }
    }

        // Excluir o Colaborador do banco de dados
        public function delete(Colaborador $colaborador)
        {
            try {
                // Excluir o registro do banco de dados
                $colaborador->delete();
    
                // Salvar log
                Log::info('Colaborador excluído.', ['id' => $colaborador->id]);
    
                // Redirecionar o usuário, enviar a mensagem de sucesso
                return redirect()->route('colaborador.index')->with('success', 'Colaborador excluído com sucesso!');
            } catch (Exception $e) {
    
                // Salvar log
                Log::info('colaborador não excluído.', ['error' => $e->getMessage()]);
    
                // Redirecionar o usuário, enviar a mensagem de erro
                return redirect()->route('colaborador.index')->with('error', 'Colaborador não excluído!');
            }
        }




}
