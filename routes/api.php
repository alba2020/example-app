<?php

use App\TExceptions\NonReportable\TAuthException;
use App\TExceptions\Reportable\TGeneralReportableException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cat', function() {
    return 'the cat';
});

Route::get('val', function (Request $request) {
    $request->validate([
        'name' => 'string|required',
        'x' => 'integer|required',
        'email' => 'email',
    ]);

    return [ 'validation' => 'ok' ];
});

//Route::get('users', function (Request $request) {
//    $user = User::findOrFail($request->id);
//    return [
//        'user' => $user,
//    ];
//});

//Route::get('ex1', function (Request $request) {
//    $lang = $request->input('lang', 'en');
//    $t = new TranslationService($lang);
//    $msg = $t->_('Exceptions', 'Custom');
//    $msg = $t->_('EX_CUSTOM');
//
//    throw new CustomException($msg);
//});

Route::get('ex/{x}', function($x) {

    if ($x == 'auth') {
        throw (new TAuthException())->withData('nothing here');
    } else {
        throw (new TGeneralReportableException())->withData(['key' => 'value']);
    }

});
