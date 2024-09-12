<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os1;
use App\Http\Requests\Os1Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class Os1Controller extends Controller
{
    //listar os usuarios

    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $os1= Os1::when($request->has('id_status'), function ($Query) use ($request){
            $Query->where('id_status', 'like', '%' . $request->id_status . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('os.index', ['os1', 'os1'=> $os1,'id_status'=>$request->id_status]);
    }
    
    // Carregar o formulário cadastrar novo usuário
    
    public function create()
    {
        // Carregar a VIEW
        return view('os1.create', ['menu' => 'os1']);
    }

    // Cadastrar no banco de dados o novo curso
    public function store(Os1Request $request)
    {

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela usuários
            $os1 = Os1::create([
                // 'os1' => $os1,
                'id_status' => $request->id_status,
                'id_users' => $request->id_users,
                'id_emp2' => $request->id_emp2,
                'datacad' =>$request-> datacad,
                'dhi' => $request->dhi,
                'dhf' => $request->dhf,
                'obs' => $request->obs,
                'vtotal' =>$request-> vtotal,
                'ctotal' => $request->ctotal,
                'cindireto' => $request->cindireto,
                'vresultado' => $request->vresultado,
            ]);

            // Salvar log
            Log::info('Os1 cadastrado.', ['id' => $os1->id, $os1]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os1, enviar a mensagem de sucesso
            return redirect()->route('os.index', ['os1' => $os1->id])->with('success', 'Os1 cadastrado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Os1 não cadastrado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o Os1, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Os1 não cadastrado!');
        }
    }
    
    public function view(Os1 $os1)
    {
        $oss1 = Os1::with(['os2', 'os3', 'os4'])->find($os1->id);

        if ($oss1) {
            return view('os1.view', ['menu' => 'os1', 'os1' => $oss1]);
        } else {
            return redirect()->route('os.index')->with('error', 'Os1 não encontrado.');
        }
    }

    // Carregar o formulário editar usuário
    public function edit(Os1 $os1)
    {
        $os1 = Os1::with(['os2', 'os3', 'os4'])->find($os1->id);

        if ($os1) {
            return view('os1.edit', ['menu' => 'os1', 'os1' => $os1]);
        } else {
            return redirect()->route('os.index')->with('error', 'Os1 não encontrado.');
        }
    }

    public function update(Os1Request $request, Os1 $os1)
    {
        // Validar o formulário
        $request->validated();
    
        // Marca o ponto inicial de uma transação
        DB::beginTransaction();
    
        try {
            // Atualizar Os1
            $os1->update([
                'id_status' => $request->id_status,
                'id_users' => $request->id_users,
                'id_emp2' => $request->id_emp2,
                'datacad' =>$request-> datacad,
                'dhi' => $request->dhi,
                'dhf' => $request->dhf,
                'obs' => $request->obs,
                'vtotal' =>$request-> vtotal,
                'ctotal' => $request->ctotal,
                'cindireto' => $request->cindireto,
                'vresultado' => $request->vresultado,
            ]);
    
            // Atualizar Os2
            foreach ($request->os2 as $id => $data) {
                $os2 = Os2::find($id);
                if ($os2) { 
                    $os2->update([
                        'qtde' => $request->qtde,
                        'vunit' => $request->vunit,
                        'vtotal' => $request->vtotal,
                        'cunit' => $request->cunit,
                        'ctotal' => $request->ctotal,
                        'id_emp2' => $request->id_emp2,
                        'id_os1' => $request->id_os1,
                        'id_servico' => $request->id_servico,
                        'id_colaborador' => $request->id_colaborador,
                    ]);
                }
            }
    
            // Atualizar Os3
            foreach ($request->os3 as $id => $data) {
                $os3 = Os3::find($id);
                if ($os3) {
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
                }
            }
    
            // Atualizar Os4
            foreach ($request->os4 as $id => $data) {
                $os4 = Os4::find($id);
                if ($os4) {
                    $os4->update([
                        'descricao' => $request->descricao,
                        'percentual' => $request->percentual,
                        'valor' => $request->valor,
                        'ativo' => $request->ativo,
                        'id_emp2' => $request->id_emp2,
                    ]);
                }
            }
    
            // Operação é concluída com êxito
            DB::commit();
    
            return redirect()->route('os.index', ['os1' => $os1->id])->with('success', 'Os1 editado com sucesso!');
        } catch (Exception $e) {
            // Operação não é concluída com êxito
            DB::rollBack();
            return back()->withInput()->with('error', 'Erro ao editar Os1!');
        }
    }
    public function delete(Os1 $os1)
    {
        try {
        
            $os1->delete();

            // Salvar log
            Log::info('Os1 excluído.', ['id' => $os1->id]);

        
            return redirect()->route('os.index')->with('success', 'Os1 excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Os1 não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('os.index')->with('error', 'Os1 não excluído!');
        }
    }
}
