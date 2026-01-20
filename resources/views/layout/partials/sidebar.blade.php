<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="{{url('index')}}" class="logo logo-normal">
            <img src="{{asset('/build/img/logo.svg')}}" alt="Logo">
        </a>
        <a href="{{url('index')}}" class="logo-small">
            <img src="{{asset('/build/img/logo-small.svg')}}" alt="Logo">
        </a>
        <a href="{{url('index')}}" class="dark-logo">
            <img src="{{asset('/build/img/logo-white.svg')}}" alt="Logo">
        </a>
    </div> 
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
        </div>
    </div>
</div>
<div class="two-col-sidebar" id="two-col-sidebar">
    <div class="sidebar sidebar-twocol">
        <div class="twocol-mini">
            <a href="{{url('index')}}" class="logo-small">
                <img src="{{asset('/build/img/logo-small.svg')}}" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist">
                    <a href="{{ url('index') }}" class="nav-link {{ Request::is('index') ? 'active' : '' }}" title="Dashboard">
                        <i class="ti ti-smart-home"></i>
                    </a>
                    <a href="{{ route('state.index') }}" class="nav-link {{ Request::is('state*') ? 'active' : '' }}" title="Election">
                        <i class="ti ti-map-pin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-right">
            <div class="sidebar-logo mb-4">
                <a href="{{url('index')}}" class="logo logo-normal">
                    <img src="{{asset('/build/img/logo.svg')}}" alt="Logo">
                </a>
            </div>
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome</h6>
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <ul>
                            <li class="menu-title"><span>MENU</span></li>
                            <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">Dashboard</a></li>
                            <li><a href="{{ route('state.index') }}" class="{{ Request::is('state*') ? 'active' : '' }}">States</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="stacked-sidebar" id="stacked-sidebar">
    <div class="sidebar sidebar-stacked" style="display: flex !important;">
        <div class="stacked-mini">
            <a href="{{url('index')}}" class="logo-small">
                <img src="{{asset('/build/img/logo-small.svg')}}" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="d-flex align-items-center flex-column">
                    <a href="{{ url('index') }}" class="btn btn-menubar {{ Request::is('index') ? 'active' : '' }}">
                        <i class="ti ti-smart-home"></i>
                    </a>
                    <a href="{{ route('state.index') }}" class="btn btn-menubar {{ Request::is('state*') ? 'active' : '' }}">
                        <i class="ti ti-map-pin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-right d-flex justify-content-between flex-column">
            <div class="sidebar-scroll p-3">
                <h6 class="mb-3">Main Menu</h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('state*') ? 'active' : '' }}" href="{{ route('state.index') }}">States</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>