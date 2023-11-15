@extends('frontend.layouts.app')
@section('page_title',@$blog->title)
@section('meta_keywords',@$blog->title)
@section('meta_description', @$blog->title)
@section('container')

@include('frontend.pages.banner', ['title' => @$blog->title])

 <div class="blog-details-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-article">
              <div class="blog-article-img">
                <img src="{{ asset($blog->image) }}" alt="Images">
                <div class="blog-article-tag">
                  <h3>{{ date('d', strtotime($blog->created_at)) }}</h3>
                  <span>{{ date('M', strtotime($blog->created_at)) }}</span>
                </div>
              </div>
              <div class="blog-article-title">
                <ul>
                  <li><i class="bx bxs-user"></i> By Rayees khan</li>
                  <li><i class="bx bx-show-alt"></i>322 View</li>
                  <li><i class="bx bxs-conversation"></i>2 Comments</li>
                </ul>
                <h2>{{ $blog->title }}</h2>
              </div>
              <div class="article-content">
                <p>
                  {{ $blog->meta_keyword }}
                </p>
                <p>
                  {{ $blog->meta_description }}
                </p>
                
              </div>
              {{-- <div class="comments-wrap">
                <div class="comment-title">
                  <h3 class="title">Comments (02)</h3>
                </div>
                <ul class="comment-list">
                  <li>
                    <img src="assets/images/blog/blog-profile1.png" alt="Image">
                    <h3>Medison Decros</h3>
                    <span>On September 18,2020 at 4.30 pm</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                      Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                      us mus. Donec quam felis, ultricies ne, pellentesque.
                    </p>
                    <a href="blog-details.html"> Reply</a>
                  </li>
                  <li>
                    <img src="assets/images/blog/blog-profile2.png" alt="Image">
                    <h3>Jekson Albin</h3>
                    <span>On September 18,2020 at 4.30 pm</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                      Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                      us mus. Donec quam felis, ultricies ne, pellentesque.
                    </p>
                    <a href="blog-details.html"> Reply</a>
                  </li>
                  <li>
                    <img src="assets/images/blog/blog-profile3.png" alt="Image">
                    <h3>Bentham Debid</h3>
                    <span>On September 18,2020 at 4.30 pm</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                      Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                      us mus. Donec quam felis, ultricies ne, pellentesque.
                    </p>
                    <a href="blog-details.html">Reply</a>
                  </li>
                </ul>
              </div>
              <div class="comments-form">
                <h3 class="title">Leave A Comment</h3>
                <div class="contact-form">
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                          <label>Your Name <span>*</span></label>
                          <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                          <label>Your Email <span>*</span></label>
                          <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                        </div>
                      </div>
                      <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                          <label>Your website <span>*</span></label>
                          <input type="text" name="websit" class="form-control" required data-error="Your website" placeholder="Your website">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                          <label>Your website <span>*</span></label>
                          <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write Your Review" placeholder="Your Review"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group checkbox-option">
                          <input type="checkbox" id="chb2">
                          <p>
                            Save my name, email, and website in this browser for the next time I comment.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn btn-bg-two border-radius-50">
                        Post A Comment
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> --}}
            </div>
          </div>
          
        </div>
      </div>
    </div>


@endsection