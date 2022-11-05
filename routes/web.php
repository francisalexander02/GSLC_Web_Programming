<?php

use App\Models\Problem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProblemController::class,'index']);

Route::get('/problems/{id}',function($id){
    $problem = Problem::find($id);
    if($problem){
        return view('problem',[
            'problem'=>$problem
        ]);
    }else{
        abort('404');
    }
});
