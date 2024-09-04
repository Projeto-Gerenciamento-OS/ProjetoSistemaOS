<?php

namespace App\Http\Controllers;

use App\Models\Cli;
use App\Http\Requests\CliRequest;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CliController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $cli= Cli::when($request->has('razao'), function ($Query) use ($request){
            $Query->where('razao', 'like', '%' . $request->razao . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('cli.index', ['cli', 'cli'=> $cli,'razao'=>$request->razao]);
    }

    // Detalhes da cliente
    public function view(Cli $cli) {
        // Carregar a VIEW
        //SALVAR LOG
        Log::info('Visualizar clientes',['cli'=>$cli->id]);

        return view('cli.view', ['cli', 'cli' => $cli]);
    }

    // Carregar o formulário cadastrar nova cliente
    public function create(Cli $cli) {
        // Carregar a VIEW
        return view('cli.create', ['cli'=> $cli]);
    }

    // Cadastrar no banco de dados o nova Cliente
    public function store(CliRequest $request) {
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {
            // Cadastrar no banco de dados na tabela cliente
            $cli = Cli::create([
                'tipo' => $request->tipo,
                'cpf_cnpj' => $request->cpf_cnpj,
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'endereco' => $request->endereco,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'email' => $request->email,
                'cep' => $request->cep,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'obs'=>$request->obs,
                'id_emp2'=>$request->id_emp2,
            ]);

            // // Salvar log
            // Log::info('Cliente cadastrado.', ['id' => $cliente->id, $cliente]);

            // Operação é concluída com êxito
            DB::commit();
                // Salvar log
            Log::info('Cliente cadastrada.', [ 'id' => $cli->id]);

            // Redirecionar para cliente, enviar a mensagem de sucesso
            return redirect()->route('cli.index', ['cli'=>$cli->id])->with("success","Cliente cadastrada com sucesso");
        } catch (Exception $e) {

            // Salvar log
            Log::info('Cliente não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar para emrpesa , enviar a mensagem de erro
            return back()->withInput()->with('error', 'Cliente não cadastrado!');
        }
    }

    // Carregar o formulário editar cliente
    public function edit(Cli $cli)
    {
        // Carregar a VIEW
        // return view('cliente.edit', ['cliente' => $cliente]);
        return view('cli.edit', ['cli', 'cli' => $cli]);
    }

    //Realizar a alteração no banco de dados da cliente
    public function update(CliRequest $request, Cli $cli)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $cli->update([
                'tipo' => $request->tipo,
                'cpf_cnpj' => $request->cpf_cnpj,
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'endereco' => $request->endereco,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'email' => $request->email,
                'cep' => $request->cep,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'obs'=>$request->obs,
                'id_emp2'=>$request->id_emp2,
            ]);

            // Salvar log
            Log::info('Cliente editado.', ['id' => $cli->id]);
    

            // Operação é concluída com êxito
            DB::commit();

            // Salvar log
            Log::info('Cliente editada.', [ 'cli' => $cli->id]);


            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('cli.index', ['cli'=>$request->id])->with('success', 'Cliente editado com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Cliente não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o usuário, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Cliente não editado!');
        }
    }

    // Excluir o cliente do banco de dados
    public function delete(Cli $cli)
    {
        try {
            // Excluir o registro do banco de dados
            $cli->delete();

            // Salvar log
            Log::info('Cliente excluído.', ['id' => $cli->id]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('cli.index')->with('success', 'Cliente excluído com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Cliente não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('cli.index')->with('error', 'Cliente não excluído!');
        }
    }


}
