@extends('layouts.user')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @include('user.application.stepper')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
            <!-- Page Heading -->
            <hr>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-12" style="min-height:400px;">
                            <h4 class="card-title font-bold pt-1 text-center">Applicant Report</h4>
                            <div class="card-body pb-0" style="display: block;">
                                <dl class="row mb-0">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Applican ID</strong></div>
                                            <div class="col-sm-8">: {{ $data['general']->unique_id }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Applicant Name </strong> </div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->first_name) }} {{ $data['general']->mid_name }} {{ $data['general']->last_name }}s</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Date Of Birth</strong></div>
                                            <div class="col-sm-8">: {{ $data['general']->dob }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Gender</strong></div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->gender) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Marital</strong></div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->marital) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Address</strong></div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->address) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>City</strong></div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->city) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Country</strong></div>
                                            <div class="col-sm-8">: {{ ucfirst($data['general']->country) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Email</strong></div>
                                            <div class="col-sm-8">: {{ strtolower($data['general']->email) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><strong>Phone</strong></div>
                                            <div class="col-sm-8">: {{ ($data['general']->tel) }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-5"><strong>Country of Education</strong> </div>
                                            <div class="col-sm-7">:  {{ ucfirst($data['education']->country_of_education) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"><strong>Highest Level of Education</strong> </div>
                                            <div class="col-sm-6">:{{ ucfirst($data['education']->highest_education) }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5"><strong>Grading Scheme</strong> </div>
                                            <div class="col-sm-7">: {{ ucfirst($data['education']->grade) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5"><strong>Country of Institution Scheme</strong> </div>
                                            <div class="col-sm-7">: {{ ucfirst($data['education']->country_of_institute_scheme	) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5"><strong>University</strong> </div>
                                            <div class="col-sm-7">:  {{ ucfirst($data['education']->university	) }}</div>
                                        </div>

                                    </div>
                                </dl>
                                <hr>
                                <dl class="row mb-0">
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">S.LC/SEE Certificate</div>
                                                <div class="col-sm-7">{{ getUnicodeNumber(@$student_info->citizenship_number) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">S.LC/SEE marksheet</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">S.LC/SEE Character Certificate</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">+2 Transcript</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">+2 Character Certificate</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">Bachelor Transcript</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">Bachelor Provisional</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">Bachelor Migration</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">Bachelor Character Certificate</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">IELTS Certificate</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-5">Passport Front Base</div>
                                                <div class="col-sm-7"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="card p-0">
                                            <div class="card-body p-0 m-0">
                                                <ul class="m-1">
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->slc_see_certificate) }}" target="_slc_see_certificate"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->slc_see_certificate) }}" target="_slc_see_certificate">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->slc_see_marksheet) }}" target="_slc_see_marksheet"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->slc_see_marksheet) }}" target="_slc_see_marksheet">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->slc_see_character_certificate) }}" target="_slc_see_character_certificate"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->slc_see_character_certificate) }}" target="_slc_see_character_certificate">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->higher_transcript) }}" target="_higher_transcript"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->higher_transcript) }}" target="_higher_transcript">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->higher_certificate) }}" target="_higher_certificate"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->higher_certificate) }}" target="_higher_certificate">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->bachelor_transcript) }}" target="_bachelor_transcript"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->bachelor_transcript) }}" target="_bachelor_transcript">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->bachelor_provisional) }}" target="_bachelor_provisional"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->bachelor_provisional) }}" target="_bachelor_provisional">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->bachelor_migration) }}" target="_bachelor_migration"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->bachelor_migration) }}" target="_bachelor_migration">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->bachelor_character_certificate) }}" target="_bachelor_character_certificate"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->bachelor_character_certificate) }}" target="_bachelor_character_certificate">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->ielts_certificate) }}" target="_ielts_certificate"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->ielts_certificate) }}" target="_ielts_certificate">Preview </a>
                                                    </li>
                                                    <li><a href="{{ asset("uploads/application/".$data['file']->passport) }}" target="_passport"> Download </a>&nbsp;
                                                        <a href="{{ asset("uploads/application/".$data['file']->passport) }}" target="_passport">Preview </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection