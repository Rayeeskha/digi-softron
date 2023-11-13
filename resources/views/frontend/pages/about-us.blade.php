@extends('frontend.layouts.app')
@section('page_title','About us')
@section('meta_keywords','About us')
@section('meta_description', 'About us')
@section('container')

@include('frontend.pages.banner', ['title' => 'About us'])

<!-- About us -->
<x-frontend.front-about />


<!-- Why Choose us -->
<x-frontend.front-whychoose-us />

<!-- Our Vision -->
<x-frontend.front-our-vision />

<!-- Our Mission -->
<x-frontend.front-our-mission />

<!-- About us -->
<div class="security-area pt-100 pb-70">
 <div class="container">
    <div class="section-title text-center">
       <span class="sp-color2">IT Security & Computing</span>
       <h2>Searching for a Solution! We Provide Truly Prominent IT Solutions</h2>
    </div>
    <div class="row pt-45">
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-cyber-security"></i>
             <h3><a href="javascript:void(0)">Business Security</a></h3>
             <p>Safeguard your enterprise with our robust business security solutions, offering comprehensive protection and peace of mind against evolving threats</p>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-computer"></i>
             <h3><a href="javascript:void(0)">Manage IT Service</a></h3>
             <p>Simplify and enhance your operations with our expertly managed IT services, ensuring seamless performance, security, and responsive support for your business needs</p>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-effective"></i>
             <h3><a href="javascript:void(0)">Product Analysis</a></h3>
             <p>Gain valuable insights with our thorough product analysis services, providing in-depth assessments for informed decision-making and enhanced product performance</p>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-implement"></i>
             <h3><a href="javascript:void(0)">Analytic Solution</a></h3>
             <p>Unlock actionable insights with our analytic solutions, leveraging advanced data analysis to drive informed decisions and optimize performance across your business</p>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-consulting"></i>
             <h3><a href="javascript:void(0)">Finest Quality</a></h3>
             <p>Experience the epitome of excellence with our finest quality products/services, where precision, reliability, and customer satisfaction converge for unparalleled value</p>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="security-card">
             <i class="flaticon-consultant"></i>
             <h3><a href="javascript:void(0)">Risk Management</a></h3>
             <p>Mitigate uncertainties and secure your future with our comprehensive risk management solutions, tailored to safeguard your business against potential threats and challenges</p>
          </div>
       </div>
    </div>
 </div>
</div>
<div class="brand-area-two">
  <!-- Our Client -->
  <x-frontend.front-our-client />
</div>
<div class="counter-area pt-100 pb-70">
 <div class="container">
    <div class="section-title text-center">
       <span class="sp-color2">Numbers Are Talking</span>
       <h2>Let’s Check Our Business Growth and Success Story</h2>
       <p>Explore the remarkable journey of our business growth and success story. From inception to milestones, witness our commitment to excellence and customer satisfaction</p>
    </div>
    <div class="row pt-45">
       <div class="col-lg-3 col-6 col-md-3">
          <div class="counter-another-content">
             <i class="flaticon-web-development"></i>
             <h3>20+</h3>
             <span>Delivered Goods</span>
          </div>
       </div>
       <div class="col-lg-3 col-6 col-md-3">
          <div class="counter-another-content">
             <i class="flaticon-consulting-1"></i>
             <h3>15+</h3>
             <span>IT Consulting</span>
          </div>
       </div>
       <div class="col-lg-3 col-6 col-md-3">
          <div class="counter-another-content">
             <i class="flaticon-startup"></i>
             <h3>30+</h3>
             <span>Fully Launched</span>
          </div>
       </div>
       <div class="col-lg-3 col-6 col-md-3">
          <div class="counter-another-content">
             <i class="flaticon-tick"></i>
             <h3>30+</h3>
             <span>Project Completed</span>
          </div>
       </div>
    </div>
 </div>
 <div class="counter-shape">
    <div class="shape1">
       <img src="{{ asset('assets/images/shape/shape1.png') }}" alt="Images">
    </div>
    <div class="shape2">
       <img src="{{ asset('assets/images/shape/shape2.png') }}" alt="Images">
    </div>
 </div>
</div>

@endsection