<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    //
    /**
     *  display the registration form
     */
    public function create()
    {
        return view('register.create');
    }
}
