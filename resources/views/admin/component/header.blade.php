<div class="container">
    <nav class="sb-topnav navbar navbar-expand d-flex shadow bg-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand " href="{{ url('/') }}">
            <img class="img-fluid p-3" src="{{ asset('user') }}/img/logo-preview.png" alt="">
        </a>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 d-flex justify-content-end w-100">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form method="post" action="{{ route('admin.logout') }}">
                        @csrf

                        <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </div>
        </ul>
    </nav>
</div>