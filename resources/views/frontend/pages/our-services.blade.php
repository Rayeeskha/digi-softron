@extends('frontend.layouts.app')
@section('page_title',CustomHelper::getSeoTemplates('our-services'))
@section('meta_keywords',CustomHelper::getSeoTemplates('our-services'))
@section('meta_description', CustomHelper::getSeoTemplates('our-services'))
@section('container')

<!-- Our services -->
<x-frontend.front-service />

@endsection