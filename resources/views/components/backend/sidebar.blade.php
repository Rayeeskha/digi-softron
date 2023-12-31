<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
<!-- LOGO -->
<div class="navbar-brand-box">
<!-- Dark Logo-->
<a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
    <span class="logo-sm">
        <img src="{{ asset('assets/images/logos/digi-logo.png') }}" alt="" height="22">
    </span>
    <span class="logo-lg">
        <img src="{{ asset('assets/images/logos/digi-logo.png') }}" alt="" height="17">
    </span>
</a>
<!-- Light Logo-->
<a href="{{ route('admin.dashboard') }}" class="logo logo-light">
    <span class="logo-sm">
        <img src="{{ asset('assets/images/logos/footer-digi-logo.jpg') }}" alt="" height="22">
    </span>
    <span class="logo-lg">
        <img src="{{ asset('assets/images/logos/footer-digi-logo.jpg') }}" alt="" height="50" style="width:150px !important">
    </span>
</a>
<button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
    <i class="ri-record-circle-line"></i>
</button>
</div>

<div id="scrollbar">
<div class="container-fluid">

    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">
        <li class="nav-item">
            <a class="nav-link menu-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
            </a>
        </li> <!-- end Dashboard Menu -->
        

        <li class="nav-item">
            <a class="nav-link menu-link {{ Route::currentRouteName() == 'admin.blog.index' ? 'active' : '' }}" href="{{ route('admin.blog.index') }}">
                <i class="ri-honour-line"></i> <span data-key="t-widgets">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.project.index') }}">
                <i class="ri-compasses-2-line"></i> <span data-key="t-widgets">Project</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.teams.index') }}">
                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Teams</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link" href="{{ route('admin.careers.index') }}">
                <i class="ri-rocket-line"></i> <span data-key="t-widgets">Careers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link" href="{{ route('admin.contact-us.index') }}">
                <i class="ri-share-line"></i> <span data-key="t-widgets">Need help</span>
            </a>
        </li>
        
    </ul>
</div>
<!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->

<div class="vertical-overlay"></div>