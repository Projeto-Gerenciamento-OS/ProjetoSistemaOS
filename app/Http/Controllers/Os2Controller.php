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
        return view('os.index', ['os2', 'os2'=> $os2,'id_servico'=>$request->id_servico]);
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

        $request->validated();

        DB::beginTransaction();
        
        try {
            
            $os2 = Os2::create([
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
            
            Log::info('Os2 cadastrado.', ['id' => $os2->id, $os2]);
            
            DB::commit();
            
            return redirect()->route('os2.create', $os2)->with('success', 'Os2 criada com sucesso!');
           
            // return redirect()->route('os.index', ['os2' => $os2->id])->with('success', 'Os2 cadastrado com sucesso!');
        } catch (Exception $e) {

            Log::info('Os2 não cadastrado.', ['error' => $e->getMessage()]);

            DB::rollBack();

            return back()->withInput()->with('error', 'Os2 não cadastrado!');
        }
    }
    
    public function view(Os2 $os2)
    {
        return view( 'os1.edit', ['menu'=>'os2', 'os2' => $os2]);
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
            
            // Salvar log
            Log::info('Os2 editado.', ['id' => $os2->id]);
            
            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o Os2, enviar a mensagem de sucesso
            return redirect()->route('os1.os2.edit', ['os2' => $os2->id])->with('success', 'Os2 editado com sucesso!');
            
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

        
            return redirect()->route('os.index')->with('success', 'Os2 excluído com sucesso!');

        } catch (Exception $e) {

            // Salvar log
            Log::info('Os2 não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('os.index')->with('error', 'Os2 não excluído!');
        }
    }
}
