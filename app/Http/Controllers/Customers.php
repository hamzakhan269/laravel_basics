<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Customers extends Controller
{
    //
    function dbcheck ()
     {
    // 	return DB::select('select * from users');
    	// print_r($users); 
    	$users=DB::table('users')
    	->where('id','5')
    	->delete(); 	

    	print_r($users);

    	 
    }
}
