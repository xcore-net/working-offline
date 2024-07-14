<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class DataController extends Controller
{
    public function getdata()
    {   //get users table
        $users = DB::table('users')->get();
        //get a row by name
        $saleem = DB::table('users')->where('name','saleem')->first();
        //get a single value using (value)
        $email = DB::table('users')->where('name', 'shahed')->value('email');
        //get by id
        $user = DB::table('users')->find(3);
        //get a collection from a single column
        $emails = DB::table('users')->pluck('email'); 
        //get a collection from a single column & specify a key to the result collection (column name , key name)
        $titles = DB::table('users')->pluck('name', 'name');
        //count
        $recordnum = DB::table('test')->count();
        $maxnum = DB::table('test')->max('num');
        //determine if table is exist
        if (DB::table('test')->where('num',37)->exists()) {
            $isthere = "true";
}



        //chunk can edit and do func on the records as chuncks
        // DB::table('users')->chunkById(1, function (Collection $users) {
        //     foreach ($users as $user) {
        //         DB::table('users')
        //             ->where('id', $user->id)
        //             ->update(['name' => $user->name."updated"]);
        //     }
        //   });
        //   //get the names agian to see the deffrence
        //   $names = DB::table('users')->pluck('name', 'name');

        //join tables
        $joins = DB::table('users')
            ->join('test', 'users.id', '=', 'test.num')
            ->select('users.name', 'test.num')
            ->get();


        return view('data', ['users' => $users,
                            'saleem'=>$saleem,
                            'user'=>$user,
                            'email'=>$email,
                            'emails'=>$emails,
                            'titles'=>$titles,
                            'max'=>$maxnum,
                            'recordnum'=>$recordnum,
                            'isthere'=>$isthere,
                            'joins'=>$joins
                            ]);
    }
}
