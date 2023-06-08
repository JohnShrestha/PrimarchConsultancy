@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} Deleted | SCMS
@endsection
@section('styles')
<link href="{{ asset('assets/cms/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary"> Deleted {{ $_panel }}</h1>
        <a href="{{ route($_base_route.'.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-arrow-left fa-sm text-white-50"></i> Back </a>
    </div>
    <div class="ibox">
        <div class="ibox-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="newrequest">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Blog Name</th>
                                <th>Images</th>
                                <th>Deleted Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $data['rows'] as $key=> $row)
                            <tr>
                                <td>{{ $key+1}}.</td>
                                <td>{{ $row->title }}</td>
                                <td>
                                    <img src="{{$row->thumbs}}" class="img img-responsive" height="100px" width="120px" alt="{{$row->title}}" title="{{$row->title}}">
                                </td>
                                <td>{{ $row->deleted_at }}</td>
                                <td>
                                    @if(Route::has($_base_route.'.restore'))
                                    <button id="restore" data-id="{{ $row->id }}" data-url="{{ URL::route($_base_route.'.restore', ['id'=>$row->id]) }}" type="button" class="btn btn-success btn-xs"><i class="fa fa-reply"></i></button>
                                    @endif

                                    @if(Route::has($_base_route.'.delete'))
                                    <button id="delete" data-id="{{ $row->id }}" data-url="{{ URL::route($_base_route.'.delete', ['id'=>$row->id]) }}" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                    @endif
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
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    $(function() {
        $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
        });
    })

    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        var url = "{{route('admin.application.approved')}}";

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: url,
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('status Update Successfully !');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                });
                if (status) {
                    alert('Successfully Approved!!');
                } else {
                    alert('Successfully Disapproved!!');
                }
                // location.reload(true);
            },
            error: function(data) {
                alert("Ajax calling error !");
            }
        });

    });
</script>


<script type="text/javascript">
    $(document).ready(function() {

        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                responsive: true
            });
        })

    });
</script>
@endsection