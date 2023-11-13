@extends('frontend.layouts.app')
@section('page_title','Contact us')
@section('meta_keywords','Contact us')
@section('meta_description', 'Contact us')
@section('container')

@include('frontend.pages.banner', ['title' => 'Contact us'])

<div class="contact-form-area pt-100 pb-70">
 <div class="container">
    <div class="section-title text-center">
       <h2>Let's Send Us a Message Below</h2>
    </div>
    <div class="row pt-45">
       <div class="col-lg-4">
          <div class="contact-info mr-20">
             <span>Contact Info</span>
             <h2>Let's Connect With Us</h2>
             <p>If you give us your valuable time to discuss your upcoming project. Then we will serve our best for your project. We never feel disappointed in our customers. Because we know the value of our customers.

              Also, we offer different types of schemes for our clients at every festival. So customers can redeem the scheme.</p>
             <ul>
                <li>
                   <div class="content">
                      <i class="bx bx-phone-call"></i>
                      <h3>Phone Number</h3>
                      <a href="tel:9554540271">+91 9554540271</a>
                   </div>
                </li>
                <li>
                   <div class="content">
                      <i class="bx bxs-map"></i>
                      <h3>Address</h3>
                      <span>Mehak Apartment Gulzar Coloney near Linet Computer Center  Chinhat Tiraha Lucknow, 226028</span>
                   </div>
                </li>
                <li>
                   <div class="content">
                      <i class="bx bx-message"></i>
                      <h3>Contact Info</h3>
                      <a href="mailto:info@digisoftron.com"><span class="__cf_email__" data-cfemail="8be3eee7e7e4cbffeee8e3eef3a5e8e4e6">info@digisoftron.com</span></a>
                   </div>
                </li>
             </ul>
          </div>
       </div>
       <div class="col-lg-8">
          <div class="contact-form">
             <form id="contactForm">
                <div class="row">
                   <div class="col-lg-6">
                      <div class="form-group">
                         <label>Your Name <span>*</span></label>
                         <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                         <div class="help-block with-errors"></div>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                         <label>Your Email <span>*</span></label>
                         <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                         <div class="help-block with-errors"></div>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                         <label>Phone Number <span>*</span></label>
                         <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                         <div class="help-block with-errors"></div>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                         <label>Your Subject <span>*</span></label>
                         <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                         <div class="help-block with-errors"></div>
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                         <label>Your Message <span>*</span></label>
                         <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                         <div class="help-block with-errors"></div>
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12">
                      <div class="agree-label">
                         <input type="checkbox" id="chb1">
                         <label for="chb1">
                         Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                         </label>
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12 text-center">
                      <button type="submit" class="default-btn btn-bg-two border-radius-50">
                      Send Message <i class="bx bx-chevron-right"></i>
                      </button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
</div>
<div class="map-area">
 <div class="container-fluid m-0 p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1779.435343733713!2d81.02470413846233!3d26.875849236668223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be288b117c623%3A0xd7af78f06990c62f!2sGulzar%20Colony%2C%20Hasangarden%20Colony%2C%20Kamta%2C%20Lucknow%2C%20Uttar%20Pradesh%20226028!5e0!3m2!1sen!2sin!4v1699868423161!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

@endsection