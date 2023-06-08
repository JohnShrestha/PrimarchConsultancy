@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/cms/plugins/nepalidate/css/nepaliDatePicker.min.css')}}">
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
<!-- Begin Page Content -->
<div class="container-fluid">
    @include('user.application.stepper')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
            <!-- Page Heading -->

            <p class="mb-4" style="background-color:#fff;border:1px solid #fff;border-radius:12px;padding:5px;margin-top:12px;  box-shadow: 0 0 28px rgb(0 0 0 / 8%);">
                Please enter your information correctly and accurately.All field will be
                send
                to selected school upon submission of application on Applyboard.</p>

            <div class="card shadow mb-4">

                <div class="card-body">
                    <form action="{{ route('user.application.update_student_education', ['unique_id' => $data['unique_id']])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Education History</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country of education">Country of Education</label><br>
                                        <select class="form-control" name="country_of_education" id="country_of_education">
                                            <option value="">--Select--</option>
                                            <option value="australia" {{ $data['single']->country_of_education == 'australia'  ? 'selected' : ''}}>Australia</option>
                                            <option value="UK" {{ $data['single']->country_of_education == 'UK'  ? 'selected' : ''}}>UK</option>
                                            <option value="canada" {{ $data['single']->country_of_education == 'canada'  ? 'selected' : ''}}>Canada</option>
                                            <option value="USA" {{ $data['single']->country_of_education == 'USA'  ? 'selected' : ''}}>USA</option>
                                        </select>
                                        @if($errors->has('country_of_education'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('country_of_education') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country of education">Highest Level of Education</label><br>
                                        <select class="form-control" name="highest_education" id="highest_education">
                                            <option value="">--Select--</option>
                                            <option value="Diploma" {{ $data['single']->highest_education == 'Diploma'  ? 'selected' : ''}}>Diploma</option>
                                            <option value="Bachelor" {{ $data['single']->highest_education == 'Bachelor'  ? 'selected' : ''}}>Bachelor Degree</option>
                                            <option value="Masters" {{ $data['single']->highest_education == 'Masters'  ? 'selected' : ''}}>Masters Degreee</option>
                                        </select>
                                        @if($errors->has('highest_education'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('highest_education') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Grading Scheme</label> <br>
                                        <select class="form-control" name="grade" id="grade">
                                            <option value="">--Select--</option>
                                            <option value="A+" {{ $data['single']->grade == 'A+'  ? 'selected' : ''}}>A+</option>
                                            <option value="A" {{ $data['single']->grade == 'A'  ? 'selected' : ''}}>A </option>
                                            <option value="B+" {{ $data['single']->grade == 'B+'  ? 'selected' : ''}}>B+ </option>
                                            <option value="B" {{ $data['single']->grade == 'B'  ? 'selected' : ''}}>B</option>
                                            <option value="C" {{ $data['single']->grade == 'C'  ? 'selected' : ''}}>C </option>
                                            <option value="C+" {{ $data['single']->grade == 'C+'  ? 'selected' : ''}}>C+ </option>
                                            <option value="D" {{ $data['single']->grade == 'D'  ? 'selected' : ''}}>D </option>
                                            <option value="D+" {{ $data['single']->grade == 'D+ '  ? 'selected' : ''}}>D+ </option>
                                        </select>
                                        @if($errors->has('grade'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('grade') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Schools Attendend</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country of Institution Scheme</label> <br>
                                        <select class="form-control" name="country_of_institute_scheme" id="coi">
                                            <option value="">--Select--</option>
                                            <option value="Nepal" {{ $data['single']->country_of_institute_scheme == 'Nepal'  ? 'selected' : ''}}>Nepal</option>
                                            <option value="UK" {{ $data['single']->country_of_institute_scheme == 'UK'  ? 'selected' : ''}}>UK </option>
                                            <option value="USA" {{ $data['single']->country_of_institute_scheme == 'USA'  ? 'selected' : ''}}>USA </option>
                                        </select>
                                        @if($errors->has('country_of_institute_scheme'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('country_of_institute_scheme') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>University</label> <br>
                                        <select class="form-control" name="university" id="coi">
                                            <option value="">--Select--</option>
                                            @foreach($data['university'] as $row)
                                            <option value="{{$row->id}} " @if(($data['single']->university == $row->id)) selected @endif> {{$row->name}} </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('country_of_institute_scheme'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('country_of_institute_scheme') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name of Institution </label><br>
                                        <input class="form-control" type="text" value="@if(isset($data['single']->institue_name)) {{ $data['single']->institue_name }} @else {{ old('institue_name') }} @endif" id="institue_name" name="institue_name">
                                        @if($errors->has('institue_name'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('institue_name') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country of education"> Level of Education</label><br>
                                        <select class="form-control" name="loe" id="level_of_education">
                                            <option value="">--Select--</option>
                                            <option value="Diploma" {{ $data['single']->loe == 'Diploma'  ? 'selected' : ''}}>Diploma</option>
                                            <option value="Bachelor" {{ $data['single']->loe == 'Bachelor'  ? 'selected' : ''}}>Bachelor Degree</option>
                                            <option value="Masters" {{ $data['single']->loe == 'Masters'  ? 'selected' : ''}}>Masters Degreee</option>
                                        </select>
                                        @if($errors->has('loe'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('loe') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Primary Language of Instruction </label><br>
                                        <input class="form-control" type="text" id="instruct" value="@if(isset($data['single']->instruct)) {{ $data['single']->instruct }} @else {{ old('instruct') }} @endif" name="instruct">
                                        @if($errors->has('instruct'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('instruct') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Attended Institution From </label><br>
                                        <input class="form-control" type="text" readonly value="@if(isset($data['single']->admission)) {{ $data['single']->admission }} @else {{ old('admission') }} @endif" id="datepicker-1" name="admission">
                                        @if($errors->has('admission'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('admission') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Degree Name </label><br>
                                        <input class="form-control" type="text" value="@if(isset($data['single']->degreename)) {{ $data['single']->degreename }} @else {{ old('degreename') }} @endif" id="degreename" name="degreename">
                                        @if($errors->has('degreename'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('degreename') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Attended Institution To </label><br>
                                        <input class="form-control" readonly value="@if(isset($data['single']->leave)) {{ $data['single']->leave }} @else {{ old('leave') }} @endif" type="text" id="datepicker-2" id="leave" name="leave">
                                        @if($errors->has('leave'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('leave') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><br>
                                        <label>I have Graduated from this Institution </label><br>
                                        <input class="mr-1 ml-1" type="radio" name="choose" id="yes" value="yes" {{$data['single']->choose== 'yes'  ? 'checked' : ''}}>Yes
                                        <input class="mr-1 ml-1" type="radio" name="choose" id="no" value="no" {{$data['single']->choose== 'no'  ? 'checked' : ''}}>No
                                        @if($errors->has('choose'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('choose') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Graduation Date </label><br>
                                        <input class="form-control" type="text" readonly value="@if(isset($data['single']->graduationdate)) {{ $data['single']->graduationdate }} @else {{ old('graduationdate') }} @endif" name="graduationdate" id="datepicker-3">
                                        @if($errors->has('graduationdate'))
                                        <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('graduationdate') }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <h5>School Address</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>School Address </label> <br>
                                                <input class="form-control" type="text" value="@if(isset($data['single']->schooladdress)) {{ $data['single']->schooladdress }} @else {{ old('schooladdress') }} @endif" id="address" name="schooladdress" placeholder="Enter school address ">
                                                @if($errors->has('schooladdress'))
                                                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('schooladdress') }}</span></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City/Town </label> <br>
                                                <input class="form-control" type="text" id="city" value="@if(isset($data['single']->city)) {{ $data['single']->city }} @else {{ old('city') }} @endif" name="city" placeholder="Enter your city/town">
                                                @if($errors->has('city'))
                                                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('city') }}</span></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Province </label> <br>
                                                <input class="form-control" type="text" id="province" name="schoolprovince" value="@if(isset($data['single']->schoolprovince)) {{ $data['single']->schoolprovince }} @else {{ old('schoolprovince') }} @endif" placeholder="Enter  province...">
                                                @if($errors->has('schoolprovince'))
                                                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('schoolprovince') }}</span></p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal/Zipcode number </label><br>
                                                <input class="form-control" type="text" id="postalcode" value="@if(isset($data['single']->postalcode)) {{ $data['single']->postalcode }} @else {{ old('postalcode') }} @endif" name="postalcode">
                                                @if($errors->has('postalcode'))
                                                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('postalcode') }}</span></p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-warning btnPrevious" href="{{ route('user.application.edit', ['unique_id' => $data['unique_id']])}}"> <i class="fa fa-eye"></i> Preview</a> &nbsp;
                                <button class="btn btn-success" type="submit"> <i class="fa fa-paper-plane"></i> Next</button>
                            </div>
                        </div>
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
        $("#datepicker-2").datepicker();
        $("#datepicker-3").datepicker();

    });
</script>
@endsection