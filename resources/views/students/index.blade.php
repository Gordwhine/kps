@extends('layouts.app')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Students
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                    <h5>Student List</h5>
                    <a href="{{ route('register') }}">
                        <span class="label label-primary">
                            Add
                            <i class="icon-share-alt"></i> 
                        </span>
                    </a>
                    <a href="{{ route('home') }}">
                        <span class="label label-success">
                            <i class="icon-arrow-left"></i> 
                            Back
                        </span>
                    </a>
                </div>
                <div class="widget-content">
                    <table class="table table-bordered table-striped with-check">
                        <thead>
                            <tr>
                                <th style="width: 5%; text-align: left;">#</th>
                                <th style="width: 20%; text-align: center;">First Name</th>
                                <th style="width: 20%; text-align: center;">Last Name</th>
                                <th style="width: 20%; text-align: center;">Registration No</th>
                                <th style="width: 20%; text-align: center;">Class</th>
                                <th style="width: 15%; text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>TKP1234</td>
                                <td>Basic 1</td>
                                <td>
                                    <button class="btn btn-info btn-mini">Edit</button>
                                    <button class="btn btn-danger btn-mini">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
