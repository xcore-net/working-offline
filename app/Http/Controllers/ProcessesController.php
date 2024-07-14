<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class ProcessesController extends Controller
{
    public function exeProcess()
    {
        $result = Process::path('D:\laravel projects')->run('mkdir saleem');
        return view('processes',['result'=>$result]);
    }
}