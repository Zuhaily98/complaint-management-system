<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Account)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <div class="sidenav-menu-heading d-sm-none">Account</div>
                <!-- Sidenav Link (Alerts)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Alerts
                    <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
                </a>
                <!-- Sidenav Link (Messages)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Messages
                    <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
                </a>
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="index.html">
                            Default
                            <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                        </a>
                        <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                        <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                    </nav>
                </div>
                <!-- Sidenav Heading (UI Toolkit)-->
                <div class="sidenav-menu-heading">Complaint Management</div>
                <!-- Sidenav Accordion (Panel)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Complaint
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="multi-tenant-select.html">List of Complaint</a>
                        <a class="nav-link" href="wizard.html">Search Complaint</a>
                    </nav>
                </div>
                <!-- Sidenav Heading (App Views)-->
                <div class="sidenav-menu-heading">Account Management</div>
                <!-- Sidenav Accordion (Pages)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Account
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                        <!-- Nested Sidenav Accordion (Profile)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                            Profile
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAccount" data-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.profile') }}">Profile</a>
                                <a class="nav-link" href="#">Change Password</a>
                            </nav>
                        </div>
                        <!-- Nested Sidenav Accordion (Manage Account)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Manage Another Account
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="auth-login-basic.html">Add Admin Account</a>
                                <a class="nav-link" href="auth-register-basic.html">Add Officer Account</a>
                                <a class="nav-link" href="auth-password-basic.html">View All Account</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <!-- Sidenav Heading (Panel and Places)-->
                <div class="sidenav-menu-heading">Panel and Places</div>
                <!-- Sidenav Accordion (Panel)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Panel
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="alerts.html">List of Panel</a>
                        <a class="nav-link" href="avatars.html">Add Panel</a>
                        <a class="nav-link" href="badges.html">Add Person In Charge</a>
                    </nav>
                </div>
                <!-- Sidenav Accordion (Places)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
                    Place
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="animations.html">List of Places</a>
                        <a class="nav-link" href="background.html">Add State</a>
                        <a class="nav-link" href="borders.html">Add City</a>
                        <a class="nav-link" href="lift.html">Add District</a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>