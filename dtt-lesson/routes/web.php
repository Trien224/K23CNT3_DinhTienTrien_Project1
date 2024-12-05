<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gg', function () {
    return 'welcome';
});
// chuyen huong traang
Route::redirect('/wo','two');
Route::get('two',function()
{
    return '<h1>Auto chuyen page:TWO<h1>';
});
//link views
Route::get('/tientrien', function () {
    return view('tientrien');
});
Route::get('/devbacthay/{id}', function () {
    return '<h1>Bacthay';
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "<h1> Post: $postId ; Comments: $commentId<h1>";
});
Route :: get('/user/{id}', function (Request $request, $ma)
{
    return'<h1> NGuoi dung ->'.$ma;
});
Route :: get( "/name={name?}", function ($ten = null){
    return"<h1> chao , $ten";
});
Route :: get('/user-dev/{name?}', function ($ten ='ddtt')
{
    return"<h1> chao ,$ten";
});
Route :: get('/it-constranints/{name}', function($name)
{
    return"<h1> hi,";
} )->where('name','[A-Za-z]+');
//
#vieWs
route :: get('/dtt',function(){
    return view('dtt',['name'=>"text"]);
});
Route::get('/dtt-2',function(){
    return view('dtt-2',[
    'name'=>'Devmaster Academy!',
    'arr'=>[1,4,7,2,9],]);
    });
Route::get('/dtt-3',function(){
    return view('dtt-3',[
        'name'=>["Dev","ac"],
        'arr'=>[10,15,12],
        'users'=>[],
    ]);
});
Route::get('/', [ProductController::class,'index']);
