<div class="col-lg-12">
            <button class="btn @if(Request::segment(3) == "step1") btn-primary @else btn-info @endif  btn-xs" id="" style="width: 190px;height:30px;"><h6>General Information</h6></button>

            <button class="btn @if(Request::segment(3) == "step2") btn-primary @else btn-info @endif  btn-xs" id="" style="width: 165px;height:30px;"> <h6>Education History</h6></button>

            <button class="btn @if(Request::segment(3) == "step3") btn-primary @else btn-info @endif  btn-xs" id="" style="width: 205px;height:30px;"><h6>Background Information </h6></button>

            <button class="btn @if(Request::segment(3) == "step4") btn-primary @else btn-info @endif  btn-xs" id="" style="width: 210px;height:30px;"><h6>Upload Documents</h6></button>

            <button class="btn @if(Request::segment(3) == "step5") btn-primary @else btn-info @endif  btn-xs" id="" style="width: 180px;height:30px;"><h6>View  Application</h6></button>
</div>
