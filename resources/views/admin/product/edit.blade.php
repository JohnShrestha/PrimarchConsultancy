@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} Edit | SCMS
@endsection
@section('styles')
<!-- PLUGINS STYLES-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
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
        <form action="{{ route($_base_route.'.update', $data['rows']->post_unique_id )}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
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
                                <div class="col-sm-12 form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($data['category'] as $row)
                                        <option value="{{ $row->id }}" @if($data['rows']->category_id == $row->id) selected @endif >{{ $row->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="@if(isset($data['rows']->title)) {{ $data['rows']->title   }} @endif" id="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="my-editor" cols="30" rows="5" class="form-control rounded" value="">
                                @if(isset($data['rows']->description)) {{ $data['rows']->description   }} @endif
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Meta Tag</label>
                                <input type="text" data-role="tagsinput" name="tags" value="@if(isset($data['rows']->tags)) {{ $data['rows']->tags   }} @endif" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>SEO</label>
                                <textarea name="meta_keyword" id="my-editor" cols="30" rows="3" class="form-control rounded" value="">
                                @if(isset($data['rows']->meta_keyword)) {{ $data['rows']->meta_keyword   }} @endif
                                </textarea>
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
                                </div>
                            </div>

                            <div class="form-group">
                                <img src="{{ $data['rows']->thumbs }}" class="img img-thumbnail img-responsive" width="100px" alt="{{ $data['rows']->title }}" title="{{ $data['rows']->title }}">
                                @if($errors->has('thumbs'))
                                <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('thumbs') }}</span></p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">File Section</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="box box-solid box-success">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="increment-resource">
                                        <button type="button" class="btn btn-primary btn-xs btn-file "><i class="fa fa-solid fa-plus"></i> Add New</button>
                                    </div>
                                    <div class="file-block"></div>
                                    <div class="clone-file hidden">
                                        <div class="control-group">
                                            <hr>
                                            <div class="form-group">
                                                <label for="titleFile">Document Title</label>
                                                <input type="title" name="file_title[]" class="form-control rounded" id="titleFile" placeholder="Enter document title" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="uploadFile">Document</label>
                                                <input type="file" name="files[]" class="form-control rounded" id="uploadFile" placeholder="Enter Username" value="">
                                            </div>
                                            <button type="button" class="btn btn-danger btn-xs  pull-right btn-file-remove">Remove File </button><br>
                                        </div>
                                    </div>
                                    <br>
                                    @if(isset($data['file']))
                                    <table class="display table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>File Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['file'] as $row)
                                            <tr class="gradeX">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->title }}</td>
                                                <td>
                                                    @include('admin.section.buttons.button-delete-file')
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Published</label>
                            <div class="form-group">
                                <label class="ui-checkbox">
                                    <input type="hidden" name="status" value=0><span class="input-span"></span>
                                    <input type="checkbox" name="status" value=1 @if($data['rows']->status){{ "checked" }} @endif><span class="input-span"></span>
                                </label> 
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
@endsection
@section('scripts')
<script src="{{ asset('assets/cms/js/scripts/form-plugins.js')}}" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
<script>
    CKEDITOR.replace('my-editor', options);

    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    $(document).ready(function() {
        $(".btn-img").click(function() {
            var html = $(".clone-img").html();
            $(".slider-image-block").append(html);
            // $(".increment").after(html);
        });

        $(".btn-feature").click(function() {
            var html = $(".clone-feature").html();
            $(".featured-block").append(html);
            //   $(".increment-feature").after(html);
        });

        $(".btn-resource").click(function() {
            var html = $(".clone-resource").html();
            $(".resource-info-block").append(html);
        });

        $(".btn-file").click(function() {
            var html = $(".clone-file").html();
            $(".file-block").append(html);
        });

        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });

        $("body").on("click", ".btn-file-remove", function() {
            $(this).parents(".clone-file").remove();
        });
    });
</script>
@endsection