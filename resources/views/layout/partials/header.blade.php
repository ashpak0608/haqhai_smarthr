<div class="header">
    <div class="main-header">
        <div class="header-left">
            <a href="{{ url('index') }}" class="logo">
                <img src="{{ asset('/build/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ url('index') }}" class="dark-logo">
                <img src="{{ asset('/build/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">
                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <span class="input-icon-addon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search in HRMS">
                        <span class="input-group-text"><kbd>CTRL + / </kbd></span>
                    </div>

                    <div class="dropdown crm-dropdown">
                        <a href="#" class="btn btn-menubar me-1" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-start">
                            <div class="card mb-0 border-0 shadow-none">
                                <div class="card-header"><h4>CRM</h4></div>
                                <div class="card-body pb-1">		
                                    <div class="row">
                                        <div class="col-sm-6">							
                                            <a href="{{ url('contacts') }}" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3"><i class="ti ti-user-shield text-default me-2"></i>Contacts</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>							
                                            <a href="{{ url('deals-grid') }}" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3"><i class="ti ti-heart-handshake text-default me-2"></i>Deals</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown profile-dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                        <span class="avatar avatar-sm online">
                            <img src="{{ asset('/build/img/profiles/avatar-12.jpg') }}" alt="Img" class="img-fluid rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu shadow-none">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2 avatar-rounded">
                                        <img src="{{ asset('/build/img/profiles/avatar-12.jpg') }}" alt="img">
                                    </span>
                                    <div>
                                        <h5 class="mb-0">{{ Session::get('full_name') ?? 'User' }}</h5>
                                        <p class="fs-12 fw-medium mb-0">{{ Session::get('email_id') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="{{ url('profile') }}">
                                    <i class="ti ti-user-circle me-1"></i>My Profile
                                </a>
                            </div>
                            <div class="card-footer">
                                <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="{{ route('signout') }}">
                                    <i class="ti ti-login me-2"></i>Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>