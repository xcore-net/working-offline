<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Book;
use App\Models\Mechanic;
use App\Models\Student;

class RelationController extends Controller
{
    public function show_rel(){
        //one-to-one test
        $persons = Person::with('adress')->get();
        //one-to-many test
        $books = Book::with('author')->get();
        //has one through test
        $mechanics = Mechanic::with('carOwner')->get();
        //wherePivot test
        // $filteredBooks = Book::with('filteredAuthor')->get();
        $students = Student::with('course')->get();
        //trying mutators and casting (worked fine but commented not to affect on database)
        $student = Student::find(1);
        // $student->last_name = 'ZiaD';
        // $student->save();
        //dd($student);
        //-------------------
        //cast trying
        //  $student->paid = 5023.25421;
        //  $student->save();

        return view('relation',['persons'=>$persons,'books'=>$books,'mechanics'=>$mechanics,'students'=>$students]);
    }
}
