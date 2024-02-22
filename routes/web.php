<?php
// use引入就像php include
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hello', function () {
// dd('hello');
$sum=0;
for($i=1;$i<=10;$i++){
    $sum+=$i;
};
dd($sum);
    // return view('test');
});
// Route::get('/', function () {
//     return view('test');
// });
Route::get('/', function () {
    return view('index',['name'=>'jason','mobile'=>'0912-345-678']);
});
Route::get('/go_taisan', function () {
    return view('taisan');
});
Route::get('/f1', function () {
    return view('f1');
})->name('route.f1');
Route::get('/f2', function () {
    return view('f2');
})->name('route.f2');
Route::get('/f3', function () {
    return view('f3');
})->name('route.f3');
Route::get('/students', function () {
    return view('student.index');
});
Route::get('/user{/id}', function () {
    return view('student.index');
});
Route::get('/user/{id}', function (string $id) {
    // return 'User '.$id;
    dd($id);
});
Route::get('/posts/{post}/comments/{comment}/tests/{test}', function (string $postId, string $commentId,string $test) {
    // ...
    $text= $postId ."_" . $commentId . "_" . $test;
    dd($text);
});