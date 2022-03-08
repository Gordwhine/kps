<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     *  Display the home page
     */
    public function index()
    {
        return view('welcome');
    }

    // Display the about page
    public function about()
    {
        return view('about');
    }

    // Display the list of teachers
    public function teachers()
    {
        return view('teachers');
    }

    // Display the list of subjects
    public function subjects()
    {
        return view('subjects');
    }

    // Display the list of contact
    public function contact()
    {
        return view('contact');
    }
}
