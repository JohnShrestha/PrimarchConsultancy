@extends('layouts.user')
@section('css')

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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name</label> <br>
                                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name</label> <br>
                                    <input class="form-control" type="text" id="midname" name="midname" placeholder="Enter your middle name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name</label> <br>
                                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your last name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone</label> <br>
                                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label> <br>
                                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date Of Birth</label> <br>
                                    <input class="form-control" type="date" id="date" name="date">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender:</label><br>
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="male" value="male">Male
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="female" value="female">Female
                                    <input class="mr-1 ml-1" type="radio" name="gender" id="other" value="other">Other

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

@endsection