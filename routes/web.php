<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\CustosController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Os1Controller;
use App\Http\Controllers\Os2Controller;
use App\Http\Controllers\Os3Controller;
use App\Http\Controllers\Os4Controller;



// Route::get('/', function () {
//     return view('welcome');
// });


//Rotas Publicas 
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'loginAcesso'])->name('login.acesso');
Route::get('/logout', [LoginController::class, 'delete'])->name('login.delete');







//criando um grupo de rotas privadas
Route::group(['middleware' => 'auth'], function () {

//Rota Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// Usuários
Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
//visualizar usuario
Route::get('/view-user/{user}', [UserController::class, 'view'])->name('user.view');
//carrega o cadastrar usuario
Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
//recebe  o cadastro usuario
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
//carrega o editar usuario
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
//recebe o editar usuario
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');
//carregar o editar usuario 
Route::get('/edit-user-password/{user}', [UserController::class, 'editPassword'])->name('user.edit-password');
//recebe o editar usuario
Route::put('/update-user-password/{user}', [UserController::class, 'updatePassword'])->name('user.update-password');
//deleta usuario
Route::delete('/delete-user/{user}', [UserController::class, 'delete'])->name('user.delete');


//Empresa
Route::get('/empresa',[EmpresaController::class, 'index'])->name('empresa.index');
//Visualizar empresa
Route::get('/view-empresa/{empresa}', [EmpresaController::class, 'view'])->name('empresa.view');
//carrega o cadastrar empresa
Route::get('/create-empresa', [EmpresaController::class, 'create'])->name('empresa.create');
//recebe o cadastrar empresa
Route::post('/store-empresa', [EmpresaController::class, 'store'])->name('empresa.store');
//carrega o editar  empresa
Route::get('/edit-empresa/{empresa}', [EmpresaController::class, 'edit'])->name('empresa.edit');
//recebe o editar empresa
Route::put('/update-empresa/{empresa}', [EmpresaController::class, 'update'])->name('empresa.update');
//deleta empresa
Route::delete('/delete-empresa/{empresa}', [EmpresaController::class, 'delete'])->name('empresa.delete');



//Empresa1
Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
//Visualizar empresa
Route::get('/view-empresas/{empresas}', [EmpresasController::class, 'view'])->name('empresas.view');
//carrega o cadastrar empresa
Route::get('/create-empresas', [EmpresasController::class, 'create'])->name('empresas.create');
//recebe o cadastrar empresa
Route::post('/store-empresas', [EmpresasController::class, 'store'])->name('empresas.store');
//carrega o editar  empresa
Route::get('/edit-empresas/{empresas}', [EmpresasController::class, 'edit'])->name('empresas.edit');
//recebe o editar empresa
Route::put('/update-empresas/{empresas}', [EmpresasController::class, 'update'])->name('empresas.update');
//deleta empresa
Route::delete('/delete-empresas/{empresas}', [EmpresasController::class, 'delete'])->name('empresas.delete');




//Colaborador
Route::get('/colaborador',[ColaboradorController::class, 'index'])->name('colaborador.index');
//Visualizar empresa
Route::get('/view-colaborador/{colaborador}',[ColaboradorController::class, 'view'])->name('colaborador.view');
Route::get('/view-colaborador/{colaborador}',[ColaboradorController::class, 'view'])->name('colaborador.view');
//carrega o cadastrar empresa
Route::get('/create-colaborador',[ColaboradorController::class, 'create'])->name('colaborador.create');
//recebe o cadastrar empresa
Route::post('/store-colaborador',[ColaboradorController::class, 'store'])->name('colaborador.store');
//carrega o editar  empresa
Route::get('/edit-colaborador/{colaborador}',[ColaboradorController::class, 'edit'])->name('colaborador.edit');
Route::get('/edit-colaborador/{colaborador}',[ColaboradorController::class, 'edit'])->name('colaborador.edit');
//recebe o editar empresa
Route::put('/update-colaborador/{colaborador}',[ColaboradorController::class, 'update'])->name('colaborador.update');
Route::put('/update-colaborador/{colaborador}',[ColaboradorController::class, 'update'])->name('colaborador.update');
//deleta empresa
Route::delete('/delete-colaborador/{colaborador}', [ColaboradorController::class, 'delete'])->name('colaborador.delete');


//Serviços Gerais
Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos.index');
//Visualizar empresa
Route::get('/view-servicos/{servicos}',[ServicosController::class, 'view'])->name('servicos.view');
Route::get('/view-servicos/{servicos}',[ServicosController::class, 'view'])->name('servicos.view');
//carrega o cadastrar empresa
Route::get('/create-servicos',[ServicosController::class, 'create'])->name('servicos.create');
//recebe o cadastrar empresa
Route::post('/store-servicos',[ServicosController::class, 'store'])->name('servicos.store');
//carrega o editar  empresa
Route::get('/edit-servicos/{servicos}',[ServicosController::class, 'edit'])->name('servicos.edit');
Route::get('/edit-servicos/{servicos}',[ServicosController::class, 'edit'])->name('servicos.edit');
//recebe o editar empresa
Route::put('/update-servicos/{servicos}',[ServicosController::class, 'update'])->name('servicos.update');
Route::put('/update-servicos/{servicos}',[ServicosController::class, 'update'])->name('servicos.update');
//deleta empresa
Route::delete('/delete-servicos/{servicos}', [ServicosController::class, 'delete'])->name('servicos.delete');


//Materiais
Route::get('/materiais',[MateriaisController::class, 'index'])->name('materiais.index');
//Visualizar empresa
Route::get('/view-materiais/{materiais}',[MateriaisController::class, 'view'])->name('materiais.view');
Route::get('/view-materiais/{materiais}',[MateriaisController::class, 'view'])->name('materiais.view');
//carrega o cadastrar empresa
Route::get('/create-materiais',[MateriaisController::class, 'create'])->name('materiais.create');
//recebe o cadastrar empresa
Route::post('/store-materiais',[MateriaisController::class, 'store'])->name('materiais.store');
//carrega o editar  empresa
Route::get('/edit-materiais/{materiais}',[MateriaisController::class, 'edit'])->name('materiais.edit');
Route::get('/edit-materiais/{materiais}',[MateriaisController::class, 'edit'])->name('materiais.edit');
//recebe o editar empresa
Route::put('/update-materiais/{materiais}',[MateriaisController::class, 'update'])->name('materiais.update');
Route::put('/update-materiais/{materiais}',[MateriaisController::class, 'update'])->name('materiais.update');
//deleta empresa
Route::delete('/delete-materiais/{materiais}', [MateriaisController::class, 'delete'])->name('materiais.delete');


//Custo Geral

Route::get('/custos',[CustosController::class, 'index'])->name('custos.index');
//Visualizar empresa
Route::get('/view-custos/{custos}',[CustosController::class, 'view'])->name('custos.view');
Route::get('/view-custos/{custos}',[CustosController::class, 'view'])->name('custos.view');
//carrega o cadastrar empresa
Route::get('/create-custos',[CustosController::class, 'create'])->name('custos.create');
//recebe o cadastrar empresa
Route::post('/store-custos',[CustosController::class, 'store'])->name('custos.store');
//carrega o editar  empresa
Route::get('/edit-custos/{custos}',[CustosController::class, 'edit'])->name('custos.edit');
Route::get('/edit-custos/{custos}',[CustosController::class, 'edit'])->name('custos.edit');
//recebe o editar empresa
Route::put('/update-custos/{custos}',[CustosController::class, 'update'])->name('custos.update');
Route::put('/update-custos/{custos}',[CustosController::class, 'update'])->name('custos.update');
//deleta empresa
Route::delete('/delete-custos/{custos}', [CustosController::class, 'delete'])->name('custos.delete');


//Status

Route::get('/status',[StatusController::class, 'index'])->name('status.index');
//Visualizar empresa
Route::get('/view-status/{status}',[StatusController::class, 'view'])->name('status.view');
Route::get('/view-status/{status}',[StatusController::class, 'view'])->name('status.view');
//carrega o cadastrar empresa
Route::get('/create-status',[StatusController::class, 'create'])->name('status.create');
//recebe o cadastrar empresa
Route::post('/store-status',[StatusController::class, 'store'])->name('status.store');
//carrega o editar  empresa
Route::get('/edit-status/{status}',[StatusController::class, 'edit'])->name('status.edit');
Route::get('/edit-status/{status}',[StatusController::class, 'edit'])->name('status.edit');
//recebe o editar empresa
Route::put('/update-status/{status}',[StatusController::class, 'update'])->name('status.update');
Route::put('/update-status/{status}',[StatusController::class, 'update'])->name('status.update');
//deleta empresa
Route::delete('/delete-status/{status}', [StatusController::class, 'delete'])->name('status.delete');


//OS 1

Route::get('/os1',[Os1Controller::class, 'index'])->name('os1.index');

Route::get('/view-os1/{os1}',[Os1Controller::class, 'view'])->name('os1.view');

Route::get('/create-os1',[Os1Controller::class, 'create'])->name('os1.create');

Route::post('/store-os1',[Os1Controller::class, 'store'])->name('os1.store');

Route::get('/edit-os1/{os1}',[Os1Controller::class, 'edit'])->name('os1.edit');

Route::put('/update-os1/{os1}',[Os1Controller::class, 'update'])->name('os1.update');

Route::delete('/delete-os1/{os1}', [Os1Controller::class, 'delete'])->name('os1.delete');

//OS 2

Route::get('/os2',[Os2Controller::class, 'index'])->name('os2.index');

Route::get('/view-os2/{os2}',[Os2Controller::class, 'view'])->name('os2.view');

Route::get('/create-os2',[Os2Controller::class, 'create'])->name('os2.create');

Route::post('/store-os2',[Os2Controller::class, 'store'])->name('os2.store');

Route::get('/edit-os2/{os2}',[Os2Controller::class, 'edit'])->name('os2.edit');

Route::put('/update-os2/{os2}',[Os2Controller::class, 'update'])->name('os2.update');

Route::delete('/delete-os2/{os2}', [Os2Controller::class, 'delete'])->name('os2.delete');
//OS 3

Route::get('/os3',[Os3Controller::class, 'index'])->name('os3.index');

Route::get('/view-os3/{os3}',[Os3Controller::class, 'view'])->name('os3.view');

Route::get('/create-os3',[Os3Controller::class, 'create'])->name('os3.create');

Route::post('/store-os3',[Os3Controller::class, 'store'])->name('os3.store');

Route::get('/edit-os3/{os3}',[Os3Controller::class, 'edit'])->name('os3.edit');

Route::put('/update-os3/{os3}',[Os3Controller::class, 'update'])->name('os3.update');

Route::delete('/delete-os3/{os3}', [Os3Controller::class, 'delete'])->name('os3.delete');
//OS 2

Route::get('/os4',[Os4Controller::class, 'index'])->name('os4.index');

Route::get('/view-os4/{os4}',[Os4Controller::class, 'view'])->name('os4.view');

Route::get('/create-os4',[Os4Controller::class, 'create'])->name('os4.create');

Route::post('/store-os4',[Os4Controller::class, 'store'])->name('os4.store');

Route::get('/edit-os4/{os4}',[Os4Controller::class, 'edit'])->name('os4.edit');

Route::put('/update-os4/{os4}',[Os4Controller::class, 'update'])->name('os4.update');

Route::delete('/delete-os4/{os4}', [Os4Controller::class, 'delete'])->name('os4.delete');




//Agenda



// Linha do tempo
//visualizar linha do tempo
Route::get('/index-timeline', [TimelineController::class, 'index'])->name('timeline.index');

});
