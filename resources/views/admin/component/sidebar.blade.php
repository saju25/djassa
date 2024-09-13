<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion shadow-lg" id="sidenavAccordion">
        <div class="sb-sidenav-menu shadow mt-4">
            <div class="nav d-flex justify-content-between admin_nv">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                    Djassa User
                </a>
                <a class="nav-link" href="{{ route('admin.website.social.links') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                    Company contact
                </a>

                @if(Auth::guard('admin')->user()->type == 1)

                <a class="nav-link" href="{{ route('admin.manages') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                    Admin Manages
                </a>
                @endif

                <a class="nav-link" href="{{ route('admin.change.password.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-key"></i></div>
                    Change Password
                </a>

            </div>
        </div>
    </nav>
</div>