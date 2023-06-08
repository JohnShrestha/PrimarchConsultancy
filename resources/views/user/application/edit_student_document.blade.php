@extends('layouts.user')
@section('css')
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
                    <form action="{{ route('user.application.update_student_documents', ['unique_id' => $data['unique_id']])}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Education History</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">S.LC/SEE Certificate</label>
                                        <input id="applicant_phot" type="file" name="slc_see_certificate" value="" autocomplete="slc_see_certificate" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->slc_see_certificate)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->slc_see_certificate) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">S.LC/SEE marksheet</label>
                                        <input id="applicant_phot" type="file" name="slc_see_marksheet" value="" autocomplete="slc_see_marksheet" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->slc_see_marksheet)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->slc_see_marksheet) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">S.LC/SEE Character Certificate</label>
                                        <input id="applicant_phot" type="file" name="slc_see_character_certificate" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->slc_see_character_certificate)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->slc_see_character_certificate) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">+2 Transcript</label>
                                        <input id="applicant_phot" type="file" name="higher_transcript" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->higher_transcript)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->higher_transcript) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">+2 Character Certificate</label>
                                        <input id="applicant_phot" type="file" name="higher_certificate" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->higher_certificate)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->higher_certificate) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">Bachelor Transcript</label>
                                        <input id="applicant_phot" type="file" name="bachelor_transcript" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->bachelor_transcript)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->bachelor_transcript) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">Bachelor Provisional</label>
                                        <input id="applicant_phot" type="file" name="bachelor_provisional" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->bachelor_provisional)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->bachelor_provisional) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">Bachelor Migration</label>
                                        <input id="applicant_phot" type="file" name="bachelor_migration" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->bachelor_migration)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->bachelor_migration) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">Bachelor Character Certificate</label>
                                        <input id="applicant_phot" type="file" name="bachelor_character_certificate" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->bachelor_character_certificate)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->bachelor_character_certificate) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">IELTS Certificate</label>
                                        <input id="applicant_phot" type="file" name="ielts_certificate" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->ielts_certificate)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->ielts_certificate) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group">
                                        <label for="#" class="col-form-label text-md-end">Passport Front Base</label>
                                        <input id="applicant_phot" type="file" name="passport" value="" autocomplete="applicant_photo" autofocus="autofocus" class="form-control ">
                                        @if($data['single'] && $data['single']->passport)
                                        <div class="col-lg-4 mt-2">
                                            <img src="{{ asset("uploads/application/".$data['single']->passport) }}" alt="" class="img img-responsive img-fluid" style="max-width: 100px; max-height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="buttons">
                                <a class="btn btn-warning btnPrevious" href="{{ route('user.application.edit_student_background', ['unique_id' => $data['unique_id']])}}"> <i class="fa fa-eye"></i> Preview</a> &nbsp;
                                <button class="btn btn-success" type="submit"> <i class="fa fa-paper-plane"></i> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection