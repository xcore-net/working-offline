<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;

class databaseController extends Controller
{
    public function index(): View
    {
         $users = DB::table('users')->get();
        $user = DB::table('users')->find(3);
 
        return view('welcome', ['users' => $users],['user' => $user]);
    }
    public function index2(): View
    {
        // $users = DB::table('users')->get();
        $user = DB::table('users')->find(3);
 
        return view('welcome',['user' => $user]);
    }



    public function index3(){
        $user = DB::table('users')->where('name', 'shams')->first();
        $email = DB::table('users')->where('name', 'adminn')->value('email');
 
        //    return $user->email;
           return view('welcome',['user' => $user],['email' => $email]);

    }

    public function index4(){

        $emails = DB::table('users')->pluck('email','name');
 
    
           return view('welcome',['emails' => $emails]);

    }
    public function index5(){
        $users=  DB::table('users')->get();
        DB::table('users')
       ->chunkById(3, function (Collection $users) {
           foreach ($users as $user) {
               DB::table('users')
                   ->where('id', $user->id)
                   ->update(['name' => $user->name."sss"]);
           }
       });
    

    
           return view('welcome',['users' => $users]);

    }

    public function index6(){
       
        $users = DB::table('users')->count();
        // $price = DB::table('users')->max('id');

        $price = DB::table('users')->avg('id');

    
           return view('welcome',['users' => $users],['price'=>$price]);

    }
    public function index7(){
       
        if (DB::table('users')->where('name', 'shahdupdatedupdatedupdatedupdatedsssssssssssssssssssssssssss')->exists()) {
            DB::table('users')
                ->where('name', 'shahd')
                ->update(['name' => $user->name."zzz"]);
        }

        $users = DB::table('users')->get();
    
        return view('welcome', ['users' => $users]);
    }


    public function index8()
    {
       
        // $users = DB::table('users')->distinct()->get();
    
        // $users = DB::table('users')
        //     ->select('name', 'email as user_email')
        //     ->get();
        
        $query = DB::table('users')->select('name');
 
$users = $query->addSelect('id')->get();
        return view('welcome', ['users' => $users]);
    }



public function index9(){
    $users = DB::table('users')
             ->select(DB::raw('count(*) as user_count, id'))
             ->where('id', '=', 7)
             ->groupBy('id')
             ->get();
             return view('welcome', ['users' => $users]);

}
public function index11(){
    $users = DB::table('users')
            ->join('flower', 'users.id', '=', 'flower.id')
            ->join('plants', 'users.id', '=', 'plants.id')
            ->select('users.name', 'flower.price', 'plants.type')
            ->get();
             return view('welcome', ['users' => $users]);

}

public function index12(){
    $first = DB::table('users')
            ->whereNull('name');
 
$users = DB::table('users')
            ->whereNull('email')
            ->union($first)
            ->get();
            
            return view('welcome', ['users' => $users]);

}



}
