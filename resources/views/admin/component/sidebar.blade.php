<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion" id="sidenavAccordion">
        <div class="sb-sidenav-menu h-100 mt-4">
            <div class="admin_nv h-100 d-flex flex-column justify-content-between">
                            <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                        Djassa User
                    </a>
                </div>

            <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.company.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                        Company Informatin
                    </a>
                </div>

                <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.website.social.links') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                        Company contact
                    </a>
                </div>
                <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.delivery-company-info') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                        Delivery Company contact
                    </a>
                </div>
                <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.banner-in') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                        Banner Information
                    </a>
                </div>

                @if(Auth::guard('admin')->user()->type == 1)

                <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.manages') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                        Admin Manages
                    </a>
                </div>
                @endif

                <div class="link_admin">
                    <a class="nav-link" href="{{ route('admin.change.password.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-key"></i></div>
                        Change Password
                    </a>
                </div>

            </div>
        </div>
    </nav>
</div>
