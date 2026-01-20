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
                <li class="menu-title"><span>MAIN MENU</span></li>
                <li class="{{ Request::is('index') ? 'active' : '' }}">
                    <a href="{{ url('index') }}">
                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                    </a>
                </li>

                {{-- Dynamic Menus from Database --}}
                @foreach($dynamicMenus as $menu)
                    <li class="menu-title"><span>{{ strtoupper($menu->module_name) }}</span></li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is(strtolower($menu->module_name).'*') ? 'active subdrop' : '' }}">
                            <i class="{{ $menu->icon ?? 'ti ti-box' }}"></i>
                            <span>{{ $menu->module_name }}</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            @foreach($menu->submodules as $sub)
                                <li>
                                    <a href="{{ route($sub->route_name) }}" class="{{ Route::is($sub->route_name) ? 'active' : '' }}">
                                        {{ $sub->submodule_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
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
                    {{-- Left Icons for Dynamic Menus --}}
                    @foreach($dynamicMenus as $menu)
                        <a href="javascript:void(0);" class="nav-link {{ Request::is(strtolower($menu->module_name).'*') ? 'active' : '' }}" title="{{ $menu->module_name }}">
                            <i class="{{ $menu->icon ?? 'ti ti-box' }}"></i>
                        </a>
                    @endforeach
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
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <ul>
                            <li class="menu-title"><span>MENU</span></li>
                            <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">Dashboard</a></li>
                            
                            @foreach($dynamicMenus as $menu)
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="active">{{ $menu->module_name }} <span class="menu-arrow"></span></a>
                                    <ul>
                                        @foreach($menu->submodules as $sub)
                                            <li><a href="{{ route($sub->route_name) }}" class="{{ Route::is($sub->route_name) ? 'active' : '' }}">{{ $sub->submodule_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
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
                    @foreach($dynamicMenus as $menu)
                        <a href="javascript:void(0);" class="btn btn-menubar {{ Request::is(strtolower($menu->module_name).'*') ? 'active' : '' }}">
                            <i class="{{ $menu->icon ?? 'ti ti-box' }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="sidebar-right d-flex justify-content-between flex-column">
            <div class="sidebar-scroll p-3">
                <h6 class="mb-3">Main Menu</h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}">Dashboard</a></li>
                    
                    @foreach($dynamicMenus as $menu)
                        <li class="nav-item fw-bold mt-2 text-uppercase" style="font-size: 11px;">{{ $menu->module_name }}</li>
                        @foreach($menu->submodules as $sub)
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is($sub->route_name) ? 'active' : '' }}" href="{{ route($sub->route_name) }}">{{ $sub->submodule_name }}</a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>