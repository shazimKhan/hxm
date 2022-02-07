<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;

class GPDFController extends Controller
{
    
    public function __invoke()
    {
        // $path = public_path('_nuxt/index.html');

        // abort_unless(file_exists($path), 400, 'Make sure to run npm run build!');

        // return file_get_contents($path);
    }
    
    public function preview()
    {
        return view('chart');
    }
  
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $render = view('chart')->render();
        
        $pdf = new Pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);
        $pdf->saveAs(public_path('report.pdf'));
        // dd($pdf->store('report2.pdf', ['disk' => 'public']));
        return response()->download(public_path('report.pdf'));
    }
    
}
