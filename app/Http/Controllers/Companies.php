<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Companies extends Controller
{
    //
    function list()
    {
    	$data=DB::table('company')->paginate(3);
    	return view('companies', ['data'=>$data]);
    }
}
