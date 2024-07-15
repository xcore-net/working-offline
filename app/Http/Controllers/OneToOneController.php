<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Posts;
use App\Models\Book;
use App\Models\Student;


class OneToOneController extends Controller
{
    public function showRelation(){
       $persons=Person::with('cards')->get();
   
       $posts=Posts::with('person')->get();
        $books=Book::with('students')->get();
        $students=Student::with('books')->get();

       
       //dd($books);
    //    dd($posts1);
      //return view('relation',['persons'=>$persons],['posts'=>$posts],['books'=>$books],['students'=>$students]);
      //return view('relation',['books'=>$books],['students'=>$students]);
      return view('relation', compact( 'persons','posts','books', 'students'));


    }
}
