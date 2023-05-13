<?php

use App\Http\Controllers\UserController;
use App\Models\Acc_Added;
use App\Models\Accessory;
use App\Models\Buy_Animal;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Marriage;
use App\Models\Trainer;
use App\Models\Doctor;
use App\Models\Food_Added;
use App\Models\Shelter;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user',function(){

return User::all();

});

// Route::post('/form',function(){

//     return User::create([

//         'us_name'=> request('us_name'),
//         'email' =>request('email'),
//         'password' =>request('password'),
//         'gender' =>request('gender'),
//         'age' =>request('age'),
//         'phone' =>request('phone'),
//         // 'm_id'=>Marriage::pluck('marriage_id')->random(),
//         // 'dr_id'=>Doctor::pluck('doctor_id')->random(),
//         // 'tr_id'=>Trainer::pluck('trainer_id')->random(),

//     ]);
// });

// Route::post('/form',[UserController::class]);


Route::get('/food',function(){

    return Food::all();
    return Food_Added::all();
    });


Route::get('/accessories',function(){

        return Accessory::all();
        return Acc_Added::all();
        });


// Route::get('/buy__animals',function(){

//  return Buy_Animal::all();
//  });

    
