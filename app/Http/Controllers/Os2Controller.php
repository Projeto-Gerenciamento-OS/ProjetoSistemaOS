<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os2;
use App\Http\Requests\Os2Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os2Controller extends Controller
{
    //listar os usuarios

    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os2= Os2::when($request->has('id_servico'), function ($Query) use ($request){
            $Query->where('id_servico', 'like', '%' . $request->id_servico . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os2.index', ['os2', 'os2'=> $os2,'id_servico'=>$request->id_servico]);
    }
    
    // Carregar o formulário cadastrar novo usuário
    
    public function create()
    {
        // Carregar a VIEW
        return view('os2.create', ['menu' => 'os2']);
    }

     // Cadastrar no banco de dados o novo curso
     public function store(Os2Request $request)
     {
 
         // Validar o formulário
         $request->validated();
 
         // Marca o ponto inicial de uma transação
         DB::beginTransaction();
 
         try {
 
             // Cadastrar no banco de dados na tabela usuários
             $os2 = Os2::create([
                 'id_servico' => $request->id_servico,
                 'id_emp1_os2' => $request->id_emp1_os2,
                 'id_emp2_os2' => $request->id_emp2_os2,
                 'id_colaborador' => $request->id_colaborador,
                 'quantidade_os2' => $request->quantidade_os2,
                 'valorUnitario_os2' => $request->valorUnitario_os2,
                 'valorTotal_os2' => $request->valorTotal_os2,
                 'custoTotal_os2' => $request->custoTotal_os2,
             ]);
 
             // Salvar log
             Log::info('Os2 cadastrado.', ['id' => $os2->id, $os2]);
 
             // Operação é concluída com êxito
             DB::commit();
 
             // Redirecionar o Os2, enviar a mensagem de sucesso
             return redirect()->route('os2.index', ['os2' => $os2->id])->with('success', 'Os2 cadastrado com sucesso!');
         } catch (Exception $e) {
 
             // Salvar log
             Log::info('Os2 não cadastrado.', ['error' => $e->getMessage()]);
 
             // Operação não é concluída com êxito
             DB::rollBack();
 
             // Redirecionar o Os2, enviar a mensagem de erro
             return back()->withInput()->with('error', 'Os2 não cadastrado!');
         }
     }
    
    public function view(Os2 $os2)
    {
        //Carrega a View
        return view( 'os2.view', ['menu'=>'os2', 'os2' => $os2]);
    }

    
     // Carregar o formulário editar usuário
    public function edit(Os2 $os2)
    {

        // Carregar a VIEW
        return view('os2.edit', ['menu' => 'os2', 'os2' => $os2]);
    }

    // Editar no banco de dados o usuário
    public function update(Os2Request $request, Os2  $os2)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $os2->update([
                'id_servico' => $request->id_servico,
                'id_emp1' => $request->id_emp1,
                'id_emp2' => $request->id_emp2,
                'qtde' => $request->qtde,
                'vunit' => $request->vunit,
                'vtotal' => $request->vtotal,
                'cunit' => $request->cunit,
                'ctotal' => $request->ctotal,
                'id_os2' => $request->id_os2,
                'id_colaborador' => $request->id_colaborador,
            ]);

            // Salvar log
            Log::info('Os2 editado.', ['id' => $os2->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os2, enviar a mensagem de sucesso
            return redirect()->route('os2.view', ['os2' => $os2->id])->with('success', 'Os2 editado com sucesso!');
            
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os2 não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os2, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os2 não editado!');
        }
    }

    public function delete(Os2 $os2){
        try {
        
            $os2->delete();

            // Salvar log
            Log::info('Os2 excluído.', ['id' => $os2->id]);

        
            return redirect()->route('os2.index')->with('success', 'Os2 excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Os2 não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('os2.index')->with('error', 'Os2 não excluído!');
        }
    }
}
