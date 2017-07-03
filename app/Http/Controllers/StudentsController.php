<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
    	$students = DB::select('select students.studentsId, students.firstname, students.lastname, students.street, students.plz, students.city, students.email, classes.name from students, classes WHERE students.classId = classes.classId');

    	return view('pages.students', ['students' => $students]);
    }

    public function classes()
    {
    	$classes = DB::select('select * from classes');

    	return view('pages.classes', ['classes' => $classes]);
    }
}
