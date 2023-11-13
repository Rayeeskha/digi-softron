@extends('frontend.layouts.app')
@section('page_title','Digi Softron Technology')
@section('meta_keywords','Digi Softron Technology')
@section('meta_description', 'Digi Softron Technology')
@section('container')

<!-- Slider -->
<x-frontend.slider />

<!-- Our working process -->
<x-frontend.front-working-process />


<!-- About us -->
<x-frontend.front-about />

<!-- Our services -->
<x-frontend.front-service />


<!-- Recent work -->
<x-frontend.front-recent-work />


<!-- Why Choose us -->
<x-frontend.front-whychoose-us />


<!-- Technology skill -->
<x-frontend.front-techno-skill />

<!-- Our Client -->
<x-frontend.front-our-client />

<!-- Our Client Feedback -->
<x-frontend.front-our-client-feedback />

<!-- Latest Blog -->
<x-frontend.front-latest-blog />

@endsection