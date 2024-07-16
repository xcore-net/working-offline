<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Posts;
use App\Models\Post2;

use App\Models\Book;
use App\Models\Student;
use App\Models\Mechanic;
use App\Models\Comments;




class OneToOneController extends Controller
{
    public function showRelation(){
       $persons=Person::with('cards')->get();
   
       $posts=Posts::with('person')->get();
        $books=Book::with('students')->get();
        $students=Student::with('books')->get();
        $phone = Student::find(2)->name;
        //$owner=Mechanic::with('carOwner')->get();

        $post2 = Post2::find(1);
 
        $comments = $post2->comments;


        

       
      // dd($owner);
    //    dd($posts1);
      return view('relation',['persons'=>$persons,
                            'posts'=>$posts,
                            'books'=>$books,
                            'students'=>$students,
                            'posts2'=>$post2,
                            'comments'=>$comments,
                            'phone'=>$phone,
                          ]);
      //return view('relation',['books'=>$books],['students'=>$students]);
      // return view('relation', compact( 'persons','posts','books', 'students','phone','comments'));
     


    }
}
