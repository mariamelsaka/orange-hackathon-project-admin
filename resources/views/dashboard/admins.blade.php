@extends('dashboard.common.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                        <tbody>
                      
        </div>

    </div>

@endsection
