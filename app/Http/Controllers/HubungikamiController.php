<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class HubungikamiController extends Controller
{
    
function Index(){
 
    	return view('/hubungikami');
    }

}