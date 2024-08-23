<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Requests\EmpresaRequest;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class EmpresaController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $empresa= Empresa::when($request->has('razao'), function ($Query) use ($request){
            $Query->where('razao', 'like', '%' . $request->razao . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('empresa.index', ['empresa', 'empresa'=> $empresa,'razao'=>$request->razao]);
    }

    // Detalhes da empresa
    public function view(Empresa $empresa) {
        // Carregar a VIEW
        //SALVAR LOG
        Log::info('Visualizar Empresas',['empresa'=>$empresa->id]);

        return view('empresa.view', ['menu' => 'empresa', 'empresa' => $empresa]);
    }

    // Carregar o formulário cadastrar nova empresa
    public function create(Empresa $empresa) {
        // Carregar a VIEW
        return view('empresa.create', ['empresa'=> $empresa]);
    }

    // Cadastrar no banco de dados o nova Empresa
    public function store(EmpresaRequest $request) {
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {
            // Cadastrar no banco de dados na tabela empresa
            $empresa = Empresa::create([
                'empresa1_id' => $request->empresa1_id,
                'cnpj' => $request->cnpj,
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'cep' => $request->cep,
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'plano' => $request->plano,
                'qtdadm' => $request->qtdadm,
                'qtdoper' => $request->qtdoper,
            ]);

            // // Salvar log
            // Log::info('Empresa cadastrado.', ['id' => $empresa->id, $empresa]);

            // Operação é concluída com êxito
            DB::commit();
                // Salvar log
            Log::info('Empresa cadastrada.', [ 'id' => $empresa->id]);

            // Redirecionar para empresa, enviar a mensagem de sucesso
            return redirect()->route('empresa.index', ['empresa'=>$empresa->id])->with("success","Empresa cadastrada com sucesso");
        } catch (Exception $e) {

            // Salvar log
            Log::info('Empresa não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar para emrpesa , enviar a mensagem de erro
            return back()->withInput()->with('error', 'Empresa não cadastrado!');
        }
    }

    // Carregar o formulário editar empresa
    public function edit(Empresa $empresa)
    {
        // Carregar a VIEW
        // return view('empresa.edit', ['empresa' => $empresa]);
        return view('empresa.edit', ['menu' => 'empresa', 'empresa' => $empresa]);
    }

    //Realizar a alteração no banco de dados da empresa
    public function update(EmpresaRequest $request, Empresa $empresa)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $empresa->update([
                // 'empresa1_id' => $request->empresa1_id,
                'cnpj' => $request->cnpj,
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'cep' => $request->cep,
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'plano' => $request->plano,
                'qtdadm' => $request->qtdadm,
                'qtdoper' => $request->qtdoper,
            ]);

            // Salvar log
            Log::info('Empresa editado.', ['id' => $empresa->id]);
    

            // Operação é concluída com êxito
            DB::commit();

             // Salvar log
             Log::info('Empresa editada.', [ 'empresa' => $empresa->id]);


            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('empresa.index', ['empresa'=>$request->id])->with('success', 'Empresa editado com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Empresa não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o usuário, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Empresa não editado!');
        }
    }

     // Excluir o empresa do banco de dados
     public function delete(Empresa $empresa)
     {
         try {
             // Excluir o registro do banco de dados
             $empresa->delete();
 
             // Salvar log
             Log::info('Empresa excluído.', ['id' => $empresa->id]);
 
             // Redirecionar o usuário, enviar a mensagem de sucesso
             return redirect()->route('empresa.index')->with('success', 'Empresa excluído com sucesso!');
         } catch (Exception $e) {
 
             // Salvar log
             Log::info('Empresa não excluído.', ['error' => $e->getMessage()]);
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return redirect()->route('empresa.index')->with('error', 'Empresa não excluído!');
         }
     }


}
