<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index() 
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login() 
    {
        return view('auth.login');
    }

    public function registry() 
    {
        return view('auth.register');
    }

    public function newStudent()
    {
        return view('pages.newStudent');
    }

    public function newClass()
    {
        return view('pages.newClass');
    }
}
