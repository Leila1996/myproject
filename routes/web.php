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
//Route::get('/contact/{name}', function ($name) {
 //echo"contact name:".$name;
 //});


Route::get('/articles','condidatController@articles');
Route::get('/condidat/',"condidatController@viewCondidat");

Route::get('add',"condidatController@create");
Route::post('add',"condidatController@AddCondidat");
/////////////////////////////////
Route::get('/addcondidat/','condidatController@newCondidat');
 Route::get('/listcondidat/','condidatController@listCondidat');
////////////////////////

Route::get('/contact/{name}','condidatController@contact');
/////////////////////////////////////

 


Route::get('cvs','CvController@index');
Route::get('cvs/create','CvController@create');
Route::post('cvs','CvController@store');

Route::get('cvs/{id}/edit','CvController@edit');
Route::put('cvs/{id}','CvController@update');
Route::delete('cvs/{id}','CvController@destroy');


Route::get('cvs/{id}','CvController@show');
Route::get('cvs/{id}/postuler','CvController@postuler');




/////////////////////////////////////profile/////////////////////////

Route::get('/change','CvController@changeForm')->name('change');
Route::post('/change','CvController@change')->name('change');

/////////////////////////////////////////////////////////////////////////
Route::get('/getExperiences/{id}','CvController@getExperiences');

Route::get('/editExperiences/{id}/edit','CvController@editExperiences');

/////////////////////////////////////////////////////////////////

Route::get('/getFormations/{id}','CvController@getFormations');
////////////////////////////////////////////////
Route::get('/getCompetances/{id}','CvController@getCompetances');
////////////////////////////////////////////
Route::get('/getProfiles/{id}','CvController@getProfiles');





Route::post('/addexperiences/','CvController@addExperiences');

////////////////////////////////////////////////////////////////////////////////////////
//experience////

Route::get('experiences/{id}','ExperienceController@index');
Route::get('cvs/experiences/create/{id}','ExperienceController@create');
Route::post('experiences/{id}','ExperienceController@store');
Route::get('experiences/{id1}/edit/{id}','ExperienceController@edit');
Route::put('experiences/{id1}/save/{id}','ExperienceController@update');
Route::delete('experiences/{id1}/delete/','ExperienceController@destroy');


////////////////////////////////////////////////////////////////////////////////////////////














Route::get('formations/{id}','FormationController@index');
Route::get('cvs/formations/create/{id}','FormationController@create');
Route::post('formations/{id}','FormationController@store');
Route::get('formations/{id1}/edit/{id}','FormationController@edit');
Route::put('formations/{id1}/save/{id}','FormationController@update');
Route::delete('formations/{id1}/delete/{id}','FormationController@destroy');



///////////////////////////////////////////////////////////////////////////////////






Route::get('competances/{id}','CompetanceController@index');
Route::get('cvs/competances/create/{id}','CompetanceController@create');
Route::post('competances/{id}','CompetanceController@store');
Route::get('competances/{id1}/edit/{id}','CompetanceController@edit');
Route::put('competances/{id1}/save/{id}','CompetanceController@update');
Route::delete('competances/{id1}/delete/{id}','CompetanceController@destroy');



//////////////////////////////////////////////
Route::get('profiles/{id}','ProfileController@index');
Route::get('cvs/profiles/create/{id}','ProfileController@create');
Route::post('profiles/{id}','ProfileController@store');
Route::get('profiles/{id1}/edit/{id}','ProfileController@edit');
Route::put('profiles/{id1}','ProfileController@update');
Route::delete('profiles/{id1}','ProfileController@destroy');


///////////////////////////////////////////////offre///////////////////////////////
Route::get('offres','OffreController@index');
Route::get('offres/create','OffreController@create');
Route::post('offres','OffreController@store');

Route::get('offres/{id}/edit','OffreController@edit');
Route::put('offres/{id}','OffreController@update');
Route::delete('offres/{id}','OffreController@destroy');


Route::get('offres/{id}','OffreController@show');













////////////////////////////////////////////////////
Route::get('accueil', function () {
    return view('accueil');
});
Route::get('service', function () {
    return view('service');
});
Route::get('contact', function () {
    return view('contact');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');
