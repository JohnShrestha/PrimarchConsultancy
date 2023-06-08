@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} Add | SCMS
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
        <form action="{{ route($_base_route.'.store')}}" method="POST" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Add {{ $_panel }}</div>
                            <div class="ibox-tools">
                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <!-- <label for="name">Name</label>
                                    <select name="country_member" class="form-control">
                                        <option value="">Select Team Member</option>
                                        <option value="nepal-team-member">Nepal Team Members</option>
                                        <option value="india-team-member">India Team Members</option>
                                    </select>
                                    @if($errors->has('country_member'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('country_member') }}</span></p>
                                    @endif -->
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name">
                                    @if($errors->has('name'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('name') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Designation</label>
                                    <input class="form-control" type="text" name="designation" id="designation" value="{{ old('designation') }}" placeholder="Designation ">
                                    @if($errors->has('designation'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('designation') }}</span></p>
                                    @endif
                                </div>
                                <!-- <div class="form-group col-md-12">
                                    <label for="name">Description</label>
                                    <textarea name="description" cols="5" rows="3" class="form-control rounded" value="">{{ old('description') }}</textarea>
                                    @if($errors->has('designation'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('designation') }}</span></p>
                                    @endif
                                </div> -->
                                <div class="form-group col-md-12">
                                    <label for="name">Facebook Link</label>
                                    <input class=" form-control" type="url" id="facebook" name="facebook" value="{{ old('social_profile_fb') }}"placeholder="social_profile_fb ">
                                    @if($errors->has('name'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('name') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Twitter Link</label>
                                    <input class=" form-control" type="url" id="twitter" name="twitter" value=" {{ old('social_profile_twitter') }}" placeholder="social_profile_twitter ">
                                    @if($errors->has('name'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('name') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Instagram</label>
                                    <input class=" form-control" type="url" id="insta" name="insta" value="{{ old('social_profile_insta') }} " placeholder="social_profile_insta "> 
                                    @if($errors->has('name'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('name') }}</span></p>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="title">Images</label>
                                    <input class="form-control" type="file" name="image" id="title" value="" placeholder="Product Url" accept="image/png, image/gif, image/jpeg">
                                    @if($errors->has('image'))
                                    <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('image') }}</span></p>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Published</label>
                                    <div class="form-group">
                                        <label class="ui-checkbox">
                                            <input type="hidden" name="status" value=0><span class="input-span"></span>
                                            <input type="checkbox" name="status" value=1><span class="input-span"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Begin Progress Bar Buttons-->
                            <a href="{{ route($_base_route.'.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i> Back</a>
                            <button class="btn btn-success btn-sm" type="submit" style="cursor:pointer;"> <i class="fa fa-paper-plane"></i> Submit </button>
                            <!-- End Progress Bar Buttons-->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/cms/js/scripts/form-plugins.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>

@endsection