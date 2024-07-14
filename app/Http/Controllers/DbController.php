<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DbController extends Controller
{
    public function getAllUsers(): View
    {
        return View('db.users.index',['users' => DB::table('users')->paginate(20)]);
    }
}
