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
//    $user = DB::table('users')->where('id', '=', $id)->increment('points');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/recycling gallery/paper', 'GalleryController@paper');
Route::get('/recycling gallery/food', 'GalleryController@food');
Route::get('/recycling gallery/glass', 'GalleryController@glass');

Route::get('/recycling gallery/electronics', 'GalleryController@electronics');

Route::get('/recycling gallery/steal', 'GalleryController@steal');

Route::get('/recycling gallery/plastic_bages', 'GalleryController@plastic_bages');

Route::get('/recycling gallery/cartons', 'GalleryController@cartons');

Route::get('/recycling gallery/househould', 'GalleryController@househould');

Route::get('/recycling gallery/aluminum', 'GalleryController@aluminum');

Route::get('/recycling gallery/plastic', 'GalleryController@plastic');





Route::get('/makeorder', 'HomeController@makeorder');
Route::post('/makeorder', 'OrderController@store');
Route::post('/makeorder/{order}', 'OrderController@sendordermail');

 //Route::get('/makeorder/{order}', 'OrderController@show')->name('user.makeorder.show');

 Route::get('/makeorder/{order}', 'OrderController@show')->name('user.makeorder.show');


/*Route::get('/makeorder/add/{user}', function($id){
    $user = DB::table('users')->where('id', '=', $id)->increment('points',10);
    return redirect('/makeorder')->with('success', 'Habit created');
    });
*/


Route::get('/points', 'HomeController@points');


Route::get('/contactus', 'ContactController@getcontactus');
Route::post('/contactus', 'ContactController@postcontactus');

Route::get('/about', 'HomeController@about');

Route::get('/admin', 'AdminController@index');
Route::get('/tables', 'AdminController@showtables');
Route::get('/manageorders', 'OrderController@manageorders');
  //Route::get('/manageusers', 'UserController@manageusers');
    Route::resource('/manageusers', 'UserController');
  Route::get('/dashboard', 'ManageController@dashboard');

    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

 // Route::get('/', 'ManageController@index');

//Route::get('/admin', 'AdminController@users');
Auth::routes();
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('test', function()
{
	//Config::set('mail.username', 'mahmoud.elokely@gmail.com');
   // Config::set('mail.password', 'M0@12345');

    dd(Config::get('mail'));
});

Route::get('/points/earnfromwaste', 'EarnController@earnfromwaste');
Route::get('/points/earnfromwaste/junk-mail', 'EarnController@junkmail');
Route::get('/points/earnfromwaste/sell-and-swap', 'EarnController@sell');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/exchange', 'PointController@exchange');
Route::post('/exchange/checkpoints','PointController@check')->name('exchange.check');
Route::post('/exchange/checkpoints1','PointController@check1')->name('exchange.check1');
Route::post('/exchange/checkpoints2','PointController@check2')->name('exchange.check2');

Route::post('/exchange/checkpoints4','PointController@check4')->name('exchange.check4');
Route::post('/exchange/checkpoints5','PointController@check5')->name('exchange.check5');
Route::post('/exchange/checkpoints6','PointController@check6')->name('exchange.check6');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::put('/profile/{user}/update', 'UserProfileController@update')->name('profile.update');
Route::put('/profile', 'UserProfileController@update_avatar')->middleware('auth')->name('profile.update_avatar');

Route::get('/profile', 'UserProfileController@profile');


/*
    Route::get('/manager', [
        'uses' => 'AppController@getAuthorPage',
        'as' => 'author',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Manager']
    ]);

    Route::get('/author/generate-article', [
        'uses' => 'Controller@getGenerateArticle',
        'as' => 'author.article',
        'middleware' => 'roles',
        'roles' => ['Author']
    ]);

    Route::get('/admin', [
        'uses' => 'Controller@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin','Manager']
    ]);

    Route::post('/admin/assign-roles', [
        'uses' => 'Controller@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);


Route::prefix('admin/manage')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
});
Route::get('/home', 'HomeController@index')->name('home');
*/

Route::get('/informationandfacts', 'FactController@fact');
Route::get('/informationandfacts/recyclingmagic', 'FactController@magic');
Route::get('/informationandfacts/reduce-population', 'FactController@population');

Route::get('/informationandfacts', 'FactController@fact');
