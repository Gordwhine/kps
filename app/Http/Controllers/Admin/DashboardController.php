<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /***
     *  Display a listing of the dashboard
     */
    public function index()
    {
        return view('admin.index');
    }

    /***
     *  Display a listing of the dashboard
     */
    public function enquires()
    {
        return "<h3 text-align='center'>This page is under construction, Please contact the Administration for further assistance</h3>";
    }
}
