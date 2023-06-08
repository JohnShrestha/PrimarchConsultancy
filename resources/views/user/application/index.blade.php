@extends('layouts.user')
@section('styles')
<link href="{{ asset('assets/cms/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary">My Application</h1>
        <a href="{{route('user.application.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Your Loan Status</div>
            <ul class="nav nav-tabs tabs-line nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="#newrequest" data-toggle="tab"><i class="fa fa-home" aria-controls="newrequest" role="tab"></i> New request/under approval</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#approved" data-toggle="tab"><i class="fa fa-user" aria-controls="approved" role="tab"></i> Approved</a>
                </li>
            </ul>
        </div>
        <div class="ibox-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="newrequest">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Unique ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $data['application'] as $key=> $row)
                            <tr>
                                <td>{{ $key+1}}.</td>
                                <td>{{ $row->unique_id }}</td>
                                <td>{{$row->application_name}} </td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <span class="badge badge-{{($row->status=='inactive')?'danger':'success'}}">
                                        approved
                                    </span>
                                </td>
                                <td>
                                    @include('user.section.buttons.button-delete')
                                    @include('user.section.buttons.button-edit')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="approved">
                    <table class="table table-striped table-bordered table-hover" id="example-table-new" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Unique ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $data['application'] as $key=> $row)
                            <tr>
                                <td>{{ $key+1}}.</td>
                                <td>{{ $row->unique_id }}</td>
                                <td>{{$row->application_name}} </td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <span class="badge badge-{{($row->status=='inactive')?'danger':'success'}}">
                                        approved
                                    </span>
                                </td>
                                <td>
                                    @include('user.section.buttons.button-delete')
                                    @include('user.section.buttons.button-edit')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/cms/vendors/DataTables/datatables.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                responsive: true

            });
        })

        $('#example-table-new').dataTable({
            responsive: true,
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust()
                .fixedColumns().relayout();
        });
    });
</script>
@endsection