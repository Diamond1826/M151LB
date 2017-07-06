<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
* @author D. Schaufelberger
* @since July, 2017
* @version 1.0
* this controller class manage the pages blades
*/
class PagesController extends Controller
{
    /**
    * this method returns the index view
    * @return index.blade.php
    */
    public function index() 
    {
        return view('pages.index');
    }
    /**
    * this method returns the contact view
    * @return contact.blade.php
    */
    public function contact()
    {
        return view('pages.contact');
    }
    /**
    * this method returns the login view
    * @return login.blade.php
    */
    public function login() 
    {
        return view('auth.login');
    }
    /**
    * this method returns the register view
    * @return register.blade.php
    */
    public function registry() 
    {
        return view('auth.register');
    }
    /**
    * this method returns the newStudent view
    * @return newStudent.blade.php
    */
    public function newStudent()
    {
        return view('pages.newStudent');
    }
    /**
    * this method returns the newClass view
    * @return newClass.blade.php
    */
    public function newClass()
    {
        return view('pages.newClass');
    }
}
