<?php


use App\Http\Controllers\PesanController;


Route::get('/login',[PesanController::class, 'login']);
Route::post('/cek_login',[PesanController::class,'cek_login']);
Route::get('/',[PesanController::class,'index']);

Route::group(['middleware' => ['admin']], function () {
Route::get('/addproduct',[PesanController::class,'addproduct']);
Route::get('/edit_harga',[PesanController::class, 'edit_harga']);
Route::get('/edit_stok',[PesanController::class, 'edit_stok']);
Route::get('/manifest',[PesanController::class, 'manifest']);
Route::get('/barang',[PesanController::class, 'barang']);
Route::get('/logout',[PesanController::class, 'logout']);
Route::get('/ganti_user',[PesanController::class, 'ganti_user']);
Route::get('/add_user',[PesanController::class,'add_user']);
Route::get('/edit_user',[PesanController::class,'edit_user']);
Route::post('/insertuser',[PesanController::class,'insertuser']);
Route::get('/hapusakun/{id}',[PesanController::class,'hapusakun']);
Route::post('/insertproduct',[PesanController::class,'insertproduct']);
Route::get('/hapusproduct/{id}',[PesanController::class,'hapusproduct']);
Route::get('/edituser/{id}',[PesanController::class,'edituser']);
Route::post('/updateakun',[PesanController::class,'updateakun']);
Route::get('/editharga/{id}',[PesanController::class,'editharga']);
Route::post('/updateharga',[PesanController::class,'updateharga']);
Route::get('/editstok/{id}',[PesanController::class,'editstok']);
Route::post('/updatestok',[PesanController::class,'updatestok']);
});


Route::group(['middleware' => ['kasir']], function () {
Route::get('/kasir',[PesanController::class,'kasir']);
Route::get('/manifest_kasir',[PesanController::class,'manifest_kasir']);
Route::get('/barang_kasir',[PesanController::class,'barang_kasir']);

});