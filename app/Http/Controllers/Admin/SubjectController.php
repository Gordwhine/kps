<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
     /***
     *  Display a listing of the subjects
     */
    public function index()
    {
        return view('subjects.index');
    }

    //
    /**
     *  display the registration form
     */
    public function create()
    {
        return "<h3 text-align='center'>Cming soon, Please contact the Administration for assistance</h3>";
    }
}
