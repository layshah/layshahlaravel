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


Route::get('/', function() {
    return View::make('form');
});




Route::post('/registration.php', function()
{
    // Fetch all request data.
    $data = Input::all();

    // Build the validation constraint set.
    $rules = array(
        'username' => 'alpha_num'
    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules);


    if ($validator->passes()) {
        // Normally we would do something with the data.
        return 'Data was saved.';
    }

    return Redirect::to('/');
});


Route::get('/registration.php', function()
{
return 'hi hello!';
});
