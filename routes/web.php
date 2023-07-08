<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\AJKController;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use App\Models\Event;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get( '/events', [EventController::class,'index'] );
Route::get( '/', function(){
	return redirect( '/events' );
});

Route::get('/ajk', [AJKController::class, 'index']);


Route::get('/sejarah', [SejarahController::class, 'index']);

Route::get( '/events', [ EventController::class, 'index' ] );
Route::get( '/events/admin', [ EventController::class, 'admin' ] );

Route::get( '/auth/login', [ AuthController::class, 'login' ] );
Route::get( '/auth/logout', [ AuthController::class, 'logout' ] );



Route::post( '/events/admin', [ EventController::class, 'handleRequest' ] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/generate-pdf', function () {
    // Get the events data
    $events = Event::all();

    // Create a new DOMPDF instance
    $dompdf = new Dompdf();

    // Load the HTML content with the table
    $html = View::make('pdf.events', compact('events'))->render();

    // Set the PDF content
    $dompdf->loadHtml($html);

    // (Optional) Set any PDF options
    $dompdf->setPaper('A4', 'landscape');

    // Render the PDF
    $dompdf->render();

    // Output the generated PDF to the browser
    $dompdf->stream('events.pdf');
});


