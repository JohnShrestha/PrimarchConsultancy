@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} Edit | SCMS
@endsection
@section('styles')
<!-- PLUGINS STYLES-->
<link href="{{ asset('assets/cms/plugin/nepali.datepicker.v3.7/css/nepali.datepicker.v3.7.min.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/cms/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" />

<style>
    .nav-pills {
        justify-content: space-around;
    }

    .help-block {
        color: red;
    }
</style>

@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4  text-primary">{{ $_panel }} Edit</h1>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
    <form action="{{ route($_base_route.'.update', $data['rows']->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="@if(isset($data['rows']->title)) {{ $data['rows']->title   }} @endif" placeholder="Title">
                        @if($errors->has('title'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('title') }}</span></p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input class="form-control" type="url" name="url" id="url" value="@if(isset($data['rows']->url)) {{ $data['rows']->url   }} @endif" placeholder="url">
                        @if($errors->has('url'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('url') }}</span></p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Images</label>
                        <input class="form-control" type="file" name="image" id="title" value="" placeholder="Product Url" accept="image/png, image/gif, image/jpeg">
                        @if($errors->has('image'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('image') }}</span></p>
                        @endif
                    </div>
                    <div class="form-group">
                        <img src="{{ $data['rows']->image }}" class="img img-thumbnail img-responsive" width="200px" alt="">
                        @if($errors->has('image'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('image') }}</span></p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Order</label>
                        <input class=" form-control" type="number" id="order" name="order" value="{{ $data['rows']->order   }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-group">
                            <label class="ui-checkbox">
                                <input type="hidden" name="status" value=0><span class="input-span"></span>
                                <input type="checkbox" name="status" value=1 @if($data['rows']->status){{ "checked" }} @endif ><span class="input-span"></span> Status
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Begin Progress Bar Buttons-->
            <a href="{{ route($_base_route.'.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i> Back</a>
            <button class="btn btn-success btn-sm" type="submit" style="cursor:pointer;"> <i class="fa fa-paper-plane"></i> Submit </button>

            <!-- End Progress Bar Buttons-->
        </form>
    </div>
</div>
@endsection
@section('scripts')
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="{{ asset('assets/cms/plugin/nepali.datepicker.v3.7/js/nepali.datepicker.v3.7.min.js')}}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/cms/vendors/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/js/scripts/form-plugins.js')}}" type="text/javascript"></script>


<script>
    $(document).ready(function() {
        $('#name').change(function() {
            var name = this.value;
            var url = "{{route('getAccount')}}";
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    name: name,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    //debugger;
                    $('#unique_id').val(result.account[0].unique_id);
                    $('#mobile').val(result.account[0].mobile);
                    $('#email').val(result.account[0].email);
                }
            });
        });

    });
</script>
<script>
    $("#nepali-datepicker_2").nepaliDatePicker({
        ndpYear: true,
        ndpMonth: true,
        ndpYearCount: 1000,
        unicodeDate: true,

    });
</script>
@endsection