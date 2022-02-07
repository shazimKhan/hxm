<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use mikehaertl\wkhtmlto\Pdf;
use App\Http\Controllers\GPDFController;

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

// Route::get('/download', function () {
//     $render = view('chart')->render();
  
//         $pdf = new Pdf;
//         $pdf->addPage($render);
//         $pdf->setOptions(['javascript-delay' => 5000]);
//         $pdf->saveAs(public_path('report.pdf'));
   
//         return response()->download(public_path('report.pdf'));
// });

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('preview', [GPDFController::class, 'preview']);
Route::get('download', [GPDFController::class, 'download'])->name('download');