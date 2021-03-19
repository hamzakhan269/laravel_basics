<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\company;

class Companies extends Controller
{
    //
    // function list()
    // {
    // 	$data=DB::table('company')->paginate(3);
    // 	return view('companies', ['data'=>$data]);
    // }
		// function save(Request $req) {

		// 	$company= new company;
		// 	$company->name=$req->name;
		// 	$company->location=$req->location;
		// 	echo $company->save();
		// 	// print_r($req-> input());
		// }

	   // function update (Request $req)
	   // {
	   // 	// print_r($req->input());
	   // 	echo company::where ('name',$req->name)
	   // 	->update(['location'=>$req->location]);
	   // }
	function list()
	{
        return company::all();     	
		
	}


}
