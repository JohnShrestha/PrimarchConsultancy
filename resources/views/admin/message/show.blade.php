@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h1 class="h4  text-primary"> {{ $_panel }} List</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="ibox">
        <div class="panel-body">
        <a href="{{ route($_base_route.'.index')}}" class="btn btn-warning btn-sm "><i class="fa fa-undo"></i> Back</a><hr>
            <div class="adv-table">
                <table class="display table table-bordered table-striped" id="dynamic-table">
                    <tbody>

                        <tr class="gradeX">
                            <td>Name:</td>
                            <td>{{ $row->name }}</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Subject:</td>
                            <td>{{ $row->subject }}</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Email:</td>
                            <td>{{ $row->email }}</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Address:</td>
                            <td>{{ $row->address }}</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Phone:</td>
                            <td>{{ $row->number }}</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Message:</td>
                            <td>{{ $row->message }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
