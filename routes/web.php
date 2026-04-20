<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;


Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/dashboard');
        }
    }

    return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {

    Route::get('/inicio', function () {
        return view('user.Inicio');
    })->name('inicio');

   
    Route::get('/agentes', [AgentController::class, 'userIndex'])->name('agentes');

    Route::get('/menu', function () {
        return view('user.Menu');
    })->name('menu');

    Route::get('/soporte', function () {
        return view('user.Soporte');
    })->name('soporte');

});


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [UserController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [UserController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [UserController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{user}', [UserController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update/{user}', [UserController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{user}', [UserController::class, 'destroy'])->name('admin.delete');

    // 🔥 ADMIN (CRUD completo)
    Route::get('/admin/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::get('/admin/agents/create', [AgentController::class, 'create'])->name('agents.create');
    Route::post('/admin/agents/store', [AgentController::class, 'store'])->name('agents.store');
    Route::get('/admin/agents/edit/{agent}', [AgentController::class, 'edit'])->name('agents.edit');
    Route::put('/admin/agents/update/{agent}', [AgentController::class, 'update'])->name('agents.update');
    Route::delete('/admin/agents/delete/{agent}', [AgentController::class, 'destroy'])->name('agents.delete');

});


require __DIR__.'/auth.php';