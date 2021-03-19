<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PDFmaker extends Controller
{
    //
    function gen()
    {
    	$pdf=App::make('dompdf.wrapper');
    	$pdf->loadHTML('<h1>header without style</h1>');
    	return $pdf->stream();
    }
}
