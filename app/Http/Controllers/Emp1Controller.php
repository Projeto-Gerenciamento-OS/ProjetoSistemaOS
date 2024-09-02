<?php

namespace App\Http\Controllers;

use App\Http\Requests\Emp1Request;

use App\Models\Emp1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;




class Emp1Controller extends Controller
{
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $emp1= Emp1::when($request->has('descricao'), function ($Query) use ($request){
            $Query->where('descricao', 'like', '%' . $request->descricao . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('emp1.index', ['emp1', 'emp1'=> $emp1,'descricao'=>$request->descricao]);
    }

    //mostrar detalhes do usuario(view)

    public function view(Emp1 $emp1)
    {
        //Carrega a View
        return view( 'emp1.view', ['menu' => 'emp1','emp1'=> $emp1]);

        
    }


    // Carregar o formulário cadastrar novo usuário
    public function create()
    {

        // Carregar a VIEW
        return view('emp1.create', ['emp1']);
    }


     // Cadastrar no banco de dados o novo curso
     public function store(Emp1Request $request)
     {
 
         // Validar o formulário
         $request->validated();
 
         // Marca o ponto inicial de uma transação
         DB::beginTransaction();
 
         try {
 
             // Cadastrar no banco de dados na tabela usuários
             $emp1 = Emp1::create([
                 'descricao' => $request->descricao,

             ]);
 
             // Salvar log
             Log::info('Usuário cadastrado.', ['id' => $emp1->id]);
 
             // Operação é concluída com êxito
             DB::commit();
 
             // Redirecionar o usuário, enviar a mensagem de sucesso
             return redirect()->route('emp1.view', ['emp1' => $emp1->id])->with('success', 'Usuário cadastrado com sucesso!');
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
    public function edit(Emp1 $emp1)
    {
        // dd($empresas);
        // Carregar a VIEW
        // return view('empresas.edit', ['menu' => 'empresas', 'empresas' => $empresas]);
        return view('emp1.edit',['emp1'=> $emp1]);
    }

   
    public function update(Request $request, Emp1 $emp1)
    {
        //  dd("editar no banco dados");

        // dd($empresas);
   
          // Validar o formulário
        //  $request->validated();

         // Marca o ponto inicial de uma transação
         DB::beginTransaction();
 
         try {
     
             // Editar as informações do registro no banco de dados
             $emp1->update([
                 'descricao' => $request->descricao,
 
             ]);
 
             // Salvar log
             Log::info('Usuário editado.', ['emp1' => $emp1->id]);
 
             // Operação é concluída com êxito
             DB::commit();
 
             // dd($empresas);
 
             // Redirecionar o usuário, enviar a mensagem de sucesso

            return redirect()->route('emp1.view',['emp1'=>$emp1->id])->with('sucsess', 'empresas editada com sucesso!');
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
       public function delete(Emp1 $emp1)
       {
           try {
               // Excluir o registro do banco de dados
               $emp1->delete();
   
               // Salvar log
               Log::info('Usuário excluído.', ['id' => $emp1->id]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
               return redirect()->route('emp1.index')->with('success', 'Usuário excluído com sucesso!');
           } catch (Exception $e) {
   
               // Salvar log
               Log::info('Usuário não excluído.', ['error' => $e->getMessage()]);
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return redirect()->route('emp1.index')->with('error', 'Usuário não excluído!');
           }
       }

}
