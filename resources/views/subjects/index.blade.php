@extends('layouts.app')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Subjects
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
                    <h5>Subject List</h5>
                    <a href="{{ route('create-subject') }}">
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
                                <th style="width: 60%; text-align: center;">Subject Name</th>
                                <th style="width: 20%; text-align: center;">Action</th>
                                <th style="width: 15%; text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>English Language</td>
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
