<?php


Route::get('/', function () {    return view('welcome');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userlogout')->name('User.logout');
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/index', 'Auth\RegisterController@index')->name('admin.index');
    Route::get('/show/{id}', 'Auth\RegisterController@show')->name('admin.show');
    Route::get('/{id}/edit', 'Auth\RegisterController@edit')->name('admin.edit');
    Route::put('/{id}', 'Auth\RegisterController@update')->name('admin.update');
    Route::delete('/{id}', 'Auth\RegisterController@destroy')->name('admin.destroy');
    Route::get('/{id}/delete', 'Auth\RegisterController@delete')->name('admin.delete');
        //admin managing crimes routes
    Route::resource('/tests', 'TestController');
    
    	//password resets
//Route::post('/password/email','Auth/AdminForgotPasswordController@ResetLinkEmail')->name('admin.password.email');
//Route::get('/password/reset', 'Auth/AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//Route::post('/password/reset','Auth/AdminResetPasswordController@reset');
//Route::get('/password/reset/{token}','Auth/AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  }); 
		//crime routes
Route::resource('crimes', 'CrimeController');
Route::post('/search','HomeController@postsearch')->name('crime.postsearch');
Route::get('/search','HomeController@getsearch')->name('crime.getsearch');
        //contact
Route::resource('contact', 'ContactController');
        //crimetypes
Route::resource('crimetypes', 'CrimetypeController');
Route::get('/background', 'PagesController@background')->name('background');
Route::get('/planning', 'PagesController@planning')->name('planning');
Route::get('/mission', 'PagesController@mission')->name('mission');
Route::get('/', 'PagesController@homepage')->name('homepage');
Route::get('/welcome2', 'PagesController@welcome2')->name('welcome2');
Route::get('/crime/{id}','TestController@generatePDF')->name('crime.download');






















Route::get('/run', function() {
    \SSH::run([
        'cd /',
        'ls -all'
    ]);

    return response('Completed!');
});
Route::get('/output', function() {
    $commands = [
        'cd /',
        'ls -all'
    ];

    \SSH::run($commands, function($line)
    {
        echo $line.PHP_EOL;
    });
});
















 