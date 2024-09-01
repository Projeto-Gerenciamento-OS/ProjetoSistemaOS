<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StatusRequest;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $status= Status::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('status.index', ['status', 'status'=> $status,'nome'=>$request->nome]);
    }

    public function create(){
        return view('status.create', ['menu' => 'status']);
    }

    public function store(StatusRequest $request){

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela servicoss
            $status = Status::create([
                'descricao' => $request->descricao,
                'cor' => $request->cor,
                'id_emp2' => $request->id_emp2,
                'id_users_status' => $request->id_users_status,
            ]);

            // Salvar log
            Log::info('Status cadastrado.', ['id' => $status->id, $status]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o status, enviar a mensagem de sucesso
            return redirect()->route('status.index', ['status' => $status->id])->with('success', 'status cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('status não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o status, enviar a mensagem de erro
            return back()->withInput()->with('error', 'status não cadastrado!');
        }
    }

    public function view(Status $status){
        //Carrega a View
        return view( 'status.view', ['menu'=>'status', 'status' => $status]);
    }
    
    public function edit(Status $status){
        return view('status.edit', ['menu' => 'status', 'status' => $status]);
    }

    public function update(StatusRequest $request, Status $status){
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $status->update([
                'descricao' => $request->descricao,
                'cor' => $request->cor,
                'id_emp2' => $request->id_emp2,
                'id_users_status' => $request->id_users_status,
            ]);

            // Salvar log
            Log::info('Status editado.', ['id' => $status->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('status.view', ['status' => $request->status])->with('success', 'Status editado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Status não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Status, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Status não editado!');
        }
    }

    public function delete(Status $status){
        try {
            // Excluir o registro do banco de dados
            $status->delete();

            // Salvar log
            Log::info('status excluído.', ['id' => $status->id]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('status.index')->with('success', 'status excluído com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('status não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }
}
