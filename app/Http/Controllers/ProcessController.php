<?php

namespace App\Http\Controllers;

 use Illuminate\Support\Facades\Process;
// use Symfony\Component\Process\Process;  

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    // public function test(){
    // $results = Process::run('ls -la');
 
    //  return
    //   $results->output();
    // }

    public function test()  
{  
    $results = Process::path('C:\xcore\offline\resources')->run('mkdir  sh');  
    //return $results->erroroutput();
      return
        $results->output();
    

}}
