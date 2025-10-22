<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
route::get('/',function(){
    return redirect()->route('login');
});
route::get('/login',[PageController::class,'login'])->name('login');
route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');
route::get('/pengelolaan',[PageController::class,'pengelolaan'])->name('pengelolaan');
route::get('/profil',[PageController::class,'profil'])->name('profil');    























