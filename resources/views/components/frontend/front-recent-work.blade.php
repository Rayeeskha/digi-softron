<div class="case-study-area pt-100 pb-70">
 <div class="container-fluid p-0">
    <div class="section-title text-center">
       <span class="sp-color2">Case Study</span>
       <h2>Introduce Our Projects and Check Recent Work </h2>
    </div>
    <div class="case-study-slider owl-carousel owl-theme pt-45">
      @foreach(CustomHelper::getRecentProject() as $project)
       <div class="case-study-item">
          <a href="javascript:void(0)">
          <img src="{{ asset($project->image) }}" alt="Images">
          </a>
          <div class="content">
             <h3><a href="{{ @$project->url }}" target="_blank">{{ $project->project_name }}</a></h3>
             <ul>
                <li><a href="javascript:void(0)">{{ $project->projectType->name }}</a></li>
             </ul>
             <a href="javascript:void(0)" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
          </div>
       </div>

      @endforeach
    </div>
 </div>
</div>