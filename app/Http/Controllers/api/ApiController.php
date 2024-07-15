<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;

class ApiController extends Controller
{
    public function createFolder()
    {
        $result = Process::path("C:/Users/2023/Projects/offline/resources/views")->run('mkdir my-folder');

        echo $result->output();
        echo $result->erroroutput();
    }
    public function getUsersEmails()
    {
        return response()->json(DB::table('users')->orderBy('id')->pluck('id', 'email'));
    }
    public function getUserById($id)
    {
        return response()->json(DB::table('users')->find((int)$id));
    }
    public function countFromThousand()
    {
        $results = [];

        DB::table('users')->orderBy('id')->chunk(100, function (Collection $users) use (&$results) {
            foreach ($users as $user) {
                $user->id += 1000;
                $results[] = $user;
            }
        });

        return response()->json($results);
    }
    public function vertifyAllEmail()
    {

        //update by chunking according to laravel doc. could also be updated directly
        DB::table('users')->where('email_verified_at', null)
            ->lazyById()->each(function (object $user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['email_verified_at' => now()]);
            });

        return DB::table('users')->select('name', 'email_verified_at')->get();
    }

    //Incomplete....
    public function deleteCorruptedData()
    {

        $results = [];
        DB::table('users')->orderBy('id')->chunk(100, function (Collection $users) {

            foreach ($users as $user) 

            //corrupt data
                $rand = (float)Str::randomFloat(3, 0.0, 1.0);

                $user->name = $rand >= 0.25 ? null : $user->name;
            }
        );

        return DB::table('users')->get();
    }
}
