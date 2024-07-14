<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;

class ApiController extends Controller
{
    public function createFolder()
    {
        $result = Process::path("C:/Users/2023/Projects/proj/resources/views")->run('mkdir my-folder');

        echo $result->output();
        echo $result->erroroutput();
    }

    //DB
    public function getAllUsers(){
        
    }
}
