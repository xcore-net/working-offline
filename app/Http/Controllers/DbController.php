<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DbController extends Controller
{
    public function getAllUsers(): View
    {
        return View('db.users.pagnication',['users' => DB::table('users')->paginate(20)]);
    }

    public function getUsersWhereName($name): View
    {
        return View('db.users.index',['users' => DB::table('users')->where('name',$name)->get()]);
    }
public function getUserById($id): View
    {
        return View('db.users.index',['users' => DB::table('users')->find((int)$id)]);
    }
    public function getUsersEmails(): View
    {
        return View('db.users.pagnication',['users' => DB::table('users')->pluck('name','email')->paginate(20)]);
    }
}
