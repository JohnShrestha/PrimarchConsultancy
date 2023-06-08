@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/cms/plugins/nepalidate/css/nepaliDatePicker.min.css')}}">
<style>
    .help-block {
        color: red;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">General Information </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.general.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name</label> <br>
                                    <input class="form-control" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter your first name">
                                    @if($errors->has('first_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('first_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name</label> <br>
                                    <input class="form-control" type="text" id="mid_name" value="{{ old('mid_name') }}" name="mid_name" placeholder="Enter your middle name">
                                    @if($errors->has('mid_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('mid_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name</label> <br>
                                    <input class="form-control" type="text" id="last_name" value="{{ old('last_name') }}" name="last_name" placeholder="Enter your last name">
                                    @if($errors->has('last_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('last_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone</label> <br>
                                    <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone">
                                    @if($errors->has('phone'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('phone') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label> <br>
                                    <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                    @if($errors->has('email'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date Of Birth</label> <br>
                                    <input class="form-control bod-picker" type="text" id="datepicker-1" name="dob" readonly placeholder="Date of birth ">
                                    @if($errors->has('dob'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('dob') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country of education"> Education</label><br>
                                    <select class="form-control" name="education" id="loe">
                                        <option value="">--Select--</option>
                                        <option value="see/s.l.c">SEE/S.L.C</option>
                                        <option value="10+2">10+2</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="bachelor"> Bachelor Degree</option>
                                        <option value="master">Masters Degreee</option>
                                    </select>
                                    @if($errors->has('education'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('education') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender:</label><br>
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="male" value="male">Male
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="female" value="female">Female
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="other" value="other">Other
                                    @if($errors->has('gender'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('gender') }}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Begin Progress Bar Buttons-->
                        <div class="buttons ">
                            <button class="btn btn-warning " type="reset"> <i class="fa fa-trash"></i> Reset</button>
                            <button class="btn btn-success" type="submit"> <i class="fa fa-paper-plane"></i> Submit</button>

                        </div>
                        <!-- End Progress Bar Buttons-->
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@section('js')
<!-- <script src="{{asset('assets/cms/plugins/nepalidate/js/nepaliDatePicker.min.js')}}"></script> -->
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    // $(".bod-picker").nepaliDatePicker({
    //     dateFormat: "%D, %M %d, %y",
    //     closeOnDateSelect: true
    // });

    // $("#clear-bth").on("click", function(event) {
    //     $(".bod-picker").val('');
    // });
    $(function() {
        $("#datepicker-1").datepicker();
    });
</script>
@endsection