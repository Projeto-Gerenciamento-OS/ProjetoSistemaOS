<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\Emp2Controller;
use App\Http\Controllers\Emp1Controller;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\CadGeralController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\CustosController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\CliController;
use App\Http\Controllers\Os1Controller;
use App\Http\Controllers\OSsController;
use App\Http\Controllers\Os2Controller;
use App\Http\Controllers\Os3Controller;
use App\Http\Controllers\Os4Controller;
use App\Http\Controllers\FullCalenderController;



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
Route::get('/view-user/{user}', [UserController::class, 'view'])->name('user.view');
Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');
Route::get('/edit-user-password/{user}', [UserController::class, 'editPassword'])->name('user.edit-password');
Route::put('/update-user-password/{user}', [UserController::class, 'updatePassword'])->name('user.update-password');
Route::delete('/delete-user/{user}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/empresas',[EmpresasController::class, 'index'])->name('empresas.index');

//Empresa
Route::get('/emp2',[Emp2Controller::class, 'index'])->name('emp2.index');
Route::get('/view-emp2/{emp2}', [Emp2Controller::class, 'view'])->name('emp2.view');
Route::get('/create-emp2', [Emp2Controller::class, 'create'])->name('emp2.create');
Route::post('/store-emp2', [Emp2Controller::class, 'store'])->name('emp2.store');
Route::get('/edit-emp2/{emp2}', [Emp2Controller::class, 'edit'])->name('emp2.edit');
Route::put('/update-emp2/{emp2}', [Emp2Controller::class, 'update'])->name('emp2.update');
Route::delete('/delete-emp2/{emp2}', [Emp2Controller::class, 'delete'])->name('emp2.delete');


//Empresa1
Route::get('/emp1', [Emp1Controller::class, 'index'])->name('emp1.index');
Route::get('/view-emp1/{emp1}', [Emp1Controller::class, 'view'])->name('emp1.view');
Route::get('/create-emp1', [Emp1Controller::class, 'create'])->name('emp1.create');
Route::post('/store-emp1', [Emp1Controller::class, 'store'])->name('emp1.store');
Route::get('/edit-emp1/{emp1}', [Emp1Controller::class, 'edit'])->name('emp1.edit');
Route::put('/update-emp1/{emp1}', [Emp1Controller::class, 'update'])->name('emp1.update');
Route::delete('/delete-emp1/{emp1}', [Emp1Controller::class, 'delete'])->name('emp1.delete');


//Colaborador
Route::get('/colaborador',[ColaboradorController::class, 'index'])->name('colaborador.index');
Route::get('/view-colaborador/{colaborador}',[ColaboradorController::class, 'view'])->name('colaborador.view');
Route::get('/create-colaborador',[ColaboradorController::class, 'create'])->name('colaborador.create');
Route::post('/store-colaborador',[ColaboradorController::class, 'store'])->name('colaborador.store');
Route::get('/edit-colaborador/{colaborador}',[ColaboradorController::class, 'edit'])->name('colaborador.edit');
Route::put('/update-colaborador/{colaborador}',[ColaboradorController::class, 'update'])->name('colaborador.update');
Route::delete('/delete-colaborador/{colaborador}', [ColaboradorController::class, 'delete'])->name('colaborador.delete');

Route::get('/cadGeral', [CadGeralController::class, 'index'])->name('cadGeral.index');

//Serviços Gerais
Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');
Route::get('/view-servico/{servico}',[ServicoController::class, 'view'])->name('servico.view');
Route::get('/create-servico',[ServicoController::class, 'create'])->name('servico.create');
Route::post('/store-servico',[ServicoController::class, 'store'])->name('servico.store');
Route::get('/edit-servico/{servico}',[ServicoController::class, 'edit'])->name('servico.edit');
Route::put('/update-servico/{servico}',[ServicoController::class, 'update'])->name('servico.update');
Route::delete('/delete-servico/{servico}', [ServicoController::class, 'delete'])->name('servico.delete');


//Materiais
Route::get('/materiais',[MateriaisController::class, 'index'])->name('materiais.index');
Route::get('/view-materiais/{materiais}',[MateriaisController::class, 'view'])->name('materiais.view');
Route::get('/create-materiais',[MateriaisController::class, 'create'])->name('materiais.create');
Route::post('/store-materiais',[MateriaisController::class, 'store'])->name('materiais.store');
Route::get('/edit-materiais/{materiais}',[MateriaisController::class, 'edit'])->name('materiais.edit');
Route::put('/update-materiais/{materiais}',[MateriaisController::class, 'update'])->name('materiais.update');

//deleta empresa
Route::delete('/delete-materiais/{materiais}', [MateriaisController::class, 'delete'])->name('materiais.delete');

//Custo Geral
Route::get('/custos',[CustosController::class, 'index'])->name('custos.index');
Route::get('/view-custos/{custos}',[CustosController::class, 'view'])->name('custos.view');
Route::get('/create-custos',[CustosController::class, 'create'])->name('custos.create');
Route::post('/store-custos',[CustosController::class, 'store'])->name('custos.store');
Route::get('/edit-custos/{custos}',[CustosController::class, 'edit'])->name('custos.edit');
Route::put('/update-custos/{custos}',[CustosController::class, 'update'])->name('custos.update');
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

//Setor
Route::get('/setor',[SetorController::class, 'index'])->name('setor.index');
Route::get('/view-setor/{setor}',[SetorController::class, 'view'])->name('setor.view');
Route::get('/create-setor',[SetorController::class, 'create'])->name('setor.create');
Route::post('/store-setor',[SetorController::class, 'store'])->name('setor.store');
Route::get('/edit-setor/{setor}',[SetorController::class, 'edit'])->name('setor.edit');
Route::put('/update-setor/{setor}',[SetorController::class, 'update'])->name('setor.update');
Route::delete('/delete-setor/{setor}', [SetorController::class, 'delete'])->name('setor.delete');

//Cliente
Route::get('/cli',[CliController::class, 'index'])->name('cli.index');
Route::get('/view-cli/{cli}',[CliController::class, 'view'])->name('cli.view');
Route::get('/create-cli',[CliController::class, 'create'])->name('cli.create');
Route::post('/store-cli',[CliController::class, 'store'])->name('cli.store');
Route::get('/edit-cli/{cli}',[CliController::class, 'edit'])->name('cli.edit');
Route::put('/update-cli/{cli}',[CliController::class, 'update'])->name('cli.update');
Route::delete('/delete-cli/{cli}', [CliController::class, 'delete'])->name('cli.delete');

Route::get('/os',[OSsController::class, 'index'])->name('os.index');

Route::prefix('os1')->name('os1.')->group(function () {

Route::get('/', [Os1Controller::class, 'index'])->name('index');
Route::get('/create', [Os1Controller::class, 'create'])->name('create');
Route::post('/store', [Os1Controller::class, 'store'])->name('store');
Route::get('/view/{os1}', [Os1Controller::class, 'view'])->name('view');
Route::get('/edit/{os1}', [Os1Controller::class, 'edit'])->name('edit');
Route::put('/update/{os1}', [Os1Controller::class, 'update'])->name('update');
Route::delete('/update/{os1}', [Os1Controller::class, 'delete'])->name('delete');

// Rotas para OS2 dentro de OS1
    Route::prefix('/os2')->name('os2.')->group(function () {
        Route::get('/create', [Os2Controller::class, 'create'])->name('create');
        Route::get('/view/{os2}',[Os3Controller::class, 'view'])->name('view');
        Route::post('/store', [Os2Controller::class, 'store'])->name('store');
        Route::get('/edit/{os2}', [Os2Controller::class, 'edit'])->name('edit');
        Route::put('/update/{os2}', [Os2Controller::class, 'update'])->name('update');
        Route::delete('/delete/{os2}', [Os2Controller::class, 'delete'])->name('delete');
    });

    // Rotas para OS3 dentro de OS1
    Route::prefix('/os3')->name('os3.')->group(function () {
        Route::get('/create', [Os3Controller::class, 'create'])->name('create');
        Route::get('/view/{os3}',[Os3Controller::class, 'view'])->name('view');
        Route::post('/store', [Os3Controller::class, 'store'])->name('store');
        Route::get('/edit/{os3}', [Os3Controller::class, 'edit'])->name('edit');
        Route::put('/update/{os3}', [Os3Controller::class, 'update'])->name('update');
        Route::delete('/delete/{os3}', [Os3Controller::class, 'delete'])->name('delete');
    });

    // Rotas para OS3 dentro de OS1
    Route::prefix('/os4')->name('os4.')->group(function () {
        Route::get('/create', [Os4Controller::class, 'create'])->name('create');
        Route::get('/view/{os4}',[Os3Controller::class, 'view'])->name('view');
        Route::post('/store', [Os4Controller::class, 'store'])->name('store');
        Route::get('/{os4}/edit', [Os4Controller::class, 'edit'])->name('edit');
        Route::put('/{os4}', [Os4Controller::class, 'update'])->name('update');
        Route::delete('/{os4}', [Os3Controller::class, 'delete'])->name('delete');
    });
});
//Agenda

Route::get('/fullcalender', [FullCalenderController::class, 'index'])->name('fullcalender.index');
Route::post('/fullcalenderAjax', [FullCalenderController::class, 'ajax']);

// Linha do tempo
Route::get('/index-timeline', [TimelineController::class, 'index'])->name('timeline.index');
});

