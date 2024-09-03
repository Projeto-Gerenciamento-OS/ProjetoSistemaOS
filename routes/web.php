<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\Emp2Controller;
use App\Http\Controllers\Emp1Controller;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\CustosController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\SetorController;
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
Route::get('/emp2',[Emp2Controller::class, 'index'])->name('emp2.index');
//Visualizar empresa
Route::get('/view-emp2/{emp2}', [Emp2Controller::class, 'view'])->name('emp2.view');
//carrega o cadastrar empresa
Route::get('/create-emp2', [Emp2Controller::class, 'create'])->name('emp2.create');
//recebe o cadastrar empresa
Route::post('/store-emp2', [Emp2Controller::class, 'store'])->name('emp2.store');
//carrega o editar  empresa
Route::get('/edit-emp2/{emp2}', [Emp2Controller::class, 'edit'])->name('emp2.edit');
//recebe o editar empresa
Route::put('/update-emp2/{emp2}', [Emp2Controller::class, 'update'])->name('emp2.update');
//deleta empresa
Route::delete('/delete-emp2/{emp2}', [Emp2Controller::class, 'delete'])->name('emp2.delete');


//Empresa1
Route::get('/emp1', [Emp1Controller::class, 'index'])->name('emp1.index');
//Visualizar empresa
Route::get('/view-emp1/{emp1}', [Emp1Controller::class, 'view'])->name('emp1.view');
//carrega o cadastrar empresa
Route::get('/create-emp1', [Emp1Controller::class, 'create'])->name('emp1.create');
//recebe o cadastrar empresa
Route::post('/store-emp1', [Emp1Controller::class, 'store'])->name('emp1.store');
//carrega o editar  empresa
Route::get('/edit-emp1/{emp1}', [Emp1Controller::class, 'edit'])->name('emp1.edit');
//recebe o editar empresa
Route::put('/update-emp1/{emp1}', [Emp1Controller::class, 'update'])->name('emp1.update');
//deleta empresa
Route::delete('/delete-emp1/{emp1}', [Emp1Controller::class, 'delete'])->name('emp1.delete');




//Colaborador
Route::get('/colaborador',[ColaboradorController::class, 'index'])->name('colaborador.index');
//Visualizar empresa
Route::get('/view-colaborador/{colaborador}',[ColaboradorController::class, 'view'])->name('colaborador.view');
//carrega o cadastrar empresa
Route::get('/create-colaborador',[ColaboradorController::class, 'create'])->name('colaborador.create');
//recebe o cadastrar empresa
Route::post('/store-colaborador',[ColaboradorController::class, 'store'])->name('colaborador.store');
//carrega o editar  empresa
Route::get('/edit-colaborador/{colaborador}',[ColaboradorController::class, 'edit'])->name('colaborador.edit');

//recebe o editar empresa
Route::put('/update-colaborador/{colaborador}',[ColaboradorController::class, 'update'])->name('colaborador.update');

//deleta empresa
Route::delete('/delete-colaborador/{colaborador}', [ColaboradorController::class, 'delete'])->name('colaborador.delete');


//Serviços Gerais
Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');
//Visualizar empresa
Route::get('/view-servico/{servico}',[ServicoController::class, 'view'])->name('servico.view');

//carrega o cadastrar empresa
Route::get('/create-servico',[ServicoController::class, 'create'])->name('servico.create');
//recebe o cadastrar empresa
Route::post('/store-servico',[ServicoController::class, 'store'])->name('servico.store');
//carrega o editar  empresa
Route::get('/edit-servico/{servico}',[ServicoController::class, 'edit'])->name('servico.edit');

//recebe o editar empresa
Route::put('/update-servico/{servico}',[ServicoController::class, 'update'])->name('servico.update');

//deleta empresa
Route::delete('/delete-servico/{servico}', [ServicoController::class, 'delete'])->name('servico.delete');


//Materiais
Route::get('/materiais',[MateriaisController::class, 'index'])->name('materiais.index');
//Visualizar empresa
Route::get('/view-materiais/{materiais}',[MateriaisController::class, 'view'])->name('materiais.view');

//carrega o cadastrar empresa
Route::get('/create-materiais',[MateriaisController::class, 'create'])->name('materiais.create');
//recebe o cadastrar empresa
Route::post('/store-materiais',[MateriaisController::class, 'store'])->name('materiais.store');
//carrega o editar  empresa

Route::get('/edit-materiais/{materiais}',[MateriaisController::class, 'edit'])->name('materiais.edit');
//recebe o editar empresa
Route::put('/update-materiais/{materiais}',[MateriaisController::class, 'update'])->name('materiais.update');

//deleta empresa
Route::delete('/delete-materiais/{materiais}', [MateriaisController::class, 'delete'])->name('materiais.delete');


//Custo Geral

Route::get('/custos',[CustosController::class, 'index'])->name('custos.index');
//Visualizar empresa
Route::get('/view-custos/{custos}',[CustosController::class, 'view'])->name('custos.view');

//carrega o cadastrar empresa
Route::get('/create-custos',[CustosController::class, 'create'])->name('custos.create');
//recebe o cadastrar empresa
Route::post('/store-custos',[CustosController::class, 'store'])->name('custos.store');
//carrega o editar  empresa
Route::get('/edit-custos/{custos}',[CustosController::class, 'edit'])->name('custos.edit');

//recebe o editar empresa
Route::put('/update-custos/{custos}',[CustosController::class, 'update'])->name('custos.update');

//deleta empresa
Route::delete('/delete-custos/{custos}', [CustosController::class, 'delete'])->name('custos.delete');


//Status

Route::get('/status',[StatusController::class, 'index'])->name('status.index');
Route::get('/view-status/{status}',[StatusController::class, 'view'])->name('status.view');
Route::get('/create-status',[StatusController::class, 'create'])->name('status.create');
Route::post('/store-status',[StatusController::class, 'store'])->name('status.store');
Route::get('/edit-status/{status}',[StatusController::class, 'edit'])->name('status.edit');
Route::put('/update-status/{status}',[StatusController::class, 'update'])->name('status.update');
Route::delete('/delete-status/{status}', [StatusController::class, 'delete'])->name('status.delete');

//Turno
Route::get('/turno',[TurnoController::class, 'index'])->name('turno.index');
Route::get('/view-turno/{turno}',[TurnoController::class, 'view'])->name('turno.view');
Route::get('/create-turno',[TurnoController::class, 'create'])->name('turno.create');
Route::post('/store-turno',[TurnoController::class, 'store'])->name('turno.store');
Route::get('/edit-turno/{turno}',[TurnoController::class, 'edit'])->name('turno.edit');
Route::put('/update-turno/{turno}',[TurnoController::class, 'update'])->name('turno.update');
Route::delete('/delete-turno/{turno}', [TurnoController::class, 'delete'])->name('turno.delete');


//Turno
Route::get('/setor',[SetorController::class, 'index'])->name('setor.index');
//Visualizar empresa
Route::get('/view-setor/{setor}',[SetorController::class, 'view'])->name('setor.view');

//carrega o cadastrar empresa
Route::get('/create-setor',[SetorController::class, 'create'])->name('setor.create');
//recebe o cadastrar empresa
Route::post('/store-setor',[SetorController::class, 'store'])->name('setor.store');
//carrega o editar  empresa

Route::get('/edit-setor/{setor}',[SetorController::class, 'edit'])->name('setor.edit');
//recebe o editar empresa

Route::put('/update-setor/{setor}',[SetorController::class, 'update'])->name('setor.update');
//deleta empresa
Route::delete('/delete-setor/{setor}', [SetorController::class, 'delete'])->name('setor.delete');

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

Route::get('/agenda',[AgendaController::class, 'index'])->name('agenda.index');

Route::get('/view-agenda/{agenda}',[AgendaController::class, 'view'])->name('agenda.view');

Route::get('/create-agenda',[AgendaController::class, 'create'])->name('agenda.create');

Route::post('/store-agenda',[AgendaController::class, 'store'])->name('agenda.store');

Route::get('/edit-agenda/{agenda}',[AgendaController::class, 'edit'])->name('agenda.edit');

Route::put('/update-agenda/{agenda}',[AgendaController::class, 'update'])->name('agenda.update');

Route::delete('/delete-agenda/{agenda}', [AgendaController::class, 'delete'])->name('agenda.delete');



// Linha do tempo
//visualizar linha do tempo
Route::get('/index-timeline', [TimelineController::class, 'index'])->name('timeline.index');

});
