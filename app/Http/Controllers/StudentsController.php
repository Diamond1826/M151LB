<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
    	$students = DB::select('select * from students');

    	return view('pages.students', ['students' => $students]);
    }
}
