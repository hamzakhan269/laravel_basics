<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user1;
class Users extends Controller
{
    //
    // function dbcheck()
    // {
    // 		// $users=DB::table('customers')->get(); 
    	
    //  }
     function index()
     {
     	return user1::all();
     }
}
