<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{
    //listar os usuarios
    public function index(Request $request)
    {
        // Recuperar os registros do banco dados
        $users= User::when($request->has('nome'), function ($Query) use ($request){
            $Query->where('nome', 'like', '%' . $request->nome . '%');
        })
        
        ->orderBy('created_at')
        ->paginate(5)
        ->withQueryString();

        //Carregar a View
        return view('users.index', ['users', 'users'=> $users,'nome'=>$request->nome]);
    }

    //mostrar detalhes do usuario(view)
    public function view(User $user){
        //Carrega a View
        return view( 'users.view', ['users', 'users' => $user]);
    }

    // Carregar o formulário cadastrar novo usuário
    public function create(){


        //recupera os papeis
        $roles = Role::pluck('name')->all();

        // Carregar a VIEW
        return view('users.create', ['users','roles'=>$roles]);
    }


     // Cadastrar no banco de dados o novo curso
    public function store(UserRequest $request){

        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Cadastrar no banco de dados na tabela usuários
            $user = User::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'password' => $request->password,
                'tipo' => $request->tipo,
                'id_emp2' => $request->id_emp2
            ]);

            //cadastrar um papel para o usuario
            $user->assignRole($request->roles);

            // Salvar log
            Log::info('Usuário cadastrado.', ['id' => $user->id, $user]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('user.view', ['user' => $user->id])->with('success', 'Usuário cadastrado com sucesso!');
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
    public function edit(User $user){

        //recupera os papeis
        $roles = Role::pluck('name')->all();


        //recuperar os papeis do usuario
        $userRoles=$user->roles->pluck('name')->first();

        // Salvar log
        Log::info('Carregar formulário editar usuário.', ['id' => $user->id, 'action_user_id' => Auth::id()]);


        // Carregar a VIEW
        return view('users.edit', ['users', 'user' => $user,'roles'=> $roles, 'userRoles'=>$userRoles]);
    }

    // Editar no banco de dados o usuário
    public function update(UserRequest $request, User $user){
        // Validar o formulário
        $request->validated();

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $user->update([
                'nome' => $request->nome,
                'email' => $request->email,
                'password' => $request->password,
                'tipo' => $request->tipo,
                'id_emp2' => $request->id_emp2,
            ]);

            //Editar um papel para o usuario
            $user->syncRoles($request->roles);

            // Salvar log
            Log::info('Usuário editado.', ['id' => $user->id]);

            // Operação é concluída com êxito
            DB::commit();

            // dd($user);
       

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('user.view', ['user' => $request->user])->with('success', 'Usuário editado com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Usuário não editado.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o usuário, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Usuário não editado!');
        }
    }


    // Carregar o formulário editar senha do usuário
    public function editPassword(User $user){
        // Carregar a VIEW
        return view('users.editPassword', ['users', 'user' => $user]);
    }
     
    // Editar no banco de dados a senha do usuário 
    public function updatePassword(Request $request, User $user){

        // Validar o formulário
        $request->validate([
            'password' => 'required|min:6',
        ], [
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos :min caracteres.',
        ]);

        // Marca o ponto inicial de uma transação
        DB::beginTransaction();

        try {

            // Editar as informações do registro no banco de dados
            $user->update([
                'password' => $request->password,
            ]);

            // Salvar log
            Log::info('Senha do usuário editada.', ['id' => $user->id]);

            // Operação é concluída com êxito
            DB::commit();

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('user.view', ['user' => $request->user])->with('success', 'Senha do usuário editada com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Senha do usuário não editada.', ['error' => $e->getMessage()]);

            // Operação não é concluída com êxito
            DB::rollBack();

            // Redirecionar o usuário, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Senha do usuário não editada!');
        }
    }

    // Excluir o usuário do banco de dados
    public function delete(User $user){
        try {
            // Excluir o registro do banco de dados
            $user->delete();


             //Remover todos os papeis atribuidos ao usuario
             $user->syncRoles([]);

            // Salvar log
            Log::info('Usuário excluído.', ['id' => $user->id]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('user.index')->with('success', 'Usuário excluído com sucesso!');
        } catch (Exception $e) {

            // Salvar log
            Log::info('Usuário não excluído.', ['error' => $e->getMessage()]);

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('course.index')->with('error', 'Usuário não excluído!');
        }
    }

}
