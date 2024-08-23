<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use App\Http\Requests\ServicosRequest;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ServicosController extends Controller
{
    // Serviços
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $servicos= Servicos::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('servicos.index', ['servicos', 'servicos'=> $servicos,'nome'=>$request->nome]);
    }

    public function create(){
        return view('servicos.create', ['menu' => 'servicos']);
    }

    public function store(ServicosRequest $request){

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela servicoss
            $servicos = Servicos::create([
                'nome' => $request->nome,
                'custo_recorente' => $request->custo_recorente,
                'valor' => $request->valor,
                'intervalo' => $request->intervalo,
                'descricao' => $request->descricao,
            ]);

            // Salvar log
            Log::info('Serviço cadastrado.', ['id' => $servicos->id, $servicos]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o servicos, enviar a mensagem de sucesso
            return redirect()->route('servicos.index', ['servicos' => $servicos->id])->with('success', 'servicos cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('servicos não cadastrada.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o servicos, enviar a mensagem de erro
            return back()->withInput()->with('error', 'servicos não cadastrada!');
        }
    }

    public function view(Servicos $servicos){
        //Carrega a View
        return view( 'servicos.view', ['menu'=>'servicos', 'servicos' => $servicos]);
    }
    
    public function edit(Servicos $servicos){
        return view('servicos.edit', ['menu' => 'servicos', 'servicos' => $servicos]);
    }

    public function update(ServicosRequest $request, Servicos $servicos){
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $servicos->update([
                'nome' => $request->nome,
                'custo_recorente' => $request->custo_recorente,
                'valor' => $request->valor,
                'intervalo' => $request->intervalo,
                'descricao' => $request->descricao,
            ]);

            // Salvar log
            Log::info('Serviço editado.', ['id' => $servicos->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('servicos.view', ['servicos' => $request->servicos])->with('success', 'Serviço editado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Serviço não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Serviço, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Serviço não editado!');
        }
    }

    public function delete(Servicos $servicos){
        try {
            // Excluir o registro do banco de dados
            $servicos->delete();

            // Salvar log
            Log::info('servico excluído.', ['id' => $servicos->id]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('servicos.index')->with('success', 'serviço excluído com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('serviço não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }

}
