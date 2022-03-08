@extends('layouts.app')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Home
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li> <a href="{{ route('dashboard') }}"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
                <li> <a href="{{ route('enquires') }}"> <i class=" icon-book"></i> Enquiries</a> </li>
                <li> <a href="{{ route('register') }}"> <i class="icon-survey"></i> Registration</a> </li>
                <li> <a href="{{ route('students') }}"> <i class="icon-client"></i> Manage Sudents</a> </li>
                <li> <a href="{{ route('confirm') }}"> <i class="icon-wallet"></i> Make Payment </a> </li>
                <li> <a href="{{ route('subjects') }}"> <i class="icon-book"></i> Manage Subjects </a> </li>
                <li> <a href="{{ route('results') }}"> <i class="icon-pdf"></i> Print Results </a> </li>
                <li> <a href="{{ route('teachers') }}"> <i class="icon-people"></i> Manage Teachers </a> </li>
            </ul>
        </div>
    </div>
</div>
@endsection
