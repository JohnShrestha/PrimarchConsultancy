<section class="team bg-black-2">
    <div class="container">
        <div class="section-title col-md-5">
            <h3>Meet Our</h3>
            <h2>Teams</h2>
        </div>
        <div class="row team-all">
            @if(isset($data['staff']))
            @foreach($data['staff'] as $row)

            <div class="col-lg-3 col-md-6 team-pro" data-aos="fade-up" data-aos-delay="150">
                <div class="team-wrap">
                    <div class="team-img">
                        <img src="{{ asset($row->image)}}" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>{{$row->name}}</h3>
                            <p>{{$row->designation}}</p>
                            <div class="team-socials">
                                <ul>
                                    <li>
                                        <a href="{{$row->social_profile_fb}}" target="_facebook" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="{{$row->social_profile_twitter}}" target="_twitter"  title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="{{$row->social_profile_insta}}"  target="_instagran" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <span><a href="#">View Profile</a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p> No Record found !</p>
            @endif
        </div>
    </div>
</section>