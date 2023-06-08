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
                <form action="{{ route('user.application.update',  $data['single']->unique_id )}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name</label> <br>
                                    <input class="form-control" type="text" value="@if(isset($data['single']->first_name)) {{ $data['single']->first_name }} @else {{ old('first_name') }} @endif" id="fname" name="first_name" placeholder="Enter your first name">
                                    @if($errors->has('first_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('first_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name</label> <br>
                                    <input class="form-control" type="text" value="@if(isset($data['single']->mid_name)) {{ $data['single']->mid_name }} @else {{ old('mid_name') }} @endif" id="mid_name" name="mid_name" placeholder="Enter your middle name">
                                    @if($errors->has('mid_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('mid_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name</label> <br>
                                    <input class="form-control" type="text" value="@if(isset($data['single']->last_name)) {{ $data['single']->last_name }} @else {{ old('last_name') }} @endif" id="lname" name="last_name" placeholder="Enter your last name">
                                    @if($errors->has('last_name'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('last_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date Of Birth</label> <br>
                                    <input class="form-control" type="text" readonly value="@if(isset($data['single']->dob)) {{ $data['single']->dob }} @else {{ old('dob') }} @endif" id="datepicker-1" name="dob">
                                    @if($errors->has('dob'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('dob') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Language</label> <br>
                                    <input class="form-control" type="text" id="lang" value="@if(isset($data['single']->first_language)) {{ $data['single']->first_language }} @else {{ old('first_language') }} @endif" name="first_language">
                                    @if($errors->has('first_language'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('first_language') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="citizenship_country">Country of Citizenship</label><br>
                                    <select class="form-control" name="citizenship_country" id="citizenship_country">
                                        <option value="">--Select--</option>
                                        <option value="australia" {{ $data['single']->citizenship_country == 'australia'  ? 'selected' : ''}}>Australia</option>
                                        <option value="UK" {{ $data['single']->citizenship_country == 'UK'  ? 'selected' : ''}}>UK</option>
                                        <option value="canada" {{ $data['single']->citizenship_country == 'canada'  ? 'selected' : ''}}>Canada</option>
                                        <option value="USA" {{ $data['single']->citizenship_country == 'USA'  ? 'selected' : ''}}>USA</option>
                                    </select>
                                    @if($errors->has('citizenship_country'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizenship_country') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Passport Number</label>
                                    <input class="form-control" type="text" value="@if(isset($data['single']->passport)) {{ $data['single']->passport }} @else {{ old('passport') }} @endif" id="passport" name="passport" placeholder="Enter passport">
                                    @if($errors->has('passport'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('passport') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender:</label><br>
                                    <input class="" type="radio" name="gender" id="male" value="male" {{$data['single']->gender== 'male'  ? 'checked' : ''}}>Male &nbsp;
                                    <input class="" type="radio" name="gender" id="female" value="female" {{$data['single']->gender== 'female'  ? 'checked' : ''}}>Female &nbsp;
                                    <input class="" type="radio" name="gender" id="other" value="other" {{$data['single']->gender== 'other'  ? 'checked' : ''}}>other
                                    @if($errors->has('gender'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('gender') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Marital Status:</label><br>
                                    <input class="" type="radio" name="marital" id="married" value="married" {{$data['single']->marital== 'married'  ? 'checked' : ''}}>Married
                                    <input class="" type="radio" name="marital" id="unmarried" value="unmarried" {{$data['single']->marital== 'unmarried'  ? 'checked' : ''}}>Unmarried
                                    <input class="" type="radio" name="marital" id="divorce" value="divorced" {{$data['single']->marital== 'divorced'  ? 'checked' : ''}}>Divorced
                                    @if($errors->has('marital'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('marital') }}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address </label> <br>
                                    <input class="form-control" type="text" id="address" value="@if(isset($data['single']->address)) {{ $data['single']->address }} @else {{ old('address') }} @endif" name="address" placeholder="Enter your address ">
                                    @if($errors->has('address'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('address') }}</span></p>
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
                                    <label>Country </label> <br>
                                    <input class="form-control" type="text" id="country" value="@if(isset($data['single']->country)) {{ $data['single']->country }} @else {{ old('country') }} @endif" name="country" placeholder="Enter your country">
                                    @if($errors->has('country'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('country') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Province/State</label> <br>
                                    <input class="form-control" type="text" id="state" value="@if(isset($data['single']->state)) {{ $data['single']->state }} @else {{ old('state') }} @endif" name="state" placeholder="Enter your province/state">
                                    @if($errors->has('state'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('state') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postal/Zipcode</label> <br>
                                    <input class="form-control" type="text" value=" @if(isset($data['single']->zipcode)) {{ $data['single']->zipcode }} @else {{ old('zipcode') }} @endif " id="zipcode" name="zipcode">
                                    @if($errors->has('zipcode'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('zipcode') }}</span></p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email </label><br>
                                    <input class="form-control" type="email" value="@if(isset($data['single']->email)) {{ $data['single']->email }} @else {{ old('email') }} @endif" id="email" name="email">
                                    @if($errors->has('email'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone number </label><br>
                                    <input class="form-control" type="tel" value="@if(isset($data['single']->tel)) {{ $data['single']->tel }} @else {{ old('tel') }} @endif" id="tel" name="tel">
                                    @if($errors->has('tel'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('tel') }}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Begin Progress Bar Buttons-->
                        <div class="buttons">
                            <button class="btn btn-warning disabled " type="reset"> <i class="fa fa-eye"></i> Preview</button>
                            <button class="btn btn-success" type="submit"> <i class="fa fa-paper-plane"></i> Next</button>
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