<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresasRequest;

use App\Models\Empresas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;




class EmpresasController extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $empresas= Empresas::when($request->has('descricao'), function ($Query) use ($request){
            $Query->where('descricao', 'like', '%' . $request->descricao . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('empresas.index', ['empresas', 'empresas'=> $empresas,'descricao'=>$request->descricao]);
    }

    //mostrar detalhes do usuario(view)

    public function view(Empresas $empresas)
    {
        //Carrega a View
        return view( 'empresas.view', ['menu'=>'empresas', 'empresas' => $empresas]);
    }


    // Carregar o formulário cadastrar novo usuário
    public function create()
    {

        // Carregar a VIEW
        return view('empresas.create', ['menu' => 'empresas']);
    }


     // Cadastrar no banco de dados o novo curso
     public function store(EmpresasRequest $request)
     {
 
         // Validar o formulário
         $request->validated();
 
         // Marca o ponto inicial de uma transação
         DB::beginTransaction();
 
         try {
 
             // Cadastrar no banco de dados na tabela usuários
             $empresas = Empresas::create([
                 'descricao' => $request->descricao,

             ]);
 
             // Salvar log
             Log::info('Usuário cadastrado.', ['id' => $empresas->id]);
 
             // Operação é concluída com êxito
             DB::commit();
 
             // Redirecionar o usuário, enviar a mensagem de sucesso
             return redirect()->route('empresas.view', ['empresas' => $empresas->id])->with('success', 'Usuário cadastrado com sucesso!');
         } catch (Exception $e) {
 
             // Salvar log
             Log::info('Usuário não cadastrado.', ['error' => $e->getMessage()]);
 
             // Operação não é concluída com êxito
             DB::rollBack();
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return back()->withInput()->with('error', 'Usuário não cadastrado!');
         }
     }

     // Carregar o formulário editar usuário
    public function edit(Empresas $empresas)
    {
        // dd($empresas);
        // Carregar a VIEW
        // return view('empresas.edit', ['menu' => 'empresas', 'empresas' => $empresas]);
        return view('empresas.edit',['empresas'=> $empresas]);
    }

   
    public function update(Request $request, Empresas $empresas)
    {
        //  dd("editar no banco dados");

        // dd($empresas);
   
          // Validar o formulário
        //  $request->validated();

         // Marca o ponto inicial de uma transação
         DB::beginTransaction();
 
         try {
     
             // Editar as informações do registro no banco de dados
             $empresas->update([
                 'descricao' => $request->descricao,
 
             ]);
 
             // Salvar log
             Log::info('Usuário editado.', ['empresas' => $empresas->id]);
 
             // Operação é concluída com êxito
             DB::commit();
 
             // dd($empresas);
 
             // Redirecionar o usuário, enviar a mensagem de sucesso

            return redirect()->route('empresas.view',['empresas'=>$empresas->id])->with('sucsess', 'empresas editada com sucesso!');
         } catch (Exception $e) {
 
             // Salvar log
             Log::info('Usuário não editado.', ['error' => $e->getMessage()]);
 
             // Operação não é concluída com êxito
             DB::rollBack();
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return back()->withInput()->with('error', 'Usuário não editado!');
         }
       

    }




       // Excluir o usuário do banco de dados
       public function delete(Empresas $empresas)
       {
           try {
               // Excluir o registro do banco de dados
               $empresas->delete();
   
               // Salvar log
               Log::info('Usuário excluído.', ['id' => $empresas->id]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
               return redirect()->route('empresas.index')->with('success', 'Usuário excluído com sucesso!');
           } catch (Exception $e) {
   
               // Salvar log
               Log::info('Usuário não excluído.', ['error' => $e->getMessage()]);
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return redirect()->route('empresas.index')->with('error', 'Usuário não excluído!');
           }
       }

}
