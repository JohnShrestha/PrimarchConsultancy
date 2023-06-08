@extends('layouts.user')
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/cms/plugins/nepalidate/css/nepaliDatePicker.min.css')}}">
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
                to selected school upon submission of application on loan management.</p>

            <div class="card shadow mb-4">

                <div class="card-body">
                    <form action="{{ route('user.application.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h5>General Information</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Applicant Name</label> <br>
                                    <input class="form-control" type="text" id="application_name" value="{{ old('application_name') }}" name="application_name" placeholder="Enter your  name">
                                    @if($errors->has('application_name'))
                                    <p id="name-error" class="help-block" for="application_name"><span>{{ $errors->first('application_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Father Name</label> <br>
                                    <input class="form-control" type="text" id="father_name" value="{{ old('father_name') }}" name="father_name" placeholder="Enter father name">
                                    @if($errors->has('mid_name'))
                                    <p id="name-error" class="help-block " for="mid_name"><span>{{ $errors->first('mid_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mother Name</label> <br>
                                    <input class="form-control" type="text" id="mother_name" value="{{ old('mother_name') }}" name="mother_name" placeholder="Enter mother name">
                                    @if($errors->has('mother_name'))
                                    <p id="name-error" class="help-block " for="mother_name"><span>{{ $errors->first('mother_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Grand Father Name</label> <br>
                                    <input class="form-control" type="text" id="grandfather_name" value="{{ old('grandfather_name') }}" name="grandfather_name" placeholder="Enter grand father name">
                                    @if($errors->has('grandfather_name'))
                                    <p id="name-error" class="help-block " for="grandfather_name"><span>{{ $errors->first('grandfather_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Father In Low Name</label> <br>
                                    <input class="form-control" type="text" id="grandfather_name" value="{{ old('father_in_low_name') }}" name="father_in_low_name" placeholder="Enter father inlow">
                                    @if($errors->has('grandfather_name'))
                                    <p id="name-error" class="help-block " for="grandfather_name"><span>{{ $errors->first('grandfather_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Spouse Name</label> <br>
                                    <input class="form-control" type="text" id="spouse_name" value="{{ old('spouse_name') }}" name="spouse_name" placeholder="Enter father inlow">
                                    @if($errors->has('spouse_name'))
                                    <p id="name-error" class="help-block " for="spouse_name"><span>{{ $errors->first('spouse_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Spouse Occupation Name</label> <br>
                                    <input class="form-control" type="text" id="spouse_occupation_name" value="{{ old('spouse_occupation_name') }}" name="spouse_occupation_name" placeholder="Enter father inlow">
                                    @if($errors->has('spouse_occupation_name'))
                                    <p id="name-error" class="help-block " for="spouse_occupation_name"><span>{{ $errors->first('spouse_occupation_name') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Spouse Contact No</label> <br>
                                    <input class="form-control" type="text" id="spouse_contact_number" value="{{ old('spouse_contact_number') }}" name="spouse_contact_number" placeholder="Enter father inlow">
                                    @if($errors->has('spouse_contact_number'))
                                    <p id="name-error" class="help-block " for="spouse_contact_number"><span>{{ $errors->first('spouse_contact_number') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date Of Birth</label> <br>
                                    <input class="form-control" type="text" readonly value="" value="{{ old('dob') }}" id="datepicker-1" name="dob">
                                    @if($errors->has('dob'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('dob') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Birth Place</label> <br>
                                    <input class="form-control" type="text" value="{{ old('birth_place') }}" id="birth_place" name="birth_place">
                                    @if($errors->has('birth_place'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('birth_place') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Citizenship No</label> <br>
                                    <input class="form-control" type="text" value="{{ old('citizen_no') }}" id="citizen_no" name="citizen_no">
                                    @if($errors->has('citizen_no'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizen_no') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="citizen_issue_district">Citizen Issue District</label><br>
                                    <select class="form-control" name="citizen_issue_district" id="citizen_issue_district">
                                        <option value="">--Select--</option>
                                        <option value="australia">Australia</option>
                                        <option value="UK">UK</option>
                                        <option value="canada">Canada</option>
                                        <option value="USA">USA</option>
                                    </select>
                                    @if($errors->has('citizenship_country'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizenship_country') }}</span></p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Citizen Issue Data</label>
                                    <input class="form-control" type="text" value="{{ old('citizen_issue_date') }}" id="citizen_issue_date" name="citizen_issue_date">
                                    @if($errors->has('citizen_issue_date'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizen_issue_date') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control" type="text" value="{{ old('telephone') }}" id="telephone" name="telephone">
                                    @if($errors->has('telephone'))
                                    <p id="name-error" class="help-block " for="telephone"><span>{{ $errors->first('telephone') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="form-control" type="text" value="{{ old('mobile') }}" id="mobile" name="mobile">
                                    @if($errors->has('mobile'))
                                    <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('mobile') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" value="{{ old('email') }}" id="email" name="email">
                                    @if($errors->has('email'))
                                    <p id="name-error" class="help-block " for="email"><span>{{ $errors->first('email') }}</span></p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Permanent State</label>
                                    <input class="form-control" type="text" value="{{ old('citizen_issue_date') }}" id="citizen_issue_date" name="citizen_issue_date">
                                    @if($errors->has('citizen_issue_date'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizen_issue_date') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Permanent District</label>
                                    <input class="form-control" type="text" value="{{ old('telephone') }}" id="telephone" name="telephone">
                                    @if($errors->has('telephone'))
                                    <p id="name-error" class="help-block " for="telephone"><span>{{ $errors->first('telephone') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Permanent Palika</label>
                                    <input class="form-control" type="text" value="{{ old('mobile') }}" id="mobile" name="mobile">
                                    @if($errors->has('mobile'))
                                    <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('mobile') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Permanent Ward</label>
                                    <input class="form-control" type="email" value="{{ old('email') }}" id="email" name="email">
                                    @if($errors->has('email'))
                                    <p id="name-error" class="help-block " for="email"><span>{{ $errors->first('email') }}</span></p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Temporary State</label>
                                    <input class="form-control" type="text" value="{{ old('citizen_issue_date') }}" id="citizen_issue_date" name="citizen_issue_date">
                                    @if($errors->has('citizen_issue_date'))
                                    <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('citizen_issue_date') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Temporary District</label>
                                    <input class="form-control" type="text" value="{{ old('telephone') }}" id="telephone" name="telephone">
                                    @if($errors->has('telephone'))
                                    <p id="name-error" class="help-block " for="telephone"><span>{{ $errors->first('telephone') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Temporary Palika</label>
                                    <input class="form-control" type="text" value="{{ old('mobile') }}" id="mobile" name="mobile">
                                    @if($errors->has('mobile'))
                                    <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('mobile') }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Temporary Ward</label>
                                    <input class="form-control" type="email" value="{{ old('email') }}" id="email" name="email">
                                    @if($errors->has('email'))
                                    <p id="name-error" class="help-block " for="email"><span>{{ $errors->first('email') }}</span></p>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Remarks</label>
                                    <textarea name="description" cols="30" rows="5" class="form-control" value=""></textarea>
                                </div>
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h5>Business/Employee</h5>
                            </div>

                            <table class="table table-striped table-hover table-bordered mynewsofttable">
                                <thead>
                                    <tr>
                                        <th>Office Name/ Business</th>
                                        <th>Address</th>
                                        <th>Telephone</th>
                                        <th>Fax</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="soft-multyfield">
                                        <td class="col-md-3 form-group ">
                                            <input type="text" class="form-control" name="office_name[]" id="qnty" placeholder="office name " value="">
                                            <p class="help-block"></p>
                                        </td>
                                        <td class="col-md-3 form-group  has-error ">
                                            <input type="text" class="form-control" name="office_address[]" id="qnty" placeholder="address " value="">
                                            <p class="help-block"></p>
                                        </td>
                                        <td class="col-md-3 form-group ">
                                            <input type="text" class="form-control" name="office_telephone[]" id="price" placeholder=" Telephone" value="">
                                            <p class="help-block"></p>
                                        </td>
                                        <td class="col-md-2 form-group ">
                                            <input type="text" class="form-control" name="office_fax[]" id="price" placeholder=" fax" value="">
                                            <p class="help-block"></p>
                                        </td>
                                        <td class="col-md-1">
                                            <a class="js-sw-row-add btn btn-info btn-xs">
                                                <i class="fa fa-plus" title="add"></i>
                                            </a>
                                            <a class="js-sw-row-delete btn btn-danger btn-xs ">
                                                <i class="fa fa-minus" title="remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>



                        <!-- Begin Progress Bar Buttons-->
                        <div class="buttons">
                            <button class="btn btn-warning disabled btn-sm" desabled type="reset"> <i class="fa fa-eye"></i> Preview</button>
                            <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-paper-plane"></i> Next</button>
                        </div>
                        <!-- End Progress Bar Buttons-->
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
@section('scripts')
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

<script>
    $(document).ready(function() {
        $("#title").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".content").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".content").hide();
                }
            });
        }).change();
    });
</script>
<script>
    $(document).on('click', '.js-sw-row-add', function() {
        // alert("hello");
        $('.mynewsofttable').append($('.mynewsofttable').find('tr.soft-multyfield:last').clone());
    });
    $(document).on('click', '.js-sw-row-delete', function() {
        if ($('.soft-multyfield').length > 1)
            $('.mynewsofttable').find('tr.soft-multyfield:last').remove();
    });
</script>
<script>
    $(document).on('click', '.js-pr-row-add', function() {
        // alert("hello product");
        $('.mynewprodtable').append($('.mynewprodtable').find('tr.prod-multyfield:last').clone());
    });
    $(document).on('click', '.js-pr-row-delete', function() {
        if ($('.prod-multyfield').length > 1)
            $('.mynewprodtable').find('tr.prod-multyfield:last').remove();
    });
</script>
<script>
    $(document).on('click', "input[type='text']", function() {
        $(this).select();
    });
</script>
@endsection