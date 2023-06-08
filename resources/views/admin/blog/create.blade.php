@extends('layouts.admin')
@section('title')
Admin Post Add | SCMS
@endsection
@section('styles')
<!-- PLUGINS STYLES-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{ asset('assets/cms/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<style>
    .nav-pills {
        justify-content: space-around;
    }

    .help-block {
        color: red;
    }

    .bootstrap-tagsinput {
        width: 100%;
    }

    .label-info {
        background-color: #17a2b8;

    }

    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
            border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>

@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4  text-primary">{{ $_panel }} Add</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route($_base_route.'.store')}}" method="POST" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <input name="type" type="hidden" value="post">
                <div class="col-md-8">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Select Category</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 form-group">
                                    <label>Post Category</label>
                                    <select name="category_id" class="form-control category_id select_category" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($data['rows'] as $row)
                                        <option value="{{ $row->id }}">{{ $row->title }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('category_id') }}</span></p>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title') }}" id="title" placeholder="Title">
                                @if($errors->has('title'))
                                <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('title') }}</span></p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="title">Why Study in</label>
                                    <input class="form-control" type="text" name="whystudy" value="{{ old('whystudy') }}" id="area" placeholder="Why Study">
                                    @if($errors->has('whystudy'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('whystudy') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">How much it will cost</label>
                                    <input class="form-control" type="text" name="cost" value="{{ old('cost') }}" id="cost" placeholder="How much will it cost">
                                    @if($errors->has('cost'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('cost') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">What are the requirements to study in</label>
                                    <input class="form-control" type="text" name="requirements" value="{{ old('requirements') }}" id="requirements" placeholder="What are the requirements to study">
                                    @if($errors->has('requirements'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('requirements') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">Education System</label>
                                    <input class="form-control" type="text" name="education" value="{{ old('education') }}" id="education" placeholder="Education System in here">
                                    @if($errors->has('education'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('education') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">Scholarship</label>
                                    <input class="form-control" type="text" name="scholarship" value="{{ old('scholarship') }}" id="scholarship" placeholder="Scholarship in Australia">
                                    @if($errors->has('scholarship'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('scholarship') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">Job Opportunities</label>
                                    <input class="form-control" type="text" name="opportunities" value="{{ old('opportunities') }}" id="opportunities" placeholder="Job Opportunities in Australia">
                                    @if($errors->has('opportunities'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('opportunities') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="title">Intake Options</label>
                                    <input class="form-control" type="text" name="intake" value="{{ old('intake') }}" id="intake" placeholder="Intake Options">
                                    @if($errors->has('intake'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('intake') }}</span></p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" cols="30" rows="9" class="form-control rounded summernote">{{ old('description') }}</textarea>
                                <br>
                                @if ($errors->has('description'))
                                    <p id="description-error" class="text-danger" for="site_email">
                                        <span>{{ $errors->first('description') }}</span>
                                    </p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Thumbnail Image</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="panel-body">
                                <div class="form-group ">
                                    <label for="image" class="">Thumbnail Image</label>
                                    <input class=" form-control" type="file" id="image" name="image" value="" accept="image/png, image/gif, image/jpeg">
                                    @if($errors->has('image'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('image') }}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Published</label>
                                <div class="form-group">
                                    <label class="ui-checkbox">
                                        <input type="hidden" name="status" value=0><span class="input-span"></span>
                                        <input type="checkbox" name="status" value=1><span class="input-span"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Featured</label>
                                <div class="form-group">
                                    <label class="ui-checkbox">
                                        <input type="hidden" name="featured" value=0><span class="input-span"></span>
                                        <input type="checkbox" name="featured" value=1><span class="input-span"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <!-- Begin Progress Bar Buttons-->
                        <button class="btn btn-success btn-sm" type="submit" style="cursor:pointer;"> <i class="fa fa-paper-plane"></i> Submit </button>
                        <a href="{{ route($_base_route.'.index')}}" class="btn btn-warning btn-sm "><i class="fa fa-undo"></i> Back</a>
                        <!-- End Progress Bar Buttons-->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('admin.blog.include.modal')
@endsection
@section('scripts')
<script src="{{ asset('assets/cms/vendors/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        //Ajxa route
        $(document).on('click', '.add_type', function(e) {
            e.preventDefault();
            var type = $('#type').val();
            var url = "{{route('admin.types.store')}}";
            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json',
                data: {
                    'types': type,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    console.log(response);
                    $('#exampleModal').modal('hide');
                    location.reload();
                },
                error: function(response) {
                    $('#savefrom_errorList').html("");
                    $('#savefrom_errorList').addClass('alert alert-danger');
                    // alert("Ajax calling error !");
                }
            });
        });
        //summernote
        $(document).ready(function() {
            $('.summernote').summernote({
                tabsize: 2,
                height: 100
            });
        });
        //select 2
        $(".select_category").select2({
            placeholder: "Select",
            allowClear: true
        });
        //slider miages
        $(".btn-img").click(function() {
            var html = $(".clone-img").html();
            $(".slider-image-block").append(html);
        });
        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>
@endsection
