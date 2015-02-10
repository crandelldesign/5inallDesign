<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Old Site Redirects */
Route::get('/services', function()
{
	return Redirect::to('/#services', 301);
});
Route::get('/contact', function()
{
	return Redirect::to('/#contact', 301);
});
Route::get('/contact.php', function()
{
	return Redirect::to('/#contact', 301);
});
Route::get('/clients', function()
{
	return Redirect::to('/', 301);
});
Route::get('/blog/{param?}', function()
{
	return Redirect::to('/', 301);
});
Route::get('/portfolio/resume.pdf', function()
{
	return Redirect::to('/img/resume.pdf', 301);
});
Route::get('/portfolio/projects/nuviewnutrition', function()
{
	return Redirect::to('/portfolio/?client=nuview-nutrition', 301);
});
Route::get('/portfolio/projects/greggsgourmetcafe', function()
{
	return Redirect::to('/portfolio/?client=greggs-gourmet-cafe', 301);
});
Route::get('/portfolio/projects/thegate', function()
{
	return Redirect::to('/portfolio/?client=the-gate', 301);
});
Route::get('/portfolio/projects/sageorthodontics', function()
{
	return Redirect::to('/portfolio/?client=sage-orthodontics', 301);
});
Route::get('/portfolio/projects/fourgreenfieldsfarm', function()
{
	return Redirect::to('/portfolio/?client=four-green-fields-farm', 301);
});
Route::get('/portfolio/projects/laurajasurda', function()
{
	return Redirect::to('/portfolio/?client=laura-jasurda', 301);
});
Route::get('/portfolio/projects/heatherpinesadultcare', function()
{
	return Redirect::to('/portfolio/?client=heather-pines-adult-care', 301);
});
Route::get('/portfolio/projects/clcw', function()
{
	return Redirect::to('/portfolio/?client=christ-lutheran-church-of-waterford', 301);
});
Route::get('/portfolio/projects/clcw', function()
{
	return Redirect::to('/portfolio/?client=christ-lutheran-church-of-waterford', 301);
});
Route::get('/portfolio/projects/{client}', function()
{
	return Redirect::to('/portfolio', 301);
});
/* Wierd Issues */
Route::get('businesscard.html', function()
{
	return Redirect::to('/', 301);
});
Route::get('qual.html', function()
{
	return Redirect::to('/', 301);
});
Route::get('services_seo.html', function()
{
	return Redirect::to('/', 301);
});
Route::get('/testbox/{param1?}/{param2?}/{param3?}/{param4?}/{param5?}/{param6?}', function()
{
	return Redirect::to('/', 301);
});
Route::get('/clcw/{param1?}/{param2?}/{param3?}/{param4?}/{param5?}/{param6?}', function()
{
	return Redirect::to('/', 301);
});

Route::get('/migrate', function() {
   $output = Artisan::call('migrate');
   dd($output);
});

Route::controller('/', 'HomeController');

App::missing(function($exception)
{
	return Response::view('home.404', array(), 404);
});
/*Route::get('/', function()
{
	return View::make('hello');
});*/
