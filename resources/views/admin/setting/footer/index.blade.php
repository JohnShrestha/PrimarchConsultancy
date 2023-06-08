@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} List | SCMS
@endsection
@section('styles')
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4  text-primary">Website Setting</h1>
</div>
@include('admin.setting.includes.button-nav')
<div class="card shadow mb-4">
    <div class="card-body">
    <form action="{{ route('admin.setting.footer.update' ,$data['single']->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site First Title (*)</label> <br>
                        <input class="form-control" type="text" id="footer_first_title" value="@if(isset($data['single']->footer_first_title)) {{ $data['single']->footer_first_title }} @else {{ old('footer_first_title') }} @endif" name="footer_first_title">
                        @if($errors->has('footer_first_title'))
                        <p id="name-error" class="help-block" for="site_name"><span>{{ $errors->first('footer_first_title') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description(*)</label>
                        <textarea name="footer_first_description" id="my-editor" cols="20" rows="3" class="form-control rounded" value="">@if(isset($data['single']->footer_first_description)) {{ $data['single']->footer_first_description }} @else {{ old('footer_first_title') }} @endif</textarea>
                        @if($errors->has('footer_first_description'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('footer_first_description') }}</span></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Second Title (*)</label> <br>
                        <input class="form-control" type="text" id="site_name" value="@if(isset($data['single']->footer_second_title)) {{ $data['single']->footer_second_title }} @else {{ old('footer_second_title') }} @endif" name="footer_second_title">
                        @if($errors->has('footer_second_title'))
                        <p id="name-error" class="help-block" for="site_name"><span>{{ $errors->first('footer_second_title') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description(*)</label>
                        <textarea name="footer_second_description" id="my-editor-1" cols="10" rows="3" class="form-control rounded" value="">@if(isset($data['single']->footer_second_description)) {{ $data['single']->footer_second_description }} @else {{ old('footer_second_description') }} @endif</textarea>
                        @if($errors->has('footer_second_description'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('footer_second_description') }}</span></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Third Title (*)</label> <br>
                        <input class="form-control" type="text" id="footer_third_title" value="@if(isset($data['single']->footer_third_title)) {{ $data['single']->footer_third_title }} @else {{ old('footer_third_title') }} @endif" name="footer_third_title">
                        @if($errors->has('footer_third_title'))
                        <p id="name-error" class="help-block" for="site_name"><span>{{ $errors->first('footer_third_title') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description(*)</label>
                        <textarea name="footer_third_description" id="my-editor-2" cols="10" rows="3" class="form-control rounded" value="">@if(isset($data['single']->footer_third_description)) {{ $data['single']->footer_third_description }} @else {{ old('footer_third_description') }} @endif</textarea>
                        @if($errors->has('footer_third_description'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('footer_third_description') }}</span></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Forth Title (*)</label> <br>
                        <input class="form-control" type="text" id="site_name-2" value="@if(isset($data['single']->footer_fourth_title)) {{ $data['single']->footer_fourth_title }} @else {{ old('footer_fourth_title') }} @endif" name="footer_fourth_title">
                        @if($errors->has('footer_fourth_title'))
                        <p id="name-error" class="help-block" for="site_name"><span>{{ $errors->first('footer_fourth_title') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description(*)</label>
                        <textarea name="footer_fourth_description" id="my-editor-3" cols="10" rows="3" class="form-control rounded" value="">@if(isset($data['single']->footer_fourth_description)) {{ $data['single']->footer_fourth_description }} @else {{ old('footer_fourth_description') }} @endif</textarea>
                        @if($errors->has('footer_fourth_description'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('footer_fourth_description') }}</span></p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Begin Progress Bar Buttons-->
            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i> Reset</button>
            <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-paper-plane"></i> Submit </button>

            <!-- End Progress Bar Buttons-->
        </form>
    </div>
</div>

@endsection
@section('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor', options);
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor-1', options);
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor-2', options);
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor-3', options);
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>

@endsection