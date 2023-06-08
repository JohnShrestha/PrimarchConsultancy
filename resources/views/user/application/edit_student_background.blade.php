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
                    <form action="{{ route('user.application.update_student_background', ['unique_id' => $data['unique_id']])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Have you been refused a visa from Canada, the USA, the United
                                        Kingdom, New Zealand, Australia or Ireland?</label><br>
                                    <br>
                                    <input class="mr-1 ml-1" type="radio" name="refused_visa" id="yes" value="yes" {{$data['single']->refused_visa== 'yes'  ? 'checked' : ''}}>Yes
                                    <input class="mr-1 ml-1" type="radio" name="refused_visa" id="no" value="no" {{$data['single']->refused_visa== 'no'  ? 'checked' : ''}}>No
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Do you have a valid Study Permit / Visa?</label><br>
                                    <select class="form-control" name="permit_visa" id="permit_visa">
                                        <option value="">--Select--</option>
                                        <option value="dont have" {{ $data['single']->permit_visa == 'dont have'  ? 'selected' : ''}}>I dont have this</option>
                                        <option value="Uk Student Visa" {{ $data['single']->permit_visa == 'Uk Student Visa'  ? 'selected' : ''}}>Uk Student Visa</option>
                                        <option value="US F1 Visa" {{ $data['single']->permit_visa == 'US F1 Visa'  ? 'selected' : ''}}>US F1 Visa</option>
                                        <option value="Canadian tourist visa" {{ $data['single']->permit_visa == 'Canadian tourist visa'  ? 'selected' : ''}}>Canadian tourist Visa</option>
                                        <option value="Australian Visa" {{ $data['single']->permit_visa == 'Australian Visa'  ? 'selected' : ''}}>Australian Visa</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">If you
                                        answered "Yes" to any of the questions above, please provide more
                                        details below:</label>
                                    <textarea class="form-control" rows="5" id="summernote" name="remarks">@if(isset($data['single']->remarks)) {{ $data['single']->remarks }} @else {{ old('remarks') }} @endif</textarea>

                                </div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-warning btnPrevious" href="{{ route('user.application.edit_student_education', ['unique_id' => $data['unique_id']])}}"> <i class="fa fa-eye"></i> Preview</a> &nbsp;
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
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello World !',
        tabsize: 2,
        height: 150
    });
</script>
@endsection