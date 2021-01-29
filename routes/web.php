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
     return view('welcome');
});



Route::get('/home/domainchecking', 'HomeController@domainchecking')->name('domainchecking');
Route::get('/search', 'SearchController@search')->name('search');
Route::get('/home/search/register/{id}/{domain}', 'SearchController@register_info')->name('register_info');
Route::get('/home/checkout', 'SearchController@checkout')->name('checkout');
Route::post('/home/search/add_cart', 'SearchController@add_cart')->name('add_cart');
Route::post('/home/search/del_cart', 'SearchController@del_cart')->name('del_cart');
Route::post('/home/search/pay_cart', 'SearchController@pay_cart')->name('pay_cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@index')->name('account.dashboard');
Route::get('account/expired', 'AccountController@expired')->name('account.expired');
Route::get('account/expired/update/{id}', 'AccountController@expired_update')->name('account.expired.update');

Route::get('account/domains', 'AccountController@domains')->name('account.domains');
Route::get('account/domains/edit/{id}', 'AccountController@domains_edit')->name('account.domains.edit');
Route::post('account/domains/update/{id}', 'AccountController@domains_update')->name('account.domains_upload');
Route::get('account/domains/delete/{id}', 'AccountController@domains_delete')->name('account.domains.delete');
Route::post('/home/search/expired_pay_cart', 'AccountController@expired_pay_cart')->name('expired_pay_cart');

Route::get('account/profile', 'AccountController@profile')->name('account.profile');
Route::get('account/profile_edit', 'AccountController@profile_edit')->name('account.profile_edit');
Route::post('account/profile_upload', 'AccountController@profile_upload')->name('account.profile_upload');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

