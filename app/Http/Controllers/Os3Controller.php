<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os3;
use App\Http\Requests\Os3Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os3Controller extends Controller
{
    //listar os usuarios

    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os3= Os3::when($request->has('id_os1_os3'), function ($Query) use ($request){
            $Query->where('id_os1_os3', 'like', '%' . $request->id_os1_os3 . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os.index', ['os3', 'os3'=> $os3,'id_os1_os3'=>$request->id_os1_os3]);
    }
    
    // Carregar o formulário cadastrar novo usuário
    
    public function create()
    {
        // Carregar a VIEW
        return view('os3.create', ['menu' => 'os3']);
    }

    // Cadastrar no banco de dados o novo curso
    public function store(Os3Request $request)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela usuários
            $os3 = Os3::create([
                'qtde' => $request->qtde,
                'vunit' => $request->vunit,
                'vtotal' => $request->vtotal,
                'cunit' => $request->cunit,
                'ctotal' => $request->ctotal,
                'id_emp2' => $request->id_emp2,
                'id_os1' => $request->id_os1,
                'id_materiais' => $request->id_materiais,
            ]);

            // Salvar log
            Log::info('Os3 cadastrado.', ['id' => $os3->id, $os3]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os3, enviar a mensagem de sucesso
            return redirect()->route('os.index', ['os3' => $os3->id])->with('success', 'Os3 cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os3 não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os3, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os3 não cadastrado!');
        }
    }
    
    public function view(Os3 $os3)
    {
        //Carrega a View
        return view( 'os3.view', ['menu'=>'os3', 'os3' => $os3]);
    }

    
    // Carregar o formulário editar usuário
    public function edit(Os3 $os3)
    {

        // Carregar a VIEW
        return view('os3.edit', ['menu' => 'os3', 'os3' => $os3]);
    }

    // Editar no banco de dados o usuário
    public function update(Os3Request $request, Os3  $os3)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $os3->update([
                'qtde' => $request->qtde,
                'vunit' => $request->vunit,
                'vtotal' => $request->vtotal,
                'cunit' => $request->cunit,
                'ctotal' => $request->ctotal,
                'id_emp2' => $request->id_emp2,
                'id_os1' => $request->id_os1,
                'id_materiais' => $request->id_materiais,
            ]);

            // Salvar log
            Log::info('Os3 editado.', ['id' => $os3->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os3, enviar a mensagem de sucesso
            return redirect()->route('os3.view', ['os3' => $os3->id])->with('success', 'Os3 editado com sucesso!');
            
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os3 não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os3, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os3 não editado!');
        }
    }

    public function delete(Os3 $os3){
        try {
        
            $os3->delete();

            // Salvar log
            Log::info('Os3 excluído.', ['id' => $os3->id]);

        
            return redirect()->route('os.index')->with('success', 'Os3 excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Os3 não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('os.index')->with('error', 'Os2 não excluído!');
        }
    }
}
