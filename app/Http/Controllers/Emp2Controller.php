<?php

namespace App\Http\Controllers;

use App\Models\Emp2;
use App\Http\Requests\Emp2Request;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class Emp2Controller extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $emp2= Emp2::when($request->has('razao'), function ($Query) use ($request){
            $Query->where('razao', 'like', '%' . $request->razao . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('emp2.index', ['emp2', 'emp2'=> $emp2,'razao'=>$request->razao]);
    }

    // Detalhes da empresa
    public function view(Emp2 $emp2) {
        // Carregar a VIEW
        //SALVAR LOG
        Log::info('Visualizar Empresas',['emp2'=>$emp2->id]);

        return view('emp2.view', ['emp2', 'emp2' => $emp2]);
    }

    // Carregar o formulário cadastrar nova empresa
    public function create(Emp2 $emp2) {
        // Carregar a VIEW
        return view('emp2.create', ['emp2'=> $emp2]);
    }

    // Cadastrar no banco de dados o nova Empresa
    public function store(Emp2Request $request) {
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {
            // Cadastrar no banco de dados na tabela empresa
            $emp2 = Emp2::create([
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'cnpj' => $request->cnpj,
                'endereco' => $request->endereco,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'cep' => $request->cep,
                'uf' => $request->uf,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'plano' => $request->plano,
                'qtdeadm' => $request->qtdeadm,
                'qtdeoper' => $request->qtdeoper,
                'id_emp1'=>$request->id_emp1,
            ]);

            // // Salvar log
            // Log::info('Empresa cadastrado.', ['id' => $empresa->id, $empresa]);

            // Operação é concluída com êxito
            DB::commit();
                // Salvar log
            Log::info('Empresa cadastrada.', [ 'id' => $emp2->id]);

            // Redirecionar para empresa, enviar a mensagem de sucesso
            return redirect()->route('emp2.index', ['emp2'=>$emp2->id])->with("success","Empresa cadastrada com sucesso");
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
    public function edit(Emp2 $emp2)
    {
        // Carregar a VIEW
        // return view('empresa.edit', ['empresa' => $empresa]);
        return view('emp2.edit', ['emp2', 'emp2' => $emp2]);
    }

    //Realizar a alteração no banco de dados da empresa
    public function update(Emp2Request $request, Emp2 $emp2)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $emp2->update([
                'razao' => $request->razao,
                'fantasia' => $request->fantasia,
                'cnpj' => $request->cnpj,
                'endereco' => $request->endereco,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'cep' => $request->cep,
                'uf' => $request->uf,
                'fone1' => $request->fone1,
                'fone2' => $request->fone2,
                'plano' => $request->plano,
                'qtdeadm' => $request->qtdeadm,
                'qtdeoper' => $request->qtdeoper,
                'id_emp1'=>$request->id_emp1,
            ]);

            // Salvar log
            Log::info('Empresa editado.', ['id' => $emp2->id]);
    

            // Operação é concluída com êxito
            DB::commit();

             // Salvar log
             Log::info('Empresa editada.', [ 'emp2' => $emp2->id]);


            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('emp2.index', ['emp2'=>$request->id])->with('success', 'Empresa editado com sucesso!');

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
     public function delete(Emp2 $emp2)
     {
         try {
             // Excluir o registro do banco de dados
             $emp2->delete();
 
             // Salvar log
             Log::info('Empresa excluído.', ['id' => $emp2->id]);
 
             // Redirecionar o usuário, enviar a mensagem de sucesso
             return redirect()->route('emp2.index')->with('success', 'Empresa excluído com sucesso!');
         } catch (Exception $e) {
 
             // Salvar log
             Log::info('Empresa não excluído.', ['error' => $e->getMessage()]);
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return redirect()->route('emp2.index')->with('error', 'Empresa não excluído!');
         }
     }


}
