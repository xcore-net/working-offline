<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'paginator' => DB::table('users')->paginate(2)
        ]);
    }
}
