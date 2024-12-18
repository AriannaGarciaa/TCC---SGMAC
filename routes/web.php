<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Redireciona para login se não autenticado
Route::get('/', function () {
    return redirect()->route('login');
});

// Rotas personalizadas de Login e Logout
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'logar'])->name('logar');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Grupo de rotas protegidas por middleware de autenticação
Route::group(['middleware' => 'auth'], function () {
    Route::get('/index', function () {
        return view('welcome'); // Página protegida após o login
    })->name('index');
});

// Verifica as rotas padrão de autenticação
Auth::routes();
