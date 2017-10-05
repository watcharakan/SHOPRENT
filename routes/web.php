<?php

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
    return view('shop.single');

 
});
Route::get('/dress',function(){
	return view('shop.dresses');	
});


Route::get('/create','ShopinterfaceController@index')->name('createselling');

Auth::routes();
Route::resource('fix', 'ShopControllre');

Route::get('/skirt', 'ShopControllre@skirt');
Route::get('/sk_long', 'ShopControllre@sk_long');
Route::get('/sk_jeans', 'ShopControllre@sk_jeans');
Route::get('/sk_short', 'ShopControllre@sk_short');
Route::get('/sk_buff', 'ShopControllre@sk_buff');

Route::get('/dresses', 'ShopControllre@dresses');
Route::get('/d_evening', 'ShopControllre@d_evening');
Route::get('/d_chiffon', 'ShopControllre@d_chiffon');
Route::get('/d_lace', 'ShopControllre@d_lace');
Route::get('/d_work', 'ShopControllre@d_work');

Route::get('/pants', 'ShopControllre@pants');
Route::get('/p_legging', 'ShopControllre@p_legging');
Route::get('/p_skirt', 'ShopControllre@p_skirt');
Route::get('/p_short', 'ShopControllre@p_short');
Route::get('/p_jeans', 'ShopControllre@p_jeans');
Route::get('/p_skin', 'ShopControllre@p_skin');

Route::get('/mix', 'ShopControllre@mix');
Route::get('/bag', 'ShopControllre@bag');
Route::get('/shoes', 'ShopControllre@shoes');
Route::get('/accessories', 'ShopControllre@accessories');


Route::any('/matriphe/imageupload', function() 
{
    $data = [];

    if (Request::hasFile('file')) {
        $data['result'] = Imageupload::upload(Request::file('file'));
    }
    
    return view('form.blade.php')->with($data);
});




Route::get('/dropzone', 'HomeController@dropzone');
Route::post('dropzone/store', ['as'=>'dropzone.store','uses'=>'HomeController@dropzoneStore']);

