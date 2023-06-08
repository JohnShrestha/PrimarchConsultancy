 <!--Start partner-->
 <section class="partner-section ">
     <div class="container ">

         <div class="partner-three centered ">
             <div class="title ">Our Partner</div>
             <h2>Our Universities</h2>
         </div>
         <div class="partner-carousel owl-carousel owl-theme ">
             @if(isset($data['client']))
             @foreach($data['client'] as $row)
             <!-- News Block Three -->
             <div class="partner-block-three ">
                 <div class="inner-box ">
                     <div class="quote-icon flaticon-double-quotes "></div>
                     <div class="image-outer ">
                         <div class="image ">
                             <a href="{{ $row->url}}">
                                 <img src="{{ asset($row->image )}}" alt="" />
                             </a>
                         </div>
                     </div>
                     <!-- <h5>University of Bedfordshire</h5> -->
                     <div class="text ">{!! mb_strimwidth($row->description, 0, 200, "...") !!}
                     </div>
                     <!-- <div class="designation ">Student</div> -->
                 </div>
             </div>

             @endforeach
             @endif
         </div>
     </div>
 </section>
 <!-- End Partner Area -->