@extends('frontend.layouts.app')
@section('page_title',CustomHelper::getSeoTemplates('blogs'))
@section('meta_keywords',CustomHelper::getSeoTemplates('blogs'))
@section('meta_description', CustomHelper::getSeoTemplates('blogs'))
@section('container')

@include('frontend.pages.banner', ['title' => 'Blogs'])

<div class="blog-area pt-100 pb-70">
  <div class="container">
    <div class="section-title text-center">
      <span class="sp-color2">Latest Blog</span>
      <h2>Let’s Check Some Latest Blog</h2>
    </div>
    <div class="row pt-45">
    	@foreach($data ?? '' as $blog)
          <div class="col-lg-4 col-md-6">
            <div class="blog-card" style="height: 450px">
              <div class="blog-img">
                <a href="{{ route('blog_detail',$blog->url) }}">
                <img src="{{ asset($blog->image) }}" alt="Blog Images">
                </a>
                <div class="blog-tag">
                  <h3>{{ date('d', strtotime($blog->created_at)) }}</h3>
                  <span>{{ date('M', strtotime($blog->created_at)) }}</span>
                </div>
              </div>
              <div class="content">
                <ul>
                  <li>
                    <a href="javascript:void(0)"><i class="bx bxs-user"></i> Rayees Khan</a>
                  </li>
                </ul>
                <h3>
                  <a href="{{ route('blog_detail',$blog->url) }}">{{ $blog->title }}</a>
                </h3>
                <p>{{ $blog->meta_keyword }}</p>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
	    {!! $data->links() !!}
	</div>
  </div>
</div>

<x-frontend.contact-us />
<br><br>

@endsection