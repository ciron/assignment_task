@extends('layouts.master')

@section('frontend_content')
   <!-- start contact form section -->
   <section class="wow fadeIn big-section" id="section-down">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 md-margin-30px-bottom wow fadeInLeft">
                <div class="padding-fifteen-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                    <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">Ready to get started?</span>
                    <form id="contact-form" action="javascript:void(0)" method="post">
                        <div>
                            <div id="success-contact-form" class="mx-0"></div>
                            <input type="text" name="name" id="name" placeholder="Name*" class="border-radius-4 bg-white medium-input">
                            <input type="text" name="email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="border-radius-4 bg-white medium-input">
                            <textarea name="comment" id="comment" placeholder="Your Message" rows="5" class="border-radius-4 bg-white medium-textarea"></textarea>
                            <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact form section -->
@endsection
