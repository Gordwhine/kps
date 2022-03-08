<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    /***
     *  Display a listing of the dashboard
     */
    public function index()
    {
        return view('students.index');
    }
}
