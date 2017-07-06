<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;
use App\Classes;
/**
* @author D. Schaufelberger
* @since July, 2017
* @version 1.0
* this class includ all student and classes methods
*/
class StudentsController extends Controller
{   
    /**
    * this method returns the students view and all students datas from database
    * @return students.blade.php, $students
    */
    public function index()
    {
    	$students = DB::select('SELECT students.studentsId, students.firstname, 
                                students.lastname, students.street, 
                                students.plz, students.city, 
                                students.email, classes.name 
                                from students, classes 
                                WHERE students.classId = classes.classId');

    	return view('pages.students', ['students' => $students]);
    }
    /**
    * this method returns the classes view and all classes datas from database
    * @return classes.blade.php, $classes
    */
    public function classes()
    {
    	$classes = DB::select('SELECT * from classes');

    	return view('pages.classes', ['classes' => $classes]);
    }
    /**
    * this method returns the selectedClass view and all datas for all students in the selected class from the database and the name of this class
    * @var $classId
    * @return selectedClass.blade.php, $students, $className
    */
    public function selectedClass($classId)
    {
        $students = DB::select("SELECT students.studentsId, students.firstname, 
                                students.lastname, students.street, 
                                students.plz, students.city, 
                                students.email, classes.name 
                                FROM students, classes 
                                WHERE students.classId = classes.classId 
                                AND students.classId = $classId");

        $class = DB::select("SELECT classId, name from classes where classId = $classId");

        $className;

        foreach ($class as $selectedClass) {
            $className = $selectedClass;
        }

        return view('pages.selectedClass', ['students' => $students, 'className' => $className]);
    }
    /**
    * this method returns the selectedStudent view and all datas from selected student from the database and the id of he's class
    * @var $studentsId
    * @return editStudent.blade.php, $selectedStudent, $classId
    */
    public function selectedStudent($studentsId)
    {
        $students = DB::select("SELECT students.studentsId, students.firstname, 
                                students.lastname, students.street, 
                                students.plz, students.city, 
                                students.email, students.classId, 
                                classes.name 
                                FROM students, classes 
                                WHERE students.classId = classes.classId 
                                AND students.studentsId = $studentsId");

        $selectedStudent;

        foreach ($students as $student) {
            $selectedStudent = $student;   
        }

        $studentClassId = $selectedStudent->classId;

        $class = DB::select("SELECT * FROM classes WHERE classId = $studentClassId");

        $selectedClassId;

        foreach ($class as $selectedClass) {
            $selectedClassId = $selectedClass->classId;
        }

        return view('pages.editStudent', ['selectedStudent' => $selectedStudent, 'classId' => $selectedClassId]);
    }  
    /**
    * this method returns the StudentsController@index action and save all datas from the form to the database
    * @var $request
    * @return action StudentsController@index
    */
    public function createStudent(Request $request)
    {
        $student = new Student;
    
        $student->firstname = $request ->input('firstname');
        $student->lastname = $request ->input('lastname');
        $student->street = $request ->input('street');
        $student->plz = $request ->input('plz');
        $student->city = $request ->input('city');
        $student->email = $request ->input('email');
        $student->classId = $request ->input('classId');
        $student->save();

        return redirect()->action('StudentsController@index');
    }
    /**
    * this method returns the StudentsController@index action and update the database datas from the updated student
    * @var $request
    * @return action StudentsController@index
    */
    public function updateStudent(Request $request)
    {
        $studentsId = $request -> input('studentsId');
        $classId = $request -> input('classId');
        $firstname = $request -> input('firstname');
        $lastname = $request -> input('lastname');
        $email = $request -> input('email');
        $street = $request -> input('street');
        $plz = $request -> input('plz');
        $city = $request -> input('city');


    DB::select("UPDATE students SET classId = \"$classId\",
                 firstname = \"$firstname\", 
                 lastname = \"$lastname\", 
                 email = \"$email\", 
                 street = \"$street\", 
                 plz = \"$plz\", 
                 city = \"$city\" 
                 WHERE studentsId = \"$studentsId\"");
                                                
        return redirect()->action('StudentsController@index');
    }
    /**
    * this method returns the StudnetsController@classes action and saves the new class in the database
    * @var $request
    * @return StudentsController@classes
    */
    public function createClass(Request $request)
    {
        $class = new Classes;
    
        $class->name = $request ->input('name');
        $class->save();

        return redirect()->action('StudentsController@classes');
    }
    /**
    * this method returns the StudentsController@index action and delete the selected student from the database
    * @var $studentsId
    * @return StudentsController@index
    */
    public function deleteStudent($studentsId)
    {
        DB::delete('DELETE FROM students WHERE studentsId = ?', [$studentsId]);

        return redirect()->action('StudentsController@index');
    }
    /**
    * this method returns the StudentsController@classes action and delete the selected class from the database, and move all students on this class to the default class
    * @var $classId
    * @return StudentsController@classes
    */
    public function deleteClass($classId)
    {
        DB::delete('DELETE FROM classes WHERE classId = ?', [$classId]);

        DB::select('UPDATE students SET classID = 5 WHERE classId = ?', [$classId]);

        return redirect()->action('StudentsController@classes');
    }
    /**
    * this method returns the editClass view and all datas from the selected class from the database   
    * @var $classId
    * @return editClass.blade.php, $selectedClass
    */
    public function editClass($classId)
    {
        $classe = DB::select("SELECT * FROM classes WHERE classId = $classId");

        $selectedClass;

        foreach ($classe as $class) {
            $selectedClass = $class;
        }

        return view('pages.editClass', ['selectedClass' => $selectedClass]);
    }
    /**
    * this method returns the StudentsController@classes action and update all datas from  the selected class  in the database
    * @var $request
    * @return StudentsController@classes
    */
    public function updateClass(Request $request)
    {
        $classId = $request -> input('classId');
        $name = $request -> input('name');
        
    DB::select("UPDATE classes SET 
                 name = \"$name\" 
                 WHERE classId = \"$classId\"");
                                                
        return redirect()->action('StudentsController@classes');
    }
}
