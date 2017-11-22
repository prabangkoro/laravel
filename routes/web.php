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
// http://localhost/
Route::get('/', 'PagesController@home');
// http://localhost/services
Route::get('/services', 'PagesController@services');
// http://localhost/about
Route::get('/about', 'PagesController@about');
// http://localhost/posts
// http://localhost/posts/{post}
// http://localhost/posts/{post}/edit
Route::resource('posts', 'PostsController');
