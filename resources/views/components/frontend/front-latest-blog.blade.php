<div class="blog-area pt-100 pb-70">
 <div class="container">
    <div class="section-title text-center">
       <span class="sp-color2">Latest Blog</span>
       <h2>Click Out Our Latest Blog</h2>
    </div>
    <div class="row pt-45 justify-content-center">
      @foreach(CustomHelper::getBlogs() as $blog)
       <div class="col-lg-4 col-md-6">
          <div class="blog-item">
             <div class="blog-img3">
                <a href="javascript:void(0)">
                <img src="{{ asset($blog->image) }}" alt="Blog Images">
                </a>
                <div class="blog-tag">
                   <h3>{{ date('d', strtotime($blog->created_at)) }}</h3>
                   <span>{{ date('M', strtotime($blog->created_at)) }}</span>
                </div>
             </div>
             <div class="content">
                <h3>
                   <a href="javascript:void(0)">{{ $blog->title }}</a>
                </h3>
                <p>{{ $blog->meta_keyword }}</p>
                <a href="javascript:void(0)" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
             </div>
          </div>
       </div>
      @endforeach
    </div>
 </div>
</div>