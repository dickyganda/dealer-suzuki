<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProdukkamiController extends Controller
{
    
function Index(){
 
    	return view('/produkkami');
    }

}