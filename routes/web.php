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
use Illuminate\Http\Request;

/**
 *  Home page
 */
// Route::get('/', function () {
//     $links = App\Link::all();
//
//     return view('welcome', ['links' => $links]);
// });

/**
 *  Submit page
 */
Route::get('/submit', function(){
    return view('submit');
});

/**
 *  Submit page POST
 */
Route::post('/submit', function(Request $request){
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'desc' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/home');
});

/**
 *  Auth app routes
 */
Auth::routes();

/**
 *  Home page
 */
//Route::get('/home', 'HomeController@index')->name('home');

/**
 *  Dashboard Page
 */
Route::get('/dashboard', 'DashboardController@index');

/**
 *  Dashboard Login Page
 */
Route::get('/dashboardlogin', function(){
    return view('dashboardlogin');
});

/**
 *  Article Dashboard Page
 */
Route::get("/article", function(){
    return view('dashboard.dashboard');
});

// Training
/**
 *  Container Page
 */

Route::get('/', 'PagesController@home');

Route::get('/services', 'PagesController@services');

Route::get('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');
