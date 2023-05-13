<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Doctor;
use App\Models\Get_Rid_Of_Animal;
use App\Models\Marriage;
use App\Models\Trainer;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('first');

});


// if(session('id')!=0){


//  Route::get('/buy', [App\Http\Controllers\BuyController::class, 'buy_a']);

//  Route::get('/bdetails/{id}', [App\Http\Controllers\BuyController::class, 'bdet'])->name('animal.detail');

Route::get('/getrid', [App\Http\Controllers\GetController::class, 'get']);
Route::post('/getform', [App\Http\Controllers\GetController::class, 'getrids'])->name('getform');

Route::get('/marrform', [App\Http\Controllers\MarriageFormController::class, 'marf']);


Route::post('/add_rate' , [App\Http\Controllers\RatingController::class , 'add'])->name('add_rate');

Route::post('/add_rate_food' , [App\Http\Controllers\RatingController::class , 'adding'])->name('add_rate_food');

Route::get('/foods/{foodd_id}' , [App\Http\Controllers\WishingController::class , 'wish'])->name('foods');

Route::get('/accs/{accsse_id}' , [App\Http\Controllers\WishingController::class , 'wishing'])->name('accs');

Route::post('/form',[App\Http\Controllers\UserController::class , 'information'],);
Route::get('/register',[App\Http\Controllers\UserController::class , 'signup']);
Route::get('/cart' , [App\Http\Controllers\CartController::class , 'cart'])->name('cart');
Route::get('/add_to_cart/{f_id}' , [App\Http\Controllers\CartController::class , 'addToCart'])->name('add_to_cart');

Route::get('/final_purchase' , [App\Http\Controllers\CartController::class , 'carts']);


// Route::get('/purchase/{f_id}' , [App\Http\Controllers\CartController::class , 'test2']);
Route::post('/purchase' , [App\Http\Controllers\CartController::class , 'test2']);

Route::post('/purchases' , [App\Http\Controllers\CartController::class , 'test3']);


Route::get('/add_cart/{accs_id}' , [App\Http\Controllers\CartController::class , 'addToCaart'])->name('add_cart');
Route::get('/delete_cart/{cart_id}' , [App\Http\Controllers\CartController::class , 'deleteCart']);
Route::get('/pay' , [App\Http\Controllers\PayementController::class , 'payment'])->name('payment');
// Route::post('/sp' , [App\Http\Controllers\PayementController::class , 'payinfo'])->name('payinfo');

Route::post('/sp' , [App\Http\Controllers\PayementController::class , 'payments'])->name('payments');

Route::get('/logoutt' , [App\Http\Controllers\UserController::class , 'logout'])->name('logoutt');
Route::post('/send_message' , [App\Http\Controllers\MarriageController::class , 'sendMessage'])->name('sendMessage');
Route::post('/comment' , [App\Http\Controllers\RatingController::class , 'comment'])->name('comment');


Route::post('/commentfood' , [App\Http\Controllers\RatingController::class , 'commentfoodd'])->name('commentfood');

Route::get('/oders_admin' , [App\Http\Controllers\OrderAdminController::class , 'getOrders'])->name('adminorders');
Route::get('/profileadmin' , [App\Http\Controllers\ProfileAdminController::class , 'profileadmin'])->name('profileadmin');
Route::get('/rform' , [App\Http\Controllers\ReserveController::class , 'reserve'])->name('rform');
Route::get('/reserveform/{id}' , [App\Http\Controllers\ReserveConroller::class , 'reserve'])->name('reserveform');
Route::post('/reservesform' , [App\Http\Controllers\ReserveConroller::class , 'res'])->name('reservesform');
Route::get('/drreservations' , [App\Http\Controllers\ReserveConroller::class , 'returnRecerve'])->name('drreservations');


Route::get('/trreservations' , [App\Http\Controllers\ReserveConroller::class , 'returnRecerve2'])->name('trreservations');
Route::post('/pp' , [App\Http\Controllers\PpayPayementController::class , 'paypet'])->name('paypet');
Route::get('/logouttt' , [App\Http\Controllers\LogineController::class , 'logout'])->name('logouttt');
Route::get('/first_emp' , [App\Http\Controllers\LogineController::class , 'emp_f'])->name('first_emp');
Route::post('/reservetrainerform' , [App\Http\Controllers\ReserveConroller::class , 'reser'])->name('reservetrainerform');
Route::get('/oders_admin' , [App\Http\Controllers\OrderAdminController::class , 'getOrders'])->name('adminorders');
Route::get('/ppay/{pet_id}' , [App\Http\Controllers\PpayController::class , 'preserv'])->name('petpayment');
Route::post('/petpay' , [App\Http\Controllers\PpayController::class , 'petpay'])->name('petpay');

// Route::get('/reservetrainer/{id}' , [App\Http\Controllers\ReserveConroller::class , 'reservetraine'])->name('reservetrainer');

Route::get('/delete_cartt/{cart_id}' , [App\Http\Controllers\PaymentController::class , 'deletepay']);
Route::get('/profileadmin' , [App\Http\Controllers\ProfileAdminController::class , 'profileAdmin'])->name('profileAdmin');
Route::get('/reservetrainer/{id}' , [App\Http\Controllers\TrainerController::class , 'reservetraine'])->name('reservetrainer/{id}');
Route::get('/course' , [App\Http\Controllers\CourseController::class , 'courses'])->name('course');
Route::get('/store' , [App\Http\Controllers\StoreController::class , 'stores'])->name('store');
Route::get('/doctor' , [App\Http\Controllers\DoctorController::class , 'doctors'])->name('doctor');
Route::get('/trainer' , [App\Http\Controllers\TrainerController::class , 'trainers'])->name('trainer');
Route::get('/food' , [App\Http\Controllers\FoodController::class , 'foods'])->name('food');
Route::get('/buy', [App\Http\Controllers\BuyController::class, 'buy_a']);
Route::get('/first' , [App\Http\Controllers\UserController::class , 'user_login']);
Route::get('/marriage', [App\Http\Controllers\MarriageController::class, 'mar']);
  Route::get('/bdetails/{id}', [App\Http\Controllers\BDetailsController::class, 'bdet']);
  Route::get('/accessories' , [App\Http\Controllers\AccessoriesController::class , 'aacessory'])->name('accessories');
  Route::get('/accessories_details/{id}', [App\Http\Controllers\AccessoriesController::class, 'adetails']);

  Route::get('/foods_detail/{id}', [App\Http\Controllers\FoodController::class, 'fdetails']);
// }
Route::post('/contact' , [App\Http\Controllers\ContactController::class , 'contact'])->name('contact');

// else{
  Route::get('/viewdoc', [App\Http\Controllers\UpdateController::class, 'viewdoc']);

  Route::get('/viewtrainer', [App\Http\Controllers\UpdateController::class, 'viewtrainer']);

  Route::get('/updatefoodform/{id}', [App\Http\Controllers\UpdateController::class, 'viewformupdate']);




  Route::get('/updateaccform/{id}', [App\Http\Controllers\UpdateController::class, 'viewformaccupdate']);



  Route::get('/updatefood', [App\Http\Controllers\UpdateController::class, 'viewfood']);





  Route::get('/viewacc', [App\Http\Controllers\UpdateController::class, 'viewacc']);

  

  Route::get('/updatefooddetails/{id}', [App\Http\Controllers\UpdateController::class, 'fooddet']);



  Route::get('/viewaccdetails/{id}', [App\Http\Controllers\UpdateController::class, 'accdet']);


  Route::get('/cart/{id}', [App\Http\Controllers\CartController::class, 'increase']);

  Route::get('/final_purchase', [App\Http\Controllers\CartController::class, 'purchase']);


  // Route::get('/accessories_details', [App\Http\Controllers\RatingController::class, 'show_comments']);


  Route::get('/accept/{id}', [App\Http\Controllers\GetController::class, 'accept']);
  Route::get('/reject/{id}', [App\Http\Controllers\GetController::class, 'reject']);


  Route::get('/doccounter', [App\Http\Controllers\ReserveConroller::class, 'precent']);


  Route::get('/trainercounter', [App\Http\Controllers\ReserveConroller::class, 'precenttr']);

  Route::get('/counts', [App\Http\Controllers\ReserveConroller::class, 'precenttr']);


  Route::get('/wish', [App\Http\Controllers\WishingController::class, 'appearwish']);


  // Route::get('/wish', [App\Http\Controllers\WishingController::class, 'wishes']);


  Route::post('/mform' , [App\Http\Controllers\MarriageFormController::class , 'get_a'])->name('mform');

  Route::get('/adding_food', [App\Http\Controllers\FoodController::class, 'foodview']);


  Route::get('/messages', [App\Http\Controllers\ContactController::class, 'admincon']);


  Route::get('/adding_acc', [App\Http\Controllers\AccessoriesController::class, 'accview']);


  Route::post('/addform' , [App\Http\Controllers\FoodController::class , 'addingfood'])->name('addform');


  Route::post('/addaccform' , [App\Http\Controllers\AccessoriesController::class , 'addingaccs'])->name('addaccform');



  Route::get('/show_request', [App\Http\Controllers\GetController::class, 'review']);
  Route::get('/login', [App\Http\Controllers\UserController::class, 'signin']);
  Route::post('/emregister' , [App\Http\Controllers\RegisteremConroller::class , 'emp'])->name('emregister');
  Route::post('/emp_log' , [App\Http\Controllers\LogineController::class , 'checkinlogin'])->name('emp_log');
  Route::get('/course' , [App\Http\Controllers\CourseController::class , 'courses'])->name('course');
  Route::get('/store' , [App\Http\Controllers\StoreController::class , 'stores'])->name('store');
  Route::get('/doctor' , [App\Http\Controllers\DoctorController::class , 'doctors'])->name('doctor');
  Route::get('/trainer' , [App\Http\Controllers\TrainerController::class , 'trainers'])->name('trainer');
  Route::get('/food' , [App\Http\Controllers\FoodController::class , 'foods'])->name('food');
  Route::post('/singin', [App\Http\Controllers\UserController::class, 'checklogin'])->name('login');
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/first' , [App\Http\Controllers\UserController::class , 'user_login']);
  Route::get('/buy', [App\Http\Controllers\BuyController::class, 'buy_a']);
  Route::get('/logine', [App\Http\Controllers\LogineController::class, 'log'])->name('logine');
  Route::get('/marriage', [App\Http\Controllers\MarriageController::class, 'mar']);
  Route::get('/bdetails/{id}', [App\Http\Controllers\BDetailsController::class, 'bdet']);
  Route::get('/accessories' , [App\Http\Controllers\AccessoriesController::class , 'aacessory'])->name('accessories');
  Route::get('/registerem' , [App\Http\Controllers\RegisteremConroller::class , 'reg'])->name('registerem');

 

  Route::get('/accessories_details/{id}', [App\Http\Controllers\AccessoriesController::class, 'adetails']);
  Route::get('/test' , [App\Http\Controllers\BDetailsController::class , 'test']);


  Route::get('/updatedr/{id}' , [App\Http\Controllers\UpdateController::class , 'docdet']);

  Route::get('/updatetr/{id}' , [App\Http\Controllers\UpdateController::class , 'trdet']);



  Route::post('/docupdate/{id}' , [App\Http\Controllers\UpdateController::class , 'updatedoc']);


  Route::post('/updateform/{id}' , [App\Http\Controllers\UpdateController::class , 'updatefood']);


  Route::post('/updateaccsform/{id}' , [App\Http\Controllers\UpdateController::class , 'updateacc']);



  Route::post('/trainerupdate/{id}' , [App\Http\Controllers\UpdateController::class , 'updatetrainer']);


  Route::get('/deleted/{id}' , [App\Http\Controllers\UpdateController::class , 'destroy']);

  Route::get('/deletefood/{id}' , [App\Http\Controllers\UpdateController::class , 'destroyf']);



  Route::get('/deleteaccs/{id}' , [App\Http\Controllers\UpdateController::class , 'destroyacc']);


  Route::get('/delete/{id}' , [App\Http\Controllers\UpdateController::class , 'destroytr']);

  // Route::get('/course', [App\Http\Controllers\CourseController::class, 'courses']);
// }


// User::routes(['verify'=>true]);
// Auth::routes(['verify'=>true]);


// Route::post('/form',function(){

// Route::post('/form',function(){
//     $user= new User();
//     $user ->us_name= request('us_name');
// $user ->email= request('email');
// $user ->password= request('password');
// $user ->gender= request('gender');

// $user ->age= request('age');
// $user ->phone= request('phone');

// $user ->save();
// // return redirect('/');
// });




// Route::post('/gform',function(){
//     Get_Rid_Of_Animal::create([

//              'get_rid_name'=> request('get_rid_name'),
//               'age' =>request('age'),
//             'type' =>request('type'),
//                'gender' =>request('gender'),
//                'photo' =>request('photo'),
//             'health_status' =>request('health_status'),
        
//             ]);
// });


// Route::post('/getform',function(){
//   $ganimal= new Get_Rid_Of_Animal();
//   $ganimal ->get_rid_name= request('get_rid_name');
// $ganimal ->type= request('type');
// $ganimal ->photo= request('photo');
// $ganimal ->gender= request('gender');

// $ganimal ->age= request('age');
// $ganimal ->health_status= request('health_status');

// $ganimal ->save();
// return ('<a href="/">your request has been submited successfully , return to home page</a>');
// });


// Route::post('/mform',function(){
//   Marriage::create([

//            'marr_name'=> request('marr_name'),
//            'photo' =>request('photo'),
//            'type' =>request('type'),
//            'health_status' =>request('health_status'),
//             'age' =>request('age'),
//              'gender' =>request('gender'),
//              'comment'=>request('comment'),
      
//           ]);      
// });

// Route::match(['get', 'post'], 'botman', 'BotManController@handle');

// Route::get('/botman',[BotManController::class,"handle"]);
// Route::post('/botman',[BotManController::class,"handle"]);
