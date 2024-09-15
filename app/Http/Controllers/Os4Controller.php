<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os4;
use App\Http\Requests\Os4Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os4Controller extends Controller
{
    //listar os usuarios

    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os4= Os4::when($request->has('id_emp1_os4'), function ($Query) use ($request){
            $Query->where('id_emp1_os4', 'like', '%' . $request->id_emp1_os4 . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os.index', ['os4', 'os4'=> $os4,'id_emp1_os4'=>$request->id_emp1_os4]);
    }
    
    // Carregar o formulário cadastrar novo usuário
    
    public function create()
    {
        // Carregar a VIEW
        return view('os1.os4.create', ['menu' => 'os4']);
    }

    // Cadastrar no banco de dados o novo curso
    public function store(Os4Request $request)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela usuários
            $os4 = Os4::create([
                'descricao' => $request->descricao,
                'percentual' => $request->percentual,
                'valor' => $request->valor,
                'ativo' => $request->ativo,
                'id_emp2' => $request->id_emp2,
            ]);

            // Salvar log
            Log::info('Os4 cadastrado.', ['id' => $os4->id, $os4]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os4, enviar a mensagem de sucesso
            return redirect()->route('os.index', ['os4' => $os4->id])->with('success', 'Os4 cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os4 não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os4, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os4 não cadastrado!');
        }
    }
    
    public function view(Os4 $os4)
    {
        //Carrega a View
        return view( 'os1.os4.view', ['menu'=>'os4', 'os4' => $os4]);
    }

    
    // Carregar o formulário editar usuário
    public function edit(Os4 $os4)
    {

        // Carregar a VIEW
        return view('os1.os4.edit', ['menu' => 'os4', 'os4' => $os4]);
    }

    // Editar no banco de dados o usuário
    public function update(Os4Request $request, Os4  $os4)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $os4->update([
                'descricao' => $request->descricao,
                'percentual' => $request->percentual,
                'valor' => $request->valor,
                'ativo' => $request->ativo,
                'id_emp2' => $request->id_emp2,
            ]);

            // Salvar log
            Log::info('Os4 editado.', ['id' => $os4->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os4, enviar a mensagem de sucesso
            return redirect()->route('os1.os4.view', ['os4' => $os4->id])->with('success', 'Os4 editado com sucesso!');
            
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os4 não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os4, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os4 não editado!');
        }
    }

    public function delete(Os4 $os4){
        try {
        
            $os4->delete();

            // Salvar log
            Log::info('Os4 excluído.', ['id' => $os4->id]);

        
            return redirect()->route('os.index')->with('success', 'Os4 excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Os4 não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('os.index')->with('error', 'Os4 não excluído!');
        }
    }
}
