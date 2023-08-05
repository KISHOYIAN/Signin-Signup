<?php

use Illuminate\Support\Facades\Route;
// routes/web.php or routes/api.php

use App\Http\Controllers\HomeTeamController;

/*Route::post('/SignUp', [HomeTeamController::class, 'handlePost']);*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');
    return view('welcome');
});

/*Route::post('/SignUpRoute',[HomeTeamController::class,'signup'])
;
*/
/*
Route::post('signup', function(){
    echo "Post received";
});
*/

Route::post('/SignUp', function () {
    return view('welcome');
}) ->name('signup');
