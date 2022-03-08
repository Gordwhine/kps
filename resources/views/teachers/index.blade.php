@extends('layouts.app')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Teachers
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                    <h5>Teachers List</h5>
                    <a href="{{ route('create') }}">
                        <span class="label label-primary">
                            Add
                            <i class="icon-plus"></i> 
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
                                <th style="width: 15%; text-align: center;">First Name</th>
                                <th style="width: 15%; text-align: center;">Last Name</th>
                                <th style="width: 10%; text-align: center;">Teachers Id</th>
                                <th style="width: 10%; text-align: center;">Email Address</th>
                                <th style="width: 10%; text-align: center;">Phone Number</th>
                                <th style="width: 20%; text-align: center;">Residential Address</th>
                                <th style="width: 15%; text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>KPS00124</td>
                                <td>jane@kingspremierschool.org</td>
                                <td>090111111111</td>
                                <td>Aiyeteju street ibeju-Lekki</td>
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
