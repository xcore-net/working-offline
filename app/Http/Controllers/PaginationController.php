<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
   public function page(){
    $test = DB::table('test')->paginate(30);

    return view('pagination',['pagination'=>$test]);
   }
}
