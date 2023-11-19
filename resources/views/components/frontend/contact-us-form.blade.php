<div class="card shadow">
   <div class="card-body">
      <div class="contact-form">
         <form class="validateForm" action="{{ route('contact_us') }}" method="post" enctype="multipart/form-data" >
            <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Your Name <span>*</span></label>
                     <input type="text" name="name" id="name" class="form-control"  placeholder="Name">
                     <span class="text-danger Errname"></span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Your Email <span></span></label>
                     <input type="email" name="email" id="email" class="form-control" placeholder="Email (Optional)">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Phone Number <span>*</span></label>
                     <input type="text" name="number"  placeholder="Phone Number" class="form-control">
                     <span class="text-danger Errnumber"></span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Your Subject <span>*</span></label>
                     <select name="service" class="form-control">
                        <option value>Select Option</option>
                        <option>Static Website</option>
                        <option>Ecommerce Website</option>
                        <option>Software Development</option>
                        <option>Other</option>
                     </select>
                  </div>
                  <span class="text-danger Errservice"></span>
               </div>
               <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                     <label>Your Message <span>*</span></label>
                     <textarea name="message" class="form-control" id="message" cols="30" rows="8"  placeholder="Your Message"></textarea>
                     <span class="text-danger Errmessage"></span>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 text-center">
               	<x-backend.preloader />
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