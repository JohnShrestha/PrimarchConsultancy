<section class="contact-area pt-70" id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form pb-70">
                    <div class="section-title">
                        <span>Quick Contact</span>
                        <h2>Contact us for answers to all of your questions.</h2>
                    </div>

                    <form method="POST" action="{{route('site.message')}}" class="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" data-error="Please enter your name" placeholder="Your name">
                                    @if($errors->has('name'))
                                    <div class="help-block with-errors" style="color:red;">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" data-error="Please enter your email" placeholder="Your email address">
                                    @if($errors->has('email'))
                                    <div class="help-block with-errors" style="color:red;">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="number" id="phone_number" class="form-control" value="{{ old('number') }}" data-error="Please enter your phone number" placeholder="Your phone number">
                                    @if($errors->has('number'))
                                    <div class="help-block with-errors" style="color:red;">{{ $errors->first('number') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subjects" value="{{ old('subject') }}" class="form-control" data-error="Please enter your subjects" placeholder="Subjects">
                                    @if($errors->has('subject'))
                                    <div class="help-block with-errors" style="color:red;">{{ $errors->first('subject') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."> {{ old('message') }} </textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-img">
                    <img src="{{asset('assets/site/img/img-home3-1.png')}}" alt="">
                </div>

            </div>
        </div>
        <div class="contact-shape">
            <div class="shape-1">
                <img src="{{ asset('assets/site/img/value/cloud-1.png')}}" alt="">
            </div>
            <div class="shape-2">
                <img src="{{ asset('assets/site/img/value/cloud-2.png')}}" alt="">
            </div>
        </div>
    </div>
</section>