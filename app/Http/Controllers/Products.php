<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
class Products extends Controller
{
    //
    function exportData()
    {
    	return Excel::download(new DataExport, 'products.xlsx');
    }
}
class DataExport implements FromCollection{
	function collection()
	{
		return Product::all();
	}
}
