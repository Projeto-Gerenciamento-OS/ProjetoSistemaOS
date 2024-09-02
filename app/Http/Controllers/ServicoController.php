<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Http\Requests\ServicoRequest;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ServicoController extends Controller
{
    // Serviços
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $servico= Servico::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('servico.index', ['servico', 'servico'=> $servico,'nome'=>$request->nome]);
    }

    public function create(){
        return view('servicos.create', ['menu' => 'servicos']);
    }

    public function store(ServicoRequest $request){

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela servicos
            $servicos = Servico::create([
                'nome' => $request->nome,
                'nome' => $request->tempo,
                'valor' => $request->valor,
                'obs' => $request->obs,
                'recorrente' => $request->recorrente,
                'custo' => $request->custo,
                'intervalo' => $request->intervalo,
            ]);

            // Salvar log
            Log::info('Serviço cadastrado.', ['id' => $servico->id, $servico]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o servicos, enviar a mensagem de sucesso
            return redirect()->route('servicos.index', ['servicos' => $servicos->id])->with('success', 'servicos cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('servico não cadastrada.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o servico, enviar a mensagem de erro
            return back()->withInput()->with('error', 'servico não cadastrada!');
        }
    }

    public function view(Servico $servico){
        //Carrega a View
        return view( 'servicos.view', ['menu'=>'servicos', 'servicos' => $servicos]);
    }
    
    public function edit(Servico $servicos){
        return view('servicos.edit', ['menu' => 'servicos', 'servicos' => $servicos]);
    }

    public function update(ServicoRequest $request, Servico $servico){
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $servico->update([
                'nome' => $request->nome,
                'nome' => $request->tempo,
                'valor' => $request->valor,
                'obs' => $request->obs,
                'recorrente' => $request->recorrente,
                'custo' => $request->custo,
                'intervalo' => $request->intervalo,
            ]);

            // Salvar log
            Log::info('Serviço editado.', ['id' => $servico->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('servico.view', ['servico' => $request->servico])->with('success', 'Serviço editado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Serviço não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Serviço, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Serviço não editado!');
        }
    }

    public function delete(Servico $servico){
        try {
            // Excluir o registro do banco de dados
            $servico->delete();

            // Salvar log
            Log::info('servicos excluído.', ['id' => $servicos->id]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('servico.index')->with('success', 'serviço excluído com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('serviço não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('servico.index')->with('error', 'Usuário não excluído!');
        }
    }

}
