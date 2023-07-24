@extends('layouts.app')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">All Loans</h6>
                    </div>
                    <div class="col-md-2">
                        <a href="{{'/loan'}}" class="btn btn-sm btn-secondary">+ Add New</a>
                    </div>

                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Amount</th>
                                <th>Position</th>
                                <th>Interest_Rate</th>
                                <th>Payments</th>
                                <th>Account_Type</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($data) > 0)

                        @foreach($data as $row)

                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->contact }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->amount }}</td>
                                <td>{{ $row->position }}</td>
                                <td>{{ $row->interest_rate }}</td>
                                <td>{{ $row->payments }}</td>
                                <td>{{ $row->account_type }}</td>
                            </tr>
                            @endforeach

                            @else
                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                        </tbody>
                        @endif
                    </table>
                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection('content')