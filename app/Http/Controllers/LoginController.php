<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    //login
    public function index()
    {
        //carregar view
        return view('login.index');
    }

    public function loginAcesso(LoginRequest $request)
    {
        
          //validar o formulario
          $request->validated();

          $autenticated= Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);

          if(!$autenticated){

           // Redirecionar o usuário para página anterior "login", enviar a mensagem de erro

           return back()->withInput()->with('error', 'E-mail ou senha inválido!');
          }
           // Redirecionar o usuário
           return redirect()->route('dashboard.index');



           
         // Obter o usuário autenticado
        $user = Auth::user();
        $user = User::find($user->id);

        // Verificar se a permissões é Super Admin, tem acesso a todas as páginas
        if($user->hasRole('Super Admin')){

            // O usuário tem todas as permissões
            $permissions = Permission::pluck('name')->toArray();
        }else{

            // Recuperar no banco de dados as permissões que o papel possui
            $permissions = $user->getPermissionsViaRoles()->pluck('name')->toArray();
        }

    }

 


    //Realizar Logoff
    public function delete()
    {
        //Deslogar o usuario
        Auth::logout();

        //Redirecionar o usuario, enviar a mensagem de sucesso.
        return redirect()->route('login.index')->with('sucess','Deslogado com sucesso');
    }

}
