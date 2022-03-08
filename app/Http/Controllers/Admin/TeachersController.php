<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    /**
     *  Display a listing of the subjects
     */
    public function index()
    {
        return view('teachers.index');
    }

    //
    /**
     *  display the registration form
     */
    public function create()
    {
        return view('teachers.create');
    }
}
