<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/articles/create/', function () {
    return view('articles/create');
});

Route::post('/articles', function(Request $request) {
    
    //리퀘스트의 validate를 이용하는 방법
    $request->validate([
        'body' => [
            'required',
            'string',
            'max:255',
        ] 
    ]);


    // 空いていないし、文字列だし、255字を超えたらダメだ。
    // //전통적인 php방법
    // $body = $_POST['body'];

    // if(!$body) {
    //     // 이전화면으로 리다이렉트
    //     return redirect()->back();
    // }

    // if(!is_string($body)) {
    //     return redirect()->back();
    // }

    // if(strlen($body) > 255) {
    //     return redirect()->back();
    // }


    return 'hello';
});